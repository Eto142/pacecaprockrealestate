<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('trcImage')->nullable();
            $table->string('btcImage')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_no', 250)->nullable();
            $table->string('routing_no', 250)->nullable();
            $table->string('bank_address')->nullable();
            $table->string('home_address')->nullable();
            $table->string('otp_code')->nullable();
            $table->timestamp('otp_expiry')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'trcImage',
                'btcImage',
                'bank_name',
                'account_name',
                'account_no',
                'routing_no',
                'bank_address',
                'home_address',
                'otp_code',
                'otp_expiry',
            ]);
        });
    }
};
