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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->integer('fixture_id'); 
            $table->integer('matchday');  
            $table->integer('home_team'); 
            $table->integer('away_team'); 

            $table->integer('homeTeam_goal')->nullable(); 
            $table->integer('awayTeam_goal')->nullable(); 

            // $table->text('score'); 
            // $table->integer('homeTeam_goalsAgainst'); 
            // $table->integer('awayTeam_goalsAgainst'); 
            $table->integer('home_points')->nullable(); 
            $table->integer('away_points')->nullable(); 
            // $table->text('home_result'); 
            // $table->text('away_result'); 
                        
            $table->double('home_xG')->nullable(); 
            $table->double('away_xG')->nullable(); 

            $table->integer('home_ballPossession')->nullable(); 
            $table->integer('away_ballPossession')->nullable(); 

            $table->integer('home_shots')->nullable(); 
            $table->integer('away_shots')->nullable(); 

            $table->integer('home_shotsOnTarget')->nullable();
            $table->integer('away_shotsOnTarget')->nullable();

            $table->integer('home_corners')->nullable();
            $table->integer('away_corners')->nullable();

            $table->integer('home_offsides')->nullable();
            $table->integer('away_offsides')->nullable();

            $table->integer('home_fouls')->nullable();
            $table->integer('away_fouls')->nullable();

            $table->integer('home_yellow')->nullable();
            $table->integer('away_yellow')->nullable();

            $table->integer('home_red')->nullable();
            $table->integer('away_red')->nullable();
            
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
        Schema::dropIfExists('results');
    }
};
