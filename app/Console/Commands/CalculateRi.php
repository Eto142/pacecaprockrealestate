<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Investment;
use App\Models\Earning;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CalculateRi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:ri';

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
       
            // Retrieve the users who need their investment topped up
            $activeInvestments = DB::table('investments')
            ->where('status', '=', 'Active')
            ->where('plan_start', '<', 'plan_end')
            ->get();

        foreach ($activeInvestments as $investment) {

            
        

           $dailyReturn = $investment->amount * $investment->plan_percentage;



                   // insert profit into earnings table
        DB::table('earnings')->insert([
            'user_id' => $investment->user_id,
            'capital' => $investment->amount,
            'return' => $dailyReturn,
            'description' => $investment->plan_name,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

          
          
            
            

            // Send an email confirmation
            // Mail::send('emails.investment_top_up', ['user' => $user], function ($message) use ($user) {
            //     $message->to($user->email)->subject('Investment top-up');
            // });
        
    }

        // Retrieve the users who have reached the end of their top-up period
        $inactiveInvestments = DB::table('investments')
            ->where('plan_end', '=', date('Y-m-d'))
            ->get();

        foreach ($inactiveInvestments as $user) {
            // Stop topping up the user's investment
            DB::table('investments')
                ->where('id', $user->id)
                ->update([
                    'status' => 'Expired',
                ]);

               

            // Send a notification email
            // Mail::send('emails.investment_top_up_ended', ['user' => $user], function ($message) use ($user) {
            //     $message->to($user->email)->subject('Investment top-up ended');
            // });
        }
    }


}






            

