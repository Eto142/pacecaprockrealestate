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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id');
            $table->string('slug')->nullable();
            $table->string('name', 250)->nullable();
            $table->string('bed', 250)->nullable();
            $table->string('bath', 250)->nullable();
            $table->string('square', 250)->nullable();
            $table->string('state')->nullable();
            $table->string('address')->nullable();
            $table->longText('description')->nullable();
            $table->integer('original_price')->nullable();
            $table->integer('selling_price')->nullable();
            $table->tinyInteger('trending')->default(0)->comment('1=trending, 0 = not-trending');
            $table->string('status', 100)->nullable()->default('On Sale')->comment('1=sold, 0 = on-sale');
            $table->string('rating', 11)->default('3');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
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
        Schema::dropIfExists('houses');
    }
};
