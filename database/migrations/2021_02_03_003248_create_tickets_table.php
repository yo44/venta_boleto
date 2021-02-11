<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('hour_c');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('flights_id')->nullable();
            
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('flights_id')->references('id')->on('flights'); 
            
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
        Schema::dropIfExists('tickets');
    }
}
