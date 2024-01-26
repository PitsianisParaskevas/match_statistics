<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\Fixture;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Team::create( [
            'id'=>1,
            'name'=>'Arsenal',
            'image'=>'arsenal.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>2,
            'name'=>'Aston Villa',
            'image'=>'aston villa.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>3,
            'name'=>'Bournemouth',
            'image'=>'bournemouth.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>4,
            'name'=>'Brentford',
            'image'=>'brentford.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>5,
            'name'=>'Brighton',
            'image'=>'brighton and hove albion.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>6,
            'name'=>'Burnley',
            'image'=>'burnley.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>7,
            'name'=>'Chelsea',
            'image'=>'chelsea.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>8,
            'name'=>'Crystal Palace',
            'image'=>'crystal palace.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>9,
            'name'=>'Everton',
            'image'=>'everton.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>10,
            'name'=>'Fulham',
            'image'=>'fulham.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>11,
            'name'=>'Liverpool',
            'image'=>'liverpool.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>12,
            'name'=>'Luton',
            'image'=>'luton town.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>13,
            'name'=>'Manchester City',
            'image'=>'manchester city.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>14,
            'name'=>'Manchester United',
            'image'=>'manchester united.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>15,
            'name'=>'Newcastle',
            'image'=>'newcastle united.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>16,
            'name'=>'Nottingham Forest',
            'image'=>'nottingham forest.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>17,
            'name'=>'Sheffield United',
            'image'=>'sheffield united.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>18,
            'name'=>'Tottenham',
            'image'=>'tottenham hotspur.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>19,
            'name'=>'West Ham',
            'image'=>'west ham united.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Team::create( [
            'id'=>20,
            'name'=>'Wolves',
            'image'=>'wolves.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );


            // Fixtures
            Fixture::create( [
                'id'=>1,
                'matchday'=>1,
                'home_team'=>6,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>2,
                'matchday'=>1,
                'home_team'=>1,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>3,
                'matchday'=>1,
                'home_team'=>3,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>4,
                'matchday'=>1,
                'home_team'=>5,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>5,
                'matchday'=>1,
                'home_team'=>9,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>6,
                'matchday'=>1,
                'home_team'=>17,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>7,
                'matchday'=>1,
                'home_team'=>15,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>8,
                'matchday'=>1,
                'home_team'=>4,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>9,
                'matchday'=>1,
                'home_team'=>7,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>10,
                'matchday'=>1,
                'home_team'=>14,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>11,
                'matchday'=>2,
                'home_team'=>2,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>12,
                'matchday'=>2,
                'home_team'=>8,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>13,
                'matchday'=>2,
                'home_team'=>10,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>14,
                'matchday'=>2,
                'home_team'=>11,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>15,
                'matchday'=>2,
                'home_team'=>12,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>16,
                'matchday'=>2,
                'home_team'=>13,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>17,
                'matchday'=>2,
                'home_team'=>16,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>18,
                'matchday'=>2,
                'home_team'=>18,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>19,
                'matchday'=>2,
                'home_team'=>19,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>20,
                'matchday'=>2,
                'home_team'=>20,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>21,
                'matchday'=>3,
                'home_team'=>1,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>22,
                'matchday'=>3,
                'home_team'=>3,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>23,
                'matchday'=>3,
                'home_team'=>4,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>24,
                'matchday'=>3,
                'home_team'=>5,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>25,
                'matchday'=>3,
                'home_team'=>6,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>26,
                'matchday'=>3,
                'home_team'=>7,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>27,
                'matchday'=>3,
                'home_team'=>9,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>28,
                'matchday'=>3,
                'home_team'=>14,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>29,
                'matchday'=>3,
                'home_team'=>15,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>30,
                'matchday'=>3,
                'home_team'=>17,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>31,
                'matchday'=>4,
                'home_team'=>1,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>32,
                'matchday'=>4,
                'home_team'=>4,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>33,
                'matchday'=>4,
                'home_team'=>5,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>34,
                'matchday'=>4,
                'home_team'=>6,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>35,
                'matchday'=>4,
                'home_team'=>7,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>36,
                'matchday'=>4,
                'home_team'=>8,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>37,
                'matchday'=>4,
                'home_team'=>11,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>38,
                'matchday'=>4,
                'home_team'=>12,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>39,
                'matchday'=>4,
                'home_team'=>13,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>40,
                'matchday'=>4,
                'home_team'=>17,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>41,
                'matchday'=>5,
                'home_team'=>2,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>42,
                'matchday'=>5,
                'home_team'=>3,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>43,
                'matchday'=>5,
                'home_team'=>9,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>44,
                'matchday'=>5,
                'home_team'=>10,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>45,
                'matchday'=>5,
                'home_team'=>14,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>46,
                'matchday'=>5,
                'home_team'=>15,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>47,
                'matchday'=>5,
                'home_team'=>16,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>48,
                'matchday'=>5,
                'home_team'=>18,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>49,
                'matchday'=>5,
                'home_team'=>19,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>50,
                'matchday'=>5,
                'home_team'=>20,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>51,
                'matchday'=>6,
                'home_team'=>1,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>52,
                'matchday'=>6,
                'home_team'=>4,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>53,
                'matchday'=>6,
                'home_team'=>5,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>54,
                'matchday'=>6,
                'home_team'=>6,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>55,
                'matchday'=>6,
                'home_team'=>7,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>56,
                'matchday'=>6,
                'home_team'=>8,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>57,
                'matchday'=>6,
                'home_team'=>11,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>58,
                'matchday'=>6,
                'home_team'=>12,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>59,
                'matchday'=>6,
                'home_team'=>13,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>60,
                'matchday'=>6,
                'home_team'=>17,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>61,
                'matchday'=>7,
                'home_team'=>2,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>62,
                'matchday'=>7,
                'home_team'=>3,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>63,
                'matchday'=>7,
                'home_team'=>9,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>64,
                'matchday'=>7,
                'home_team'=>10,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>65,
                'matchday'=>7,
                'home_team'=>14,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>66,
                'matchday'=>7,
                'home_team'=>15,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>67,
                'matchday'=>7,
                'home_team'=>16,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>68,
                'matchday'=>7,
                'home_team'=>18,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>69,
                'matchday'=>7,
                'home_team'=>19,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>70,
                'matchday'=>7,
                'home_team'=>20,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>71,
                'matchday'=>8,
                'home_team'=>1,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>72,
                'matchday'=>8,
                'home_team'=>5,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>73,
                'matchday'=>8,
                'home_team'=>6,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>74,
                'matchday'=>8,
                'home_team'=>8,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>75,
                'matchday'=>8,
                'home_team'=>9,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>76,
                'matchday'=>8,
                'home_team'=>10,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>77,
                'matchday'=>8,
                'home_team'=>12,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>78,
                'matchday'=>8,
                'home_team'=>14,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>79,
                'matchday'=>8,
                'home_team'=>19,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>80,
                'matchday'=>8,
                'home_team'=>20,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>81,
                'matchday'=>9,
                'home_team'=>2,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>82,
                'matchday'=>9,
                'home_team'=>3,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>83,
                'matchday'=>9,
                'home_team'=>4,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>84,
                'matchday'=>9,
                'home_team'=>7,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>85,
                'matchday'=>9,
                'home_team'=>11,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>86,
                'matchday'=>9,
                'home_team'=>13,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>87,
                'matchday'=>9,
                'home_team'=>15,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>88,
                'matchday'=>9,
                'home_team'=>16,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>89,
                'matchday'=>9,
                'home_team'=>17,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>90,
                'matchday'=>9,
                'home_team'=>18,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>91,
                'matchday'=>10,
                'home_team'=>1,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>92,
                'matchday'=>10,
                'home_team'=>2,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>93,
                'matchday'=>10,
                'home_team'=>3,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>94,
                'matchday'=>10,
                'home_team'=>5,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>95,
                'matchday'=>10,
                'home_team'=>7,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>96,
                'matchday'=>10,
                'home_team'=>8,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>97,
                'matchday'=>10,
                'home_team'=>11,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>98,
                'matchday'=>10,
                'home_team'=>14,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>99,
                'matchday'=>10,
                'home_team'=>19,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>100,
                'matchday'=>10,
                'home_team'=>20,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>101,
                'matchday'=>11,
                'home_team'=>4,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>102,
                'matchday'=>11,
                'home_team'=>6,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>103,
                'matchday'=>11,
                'home_team'=>9,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>104,
                'matchday'=>11,
                'home_team'=>10,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>105,
                'matchday'=>11,
                'home_team'=>12,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>106,
                'matchday'=>11,
                'home_team'=>13,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>107,
                'matchday'=>11,
                'home_team'=>15,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>108,
                'matchday'=>11,
                'home_team'=>16,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>109,
                'matchday'=>11,
                'home_team'=>17,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>110,
                'matchday'=>11,
                'home_team'=>18,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>111,
                'matchday'=>12,
                'home_team'=>1,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>112,
                'matchday'=>12,
                'home_team'=>2,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>113,
                'matchday'=>12,
                'home_team'=>3,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>114,
                'matchday'=>12,
                'home_team'=>5,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>115,
                'matchday'=>12,
                'home_team'=>7,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>116,
                'matchday'=>12,
                'home_team'=>8,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>117,
                'matchday'=>12,
                'home_team'=>11,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>118,
                'matchday'=>12,
                'home_team'=>14,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>119,
                'matchday'=>12,
                'home_team'=>19,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>120,
                'matchday'=>12,
                'home_team'=>20,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>121,
                'matchday'=>13,
                'home_team'=>4,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>122,
                'matchday'=>13,
                'home_team'=>6,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>123,
                'matchday'=>13,
                'home_team'=>9,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>124,
                'matchday'=>13,
                'home_team'=>10,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>125,
                'matchday'=>13,
                'home_team'=>12,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>126,
                'matchday'=>13,
                'home_team'=>13,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>127,
                'matchday'=>13,
                'home_team'=>15,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>128,
                'matchday'=>13,
                'home_team'=>16,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>129,
                'matchday'=>13,
                'home_team'=>17,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>130,
                'matchday'=>13,
                'home_team'=>18,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>131,
                'matchday'=>14,
                'home_team'=>1,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>132,
                'matchday'=>14,
                'home_team'=>3,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>133,
                'matchday'=>14,
                'home_team'=>4,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>134,
                'matchday'=>14,
                'home_team'=>6,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>135,
                'matchday'=>14,
                'home_team'=>7,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>136,
                'matchday'=>14,
                'home_team'=>11,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>137,
                'matchday'=>14,
                'home_team'=>13,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>138,
                'matchday'=>14,
                'home_team'=>15,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>139,
                'matchday'=>14,
                'home_team'=>16,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>140,
                'matchday'=>14,
                'home_team'=>19,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>141,
                'matchday'=>15,
                'home_team'=>2,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>142,
                'matchday'=>15,
                'home_team'=>5,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>143,
                'matchday'=>15,
                'home_team'=>9,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>144,
                'matchday'=>15,
                'home_team'=>10,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>145,
                'matchday'=>15,
                'home_team'=>12,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>146,
                'matchday'=>15,
                'home_team'=>17,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>147,
                'matchday'=>15,
                'home_team'=>18,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>148,
                'matchday'=>15,
                'home_team'=>20,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>149,
                'matchday'=>15,
                'home_team'=>8,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>150,
                'matchday'=>15,
                'home_team'=>14,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>151,
                'matchday'=>16,
                'home_team'=>2,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>152,
                'matchday'=>16,
                'home_team'=>5,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>153,
                'matchday'=>16,
                'home_team'=>8,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>154,
                'matchday'=>16,
                'home_team'=>9,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>155,
                'matchday'=>16,
                'home_team'=>10,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>156,
                'matchday'=>16,
                'home_team'=>12,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>157,
                'matchday'=>16,
                'home_team'=>14,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>158,
                'matchday'=>16,
                'home_team'=>17,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>159,
                'matchday'=>16,
                'home_team'=>18,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>160,
                'matchday'=>16,
                'home_team'=>20,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>161,
                'matchday'=>17,
                'home_team'=>1,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>162,
                'matchday'=>17,
                'home_team'=>3,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>163,
                'matchday'=>17,
                'home_team'=>4,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>164,
                'matchday'=>17,
                'home_team'=>6,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>165,
                'matchday'=>17,
                'home_team'=>7,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>166,
                'matchday'=>17,
                'home_team'=>11,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>167,
                'matchday'=>17,
                'home_team'=>13,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>168,
                'matchday'=>17,
                'home_team'=>15,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>169,
                'matchday'=>17,
                'home_team'=>16,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>170,
                'matchday'=>17,
                'home_team'=>19,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>171,
                'matchday'=>18,
                'home_team'=>2,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>172,
                'matchday'=>18,
                'home_team'=>8,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>173,
                'matchday'=>18,
                'home_team'=>10,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>174,
                'matchday'=>18,
                'home_team'=>11,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>175,
                'matchday'=>18,
                'home_team'=>12,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>176,
                'matchday'=>18,
                'home_team'=>13,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>177,
                'matchday'=>18,
                'home_team'=>16,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>178,
                'matchday'=>18,
                'home_team'=>18,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>179,
                'matchday'=>18,
                'home_team'=>19,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>180,
                'matchday'=>18,
                'home_team'=>20,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>181,
                'matchday'=>19,
                'home_team'=>1,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>182,
                'matchday'=>19,
                'home_team'=>3,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>183,
                'matchday'=>19,
                'home_team'=>4,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>184,
                'matchday'=>19,
                'home_team'=>5,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>185,
                'matchday'=>19,
                'home_team'=>6,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>186,
                'matchday'=>19,
                'home_team'=>7,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>187,
                'matchday'=>19,
                'home_team'=>9,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>188,
                'matchday'=>19,
                'home_team'=>14,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>189,
                'matchday'=>19,
                'home_team'=>15,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>190,
                'matchday'=>19,
                'home_team'=>17,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>191,
                'matchday'=>20,
                'home_team'=>2,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>192,
                'matchday'=>20,
                'home_team'=>8,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>193,
                'matchday'=>20,
                'home_team'=>10,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>194,
                'matchday'=>20,
                'home_team'=>11,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>195,
                'matchday'=>20,
                'home_team'=>12,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>196,
                'matchday'=>20,
                'home_team'=>13,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>197,
                'matchday'=>20,
                'home_team'=>16,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>198,
                'matchday'=>20,
                'home_team'=>18,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>199,
                'matchday'=>20,
                'home_team'=>19,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>200,
                'matchday'=>20,
                'home_team'=>20,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>201,
                'matchday'=>21,
                'home_team'=>1,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>202,
                'matchday'=>21,
                'home_team'=>3,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>203,
                'matchday'=>21,
                'home_team'=>4,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>204,
                'matchday'=>21,
                'home_team'=>5,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>205,
                'matchday'=>21,
                'home_team'=>6,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>206,
                'matchday'=>21,
                'home_team'=>7,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>207,
                'matchday'=>21,
                'home_team'=>9,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>208,
                'matchday'=>21,
                'home_team'=>14,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>209,
                'matchday'=>21,
                'home_team'=>15,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>210,
                'matchday'=>21,
                'home_team'=>17,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>211,
                'matchday'=>22,
                'home_team'=>2,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>212,
                'matchday'=>22,
                'home_team'=>10,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>213,
                'matchday'=>22,
                'home_team'=>12,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>214,
                'matchday'=>22,
                'home_team'=>16,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>215,
                'matchday'=>22,
                'home_team'=>18,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>216,
                'matchday'=>22,
                'home_team'=>19,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>217,
                'matchday'=>22,
                'home_team'=>20,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>218,
                'matchday'=>22,
                'home_team'=>8,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>219,
                'matchday'=>22,
                'home_team'=>11,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>220,
                'matchday'=>22,
                'home_team'=>13,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>221,
                'matchday'=>23,
                'home_team'=>1,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>222,
                'matchday'=>23,
                'home_team'=>3,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>223,
                'matchday'=>23,
                'home_team'=>4,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>224,
                'matchday'=>23,
                'home_team'=>5,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>225,
                'matchday'=>23,
                'home_team'=>6,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>226,
                'matchday'=>23,
                'home_team'=>7,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>227,
                'matchday'=>23,
                'home_team'=>9,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>228,
                'matchday'=>23,
                'home_team'=>14,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>229,
                'matchday'=>23,
                'home_team'=>15,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>230,
                'matchday'=>23,
                'home_team'=>17,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>231,
                'matchday'=>24,
                'home_team'=>2,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>232,
                'matchday'=>24,
                'home_team'=>8,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>233,
                'matchday'=>24,
                'home_team'=>10,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>234,
                'matchday'=>24,
                'home_team'=>11,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>235,
                'matchday'=>24,
                'home_team'=>12,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>236,
                'matchday'=>24,
                'home_team'=>13,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>237,
                'matchday'=>24,
                'home_team'=>16,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>238,
                'matchday'=>24,
                'home_team'=>18,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>239,
                'matchday'=>24,
                'home_team'=>19,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>240,
                'matchday'=>24,
                'home_team'=>20,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>241,
                'matchday'=>25,
                'home_team'=>4,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>242,
                'matchday'=>25,
                'home_team'=>6,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>243,
                'matchday'=>25,
                'home_team'=>9,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>244,
                'matchday'=>25,
                'home_team'=>10,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>245,
                'matchday'=>25,
                'home_team'=>12,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>246,
                'matchday'=>25,
                'home_team'=>13,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>247,
                'matchday'=>25,
                'home_team'=>15,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>248,
                'matchday'=>25,
                'home_team'=>16,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>249,
                'matchday'=>25,
                'home_team'=>17,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>250,
                'matchday'=>25,
                'home_team'=>18,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>251,
                'matchday'=>26,
                'home_team'=>1,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>252,
                'matchday'=>26,
                'home_team'=>2,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>253,
                'matchday'=>26,
                'home_team'=>3,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>254,
                'matchday'=>26,
                'home_team'=>5,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>255,
                'matchday'=>26,
                'home_team'=>7,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>256,
                'matchday'=>26,
                'home_team'=>8,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>257,
                'matchday'=>26,
                'home_team'=>11,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>258,
                'matchday'=>26,
                'home_team'=>14,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>259,
                'matchday'=>26,
                'home_team'=>19,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>260,
                'matchday'=>26,
                'home_team'=>20,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>261,
                'matchday'=>27,
                'home_team'=>4,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>262,
                'matchday'=>27,
                'home_team'=>6,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>263,
                'matchday'=>27,
                'home_team'=>9,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>264,
                'matchday'=>27,
                'home_team'=>10,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>265,
                'matchday'=>27,
                'home_team'=>12,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>266,
                'matchday'=>27,
                'home_team'=>13,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>267,
                'matchday'=>27,
                'home_team'=>15,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>268,
                'matchday'=>27,
                'home_team'=>16,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>269,
                'matchday'=>27,
                'home_team'=>17,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>270,
                'matchday'=>27,
                'home_team'=>18,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>271,
                'matchday'=>28,
                'home_team'=>1,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>272,
                'matchday'=>28,
                'home_team'=>2,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>273,
                'matchday'=>28,
                'home_team'=>3,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>274,
                'matchday'=>28,
                'home_team'=>5,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>275,
                'matchday'=>28,
                'home_team'=>7,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>276,
                'matchday'=>28,
                'home_team'=>8,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>277,
                'matchday'=>28,
                'home_team'=>11,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>278,
                'matchday'=>28,
                'home_team'=>14,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>279,
                'matchday'=>28,
                'home_team'=>19,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>280,
                'matchday'=>28,
                'home_team'=>20,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>281,
                'matchday'=>29,
                'home_team'=>1,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>282,
                'matchday'=>29,
                'home_team'=>5,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>283,
                'matchday'=>29,
                'home_team'=>6,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>284,
                'matchday'=>29,
                'home_team'=>8,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>285,
                'matchday'=>29,
                'home_team'=>9,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>286,
                'matchday'=>29,
                'home_team'=>10,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>287,
                'matchday'=>29,
                'home_team'=>12,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>288,
                'matchday'=>29,
                'home_team'=>14,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>289,
                'matchday'=>29,
                'home_team'=>19,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>290,
                'matchday'=>29,
                'home_team'=>20,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>291,
                'matchday'=>30,
                'home_team'=>2,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>292,
                'matchday'=>30,
                'home_team'=>3,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>293,
                'matchday'=>30,
                'home_team'=>4,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>294,
                'matchday'=>30,
                'home_team'=>7,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>295,
                'matchday'=>30,
                'home_team'=>11,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>296,
                'matchday'=>30,
                'home_team'=>13,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>297,
                'matchday'=>30,
                'home_team'=>15,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>298,
                'matchday'=>30,
                'home_team'=>16,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>299,
                'matchday'=>30,
                'home_team'=>17,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>300,
                'matchday'=>30,
                'home_team'=>18,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>301,
                'matchday'=>31,
                'home_team'=>1,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>302,
                'matchday'=>31,
                'home_team'=>3,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>303,
                'matchday'=>31,
                'home_team'=>4,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>304,
                'matchday'=>31,
                'home_team'=>6,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>305,
                'matchday'=>31,
                'home_team'=>16,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>306,
                'matchday'=>31,
                'home_team'=>19,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>307,
                'matchday'=>31,
                'home_team'=>7,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>308,
                'matchday'=>31,
                'home_team'=>15,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>309,
                'matchday'=>31,
                'home_team'=>11,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>310,
                'matchday'=>31,
                'home_team'=>13,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>311,
                'matchday'=>32,
                'home_team'=>2,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>312,
                'matchday'=>32,
                'home_team'=>5,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>313,
                'matchday'=>32,
                'home_team'=>8,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>314,
                'matchday'=>32,
                'home_team'=>9,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>315,
                'matchday'=>32,
                'home_team'=>10,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>316,
                'matchday'=>32,
                'home_team'=>12,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>317,
                'matchday'=>32,
                'home_team'=>14,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>318,
                'matchday'=>32,
                'home_team'=>17,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>319,
                'matchday'=>32,
                'home_team'=>18,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>320,
                'matchday'=>32,
                'home_team'=>20,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>321,
                'matchday'=>33,
                'home_team'=>1,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>322,
                'matchday'=>33,
                'home_team'=>3,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>323,
                'matchday'=>33,
                'home_team'=>4,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>324,
                'matchday'=>33,
                'home_team'=>6,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>325,
                'matchday'=>33,
                'home_team'=>7,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>326,
                'matchday'=>33,
                'home_team'=>11,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>327,
                'matchday'=>33,
                'home_team'=>13,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>328,
                'matchday'=>33,
                'home_team'=>15,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>329,
                'matchday'=>33,
                'home_team'=>16,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>330,
                'matchday'=>33,
                'home_team'=>19,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>331,
                'matchday'=>34,
                'home_team'=>2,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>332,
                'matchday'=>34,
                'home_team'=>5,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>333,
                'matchday'=>34,
                'home_team'=>8,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>334,
                'matchday'=>34,
                'home_team'=>9,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>335,
                'matchday'=>34,
                'home_team'=>10,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>336,
                'matchday'=>34,
                'home_team'=>12,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>337,
                'matchday'=>34,
                'home_team'=>14,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>338,
                'matchday'=>34,
                'home_team'=>17,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>339,
                'matchday'=>34,
                'home_team'=>18,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>340,
                'matchday'=>34,
                'home_team'=>20,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>341,
                'matchday'=>35,
                'home_team'=>2,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>342,
                'matchday'=>35,
                'home_team'=>3,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>343,
                'matchday'=>35,
                'home_team'=>9,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>344,
                'matchday'=>35,
                'home_team'=>10,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>345,
                'matchday'=>35,
                'home_team'=>14,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>346,
                'matchday'=>35,
                'home_team'=>15,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>347,
                'matchday'=>35,
                'home_team'=>16,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>348,
                'matchday'=>35,
                'home_team'=>18,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>349,
                'matchday'=>35,
                'home_team'=>19,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>350,
                'matchday'=>35,
                'home_team'=>20,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>351,
                'matchday'=>36,
                'home_team'=>1,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>352,
                'matchday'=>36,
                'home_team'=>4,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>353,
                'matchday'=>36,
                'home_team'=>5,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>354,
                'matchday'=>36,
                'home_team'=>6,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>355,
                'matchday'=>36,
                'home_team'=>7,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>356,
                'matchday'=>36,
                'home_team'=>8,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>357,
                'matchday'=>36,
                'home_team'=>11,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>358,
                'matchday'=>36,
                'home_team'=>12,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>359,
                'matchday'=>36,
                'home_team'=>13,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>360,
                'matchday'=>36,
                'home_team'=>17,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>361,
                'matchday'=>37,
                'home_team'=>2,
                'away_team'=>11,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>362,
                'matchday'=>37,
                'home_team'=>3,
                'away_team'=>4,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>363,
                'matchday'=>37,
                'home_team'=>9,
                'away_team'=>17,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>364,
                'matchday'=>37,
                'home_team'=>10,
                'away_team'=>13,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>365,
                'matchday'=>37,
                'home_team'=>14,
                'away_team'=>1,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>366,
                'matchday'=>37,
                'home_team'=>15,
                'away_team'=>5,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>367,
                'matchday'=>37,
                'home_team'=>16,
                'away_team'=>7,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>368,
                'matchday'=>37,
                'home_team'=>18,
                'away_team'=>6,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>369,
                'matchday'=>37,
                'home_team'=>19,
                'away_team'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>370,
                'matchday'=>37,
                'home_team'=>20,
                'away_team'=>8,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>371,
                'matchday'=>38,
                'home_team'=>1,
                'away_team'=>9,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>372,
                'matchday'=>38,
                'home_team'=>4,
                'away_team'=>15,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>373,
                'matchday'=>38,
                'home_team'=>5,
                'away_team'=>14,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>374,
                'matchday'=>38,
                'home_team'=>6,
                'away_team'=>16,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>375,
                'matchday'=>38,
                'home_team'=>7,
                'away_team'=>3,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>376,
                'matchday'=>38,
                'home_team'=>8,
                'away_team'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>377,
                'matchday'=>38,
                'home_team'=>11,
                'away_team'=>20,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>378,
                'matchday'=>38,
                'home_team'=>12,
                'away_team'=>10,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>379,
                'matchday'=>38,
                'home_team'=>13,
                'away_team'=>19,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                
                            
                Fixture::create( [
                'id'=>380,
                'matchday'=>38,
                'home_team'=>17,
                'away_team'=>18,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
                
                


    }
}
