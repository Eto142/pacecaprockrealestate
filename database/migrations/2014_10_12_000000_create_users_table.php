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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('usertype')->default('0');
            $table->string('email')->unique();
            $table->string('date_of_birth')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('country')->nullable();
            $table->string('house_address')->nullable();
            $table->string('btc_address')->nullable();
            $table->string('usdt_address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('last_seen')->nullable();
            $table->tinyInteger('kyc_status')->nullable();
            $table->string('kyc_type', 100)->nullable();
            $table->string('kyc_front', 100)->nullable();
            $table->string('kyc_back', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
