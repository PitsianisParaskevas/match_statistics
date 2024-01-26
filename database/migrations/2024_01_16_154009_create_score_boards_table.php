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
        Schema::create('score_boards', function (Blueprint $table) {
            $table->id();
            $table->integer('result_id'); 
            $table->integer('matchday');  
            $table->integer('team_id'); 
            $table->integer('points');
            $table->integer('goalFor');
            $table->integer('goalAgainst');
            $table->string('result');
            $table->integer('win');
            $table->integer('lose');
            $table->integer('draw');
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
        Schema::dropIfExists('score_boards');
    }
};
