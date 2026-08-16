<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\earningEmail;
use App\Mail\releaseEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class CalculateROI extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:roi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate and payout ROI for all users';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $today = date('Y-m-d');
        $paid = 0;
        $skipped = 0;

        // Investments that are still running: active, started, and not yet past
        // their end date. These earn one payout per day.
        $activeInvestments = DB::table('investments')
            ->where('status', 'Active')
            ->where('plan_start', '<=', $today)
            ->where('plan_end', '>=', $today)
            ->get();

        foreach ($activeInvestments as $investment) {
            // Guard against a double payout if the command is run more than
            // once in a day (a manual run, or a catch-up after downtime).
            $alreadyPaidToday = DB::table('earnings')
                ->where('user_id', $investment->user_id)
                ->where('description', $investment->plan_name)
                ->whereDate('created_at', $today)
                ->exists();

            if ($alreadyPaidToday) {
                $skipped++;

                continue;
            }

            $dailyReturn = $investment->amount * $investment->plan_percentage;

            // insert profit into earnings table
            DB::table('earnings')->insert([
                'user_id' => $investment->user_id,
                'capital' => $investment->amount,
                'return' => $dailyReturn,
                'description' => $investment->plan_name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $paid++;

            $data = "Your ".$investment->plan_name." contract has generated ROI of $".$dailyReturn." which has been successfully credited into your account.";

            // Send an email confirmation. A mail failure must not stop the
            // remaining investors from being paid.
            try {
                Mail::to($investment->email)->send(new earningEmail($data));
            } catch (\Throwable $e) {
                Log::error('ROI email failed for investment '.$investment->id.': '.$e->getMessage());
            }
        }

        // Investments that have reached the end of their term. Filtering on
        // Active keeps this idempotent, and using <= catches any that ended
        // while the scheduler was down.
        $maturedInvestments = DB::table('investments')
            ->where('status', 'Active')
            ->where('plan_end', '<=', $today)
            ->get();

        foreach ($maturedInvestments as $investment) {
            // Stop topping up the user's investment
            DB::table('investments')
                ->where('id', $investment->id)
                ->update([
                    'status' => 'Expired',
                ]);

            $data = "Capital release for ".$investment->plan_name." that expired on ".$investment->plan_end.". Thanks.";

            try {
                Mail::to($investment->email)->send(new releaseEmail($data));
            } catch (\Throwable $e) {
                Log::error('Release email failed for investment '.$investment->id.': '.$e->getMessage());
            }
        }

        $this->info('ROI run complete: '.$paid.' paid, '.$skipped.' already paid today, '.$maturedInvestments->count().' expired.');

        return 0;
    }
}
