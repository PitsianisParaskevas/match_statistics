<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ScoreBoard;

class ScoreBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Scoreboard::create( [
            'id'=>1,
            'result_id'=>1,
            'matchday'=>1,
            'team_id'=>6,
            'points'=>0,
            'goalFor'=>0,
            'goalAgainst'=>3,
            'result'=>'L',
            'win'=>0,
            'lose'=>1,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:22:00',
            'updated_at'=>'2024-01-24 17:22:00'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>2,
            'result_id'=>1,
            'matchday'=>1,
            'team_id'=>13,
            'points'=>3,
            'goalFor'=>3,
            'goalAgainst'=>0,
            'result'=>'W',
            'win'=>1,
            'lose'=>0,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:22:00',
            'updated_at'=>'2024-01-24 17:22:00'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>3,
            'result_id'=>2,
            'matchday'=>1,
            'team_id'=>1,
            'points'=>3,
            'goalFor'=>2,
            'goalAgainst'=>1,
            'result'=>'W',
            'win'=>1,
            'lose'=>0,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:23:01',
            'updated_at'=>'2024-01-24 17:23:01'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>4,
            'result_id'=>2,
            'matchday'=>1,
            'team_id'=>16,
            'points'=>0,
            'goalFor'=>1,
            'goalAgainst'=>2,
            'result'=>'L',
            'win'=>0,
            'lose'=>1,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:23:01',
            'updated_at'=>'2024-01-24 17:23:01'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>5,
            'result_id'=>3,
            'matchday'=>1,
            'team_id'=>3,
            'points'=>1,
            'goalFor'=>1,
            'goalAgainst'=>1,
            'result'=>'D',
            'win'=>0,
            'lose'=>0,
            'draw'=>1,
            'created_at'=>'2024-01-24 17:24:13',
            'updated_at'=>'2024-01-24 17:24:13'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>6,
            'result_id'=>3,
            'matchday'=>1,
            'team_id'=>19,
            'points'=>1,
            'goalFor'=>1,
            'goalAgainst'=>1,
            'result'=>'D',
            'win'=>0,
            'lose'=>0,
            'draw'=>1,
            'created_at'=>'2024-01-24 17:24:13',
            'updated_at'=>'2024-01-24 17:24:13'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>7,
            'result_id'=>4,
            'matchday'=>1,
            'team_id'=>5,
            'points'=>3,
            'goalFor'=>4,
            'goalAgainst'=>1,
            'result'=>'W',
            'win'=>1,
            'lose'=>0,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:25:13',
            'updated_at'=>'2024-01-24 17:25:13'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>8,
            'result_id'=>4,
            'matchday'=>1,
            'team_id'=>12,
            'points'=>0,
            'goalFor'=>1,
            'goalAgainst'=>4,
            'result'=>'L',
            'win'=>0,
            'lose'=>1,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:25:13',
            'updated_at'=>'2024-01-24 17:25:13'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>9,
            'result_id'=>5,
            'matchday'=>1,
            'team_id'=>9,
            'points'=>0,
            'goalFor'=>0,
            'goalAgainst'=>1,
            'result'=>'L',
            'win'=>0,
            'lose'=>1,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:26:15',
            'updated_at'=>'2024-01-24 17:26:15'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>10,
            'result_id'=>5,
            'matchday'=>1,
            'team_id'=>10,
            'points'=>3,
            'goalFor'=>1,
            'goalAgainst'=>0,
            'result'=>'W',
            'win'=>1,
            'lose'=>0,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:26:15',
            'updated_at'=>'2024-01-24 17:26:15'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>11,
            'result_id'=>6,
            'matchday'=>1,
            'team_id'=>17,
            'points'=>0,
            'goalFor'=>0,
            'goalAgainst'=>1,
            'result'=>'L',
            'win'=>0,
            'lose'=>1,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:27:37',
            'updated_at'=>'2024-01-24 17:27:37'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>12,
            'result_id'=>6,
            'matchday'=>1,
            'team_id'=>8,
            'points'=>3,
            'goalFor'=>1,
            'goalAgainst'=>0,
            'result'=>'W',
            'win'=>1,
            'lose'=>0,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:27:37',
            'updated_at'=>'2024-01-24 17:27:37'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>13,
            'result_id'=>7,
            'matchday'=>1,
            'team_id'=>15,
            'points'=>3,
            'goalFor'=>5,
            'goalAgainst'=>1,
            'result'=>'W',
            'win'=>1,
            'lose'=>0,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:28:28',
            'updated_at'=>'2024-01-24 17:28:28'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>14,
            'result_id'=>7,
            'matchday'=>1,
            'team_id'=>2,
            'points'=>0,
            'goalFor'=>1,
            'goalAgainst'=>5,
            'result'=>'L',
            'win'=>0,
            'lose'=>1,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:28:28',
            'updated_at'=>'2024-01-24 17:28:28'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>15,
            'result_id'=>8,
            'matchday'=>1,
            'team_id'=>4,
            'points'=>1,
            'goalFor'=>2,
            'goalAgainst'=>2,
            'result'=>'D',
            'win'=>0,
            'lose'=>0,
            'draw'=>1,
            'created_at'=>'2024-01-24 17:29:21',
            'updated_at'=>'2024-01-24 17:29:21'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>16,
            'result_id'=>8,
            'matchday'=>1,
            'team_id'=>18,
            'points'=>1,
            'goalFor'=>2,
            'goalAgainst'=>2,
            'result'=>'D',
            'win'=>0,
            'lose'=>0,
            'draw'=>1,
            'created_at'=>'2024-01-24 17:29:21',
            'updated_at'=>'2024-01-24 17:29:21'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>17,
            'result_id'=>9,
            'matchday'=>1,
            'team_id'=>7,
            'points'=>1,
            'goalFor'=>1,
            'goalAgainst'=>1,
            'result'=>'D',
            'win'=>0,
            'lose'=>0,
            'draw'=>1,
            'created_at'=>'2024-01-24 17:30:31',
            'updated_at'=>'2024-01-24 17:30:31'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>18,
            'result_id'=>9,
            'matchday'=>1,
            'team_id'=>11,
            'points'=>1,
            'goalFor'=>1,
            'goalAgainst'=>1,
            'result'=>'D',
            'win'=>0,
            'lose'=>0,
            'draw'=>1,
            'created_at'=>'2024-01-24 17:30:31',
            'updated_at'=>'2024-01-24 17:30:31'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>19,
            'result_id'=>10,
            'matchday'=>1,
            'team_id'=>14,
            'points'=>3,
            'goalFor'=>1,
            'goalAgainst'=>0,
            'result'=>'W',
            'win'=>1,
            'lose'=>0,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:31:26',
            'updated_at'=>'2024-01-24 17:31:26'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>20,
            'result_id'=>10,
            'matchday'=>1,
            'team_id'=>20,
            'points'=>0,
            'goalFor'=>0,
            'goalAgainst'=>1,
            'result'=>'L',
            'win'=>0,
            'lose'=>1,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:31:26',
            'updated_at'=>'2024-01-24 17:31:26'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>21,
            'result_id'=>11,
            'matchday'=>2,
            'team_id'=>2,
            'points'=>3,
            'goalFor'=>5,
            'goalAgainst'=>5,
            'result'=>'W',
            'win'=>1,
            'lose'=>1,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:32:34',
            'updated_at'=>'2024-01-24 17:32:34'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>22,
            'result_id'=>11,
            'matchday'=>2,
            'team_id'=>9,
            'points'=>0,
            'goalFor'=>0,
            'goalAgainst'=>5,
            'result'=>'L',
            'win'=>0,
            'lose'=>2,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:32:34',
            'updated_at'=>'2024-01-24 17:32:34'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>23,
            'result_id'=>12,
            'matchday'=>2,
            'team_id'=>8,
            'points'=>3,
            'goalFor'=>1,
            'goalAgainst'=>1,
            'result'=>'L',
            'win'=>1,
            'lose'=>1,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:33:27',
            'updated_at'=>'2024-01-24 17:33:27'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>24,
            'result_id'=>12,
            'matchday'=>2,
            'team_id'=>1,
            'points'=>6,
            'goalFor'=>3,
            'goalAgainst'=>1,
            'result'=>'W',
            'win'=>2,
            'lose'=>0,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:33:27',
            'updated_at'=>'2024-01-24 17:33:27'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>25,
            'result_id'=>13,
            'matchday'=>2,
            'team_id'=>10,
            'points'=>3,
            'goalFor'=>1,
            'goalAgainst'=>3,
            'result'=>'L',
            'win'=>1,
            'lose'=>1,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:34:34',
            'updated_at'=>'2024-01-24 17:34:34'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>26,
            'result_id'=>13,
            'matchday'=>2,
            'team_id'=>4,
            'points'=>4,
            'goalFor'=>5,
            'goalAgainst'=>2,
            'result'=>'W',
            'win'=>1,
            'lose'=>0,
            'draw'=>1,
            'created_at'=>'2024-01-24 17:34:34',
            'updated_at'=>'2024-01-24 17:34:34'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>27,
            'result_id'=>14,
            'matchday'=>2,
            'team_id'=>11,
            'points'=>4,
            'goalFor'=>4,
            'goalAgainst'=>2,
            'result'=>'W',
            'win'=>1,
            'lose'=>0,
            'draw'=>1,
            'created_at'=>'2024-01-24 17:35:26',
            'updated_at'=>'2024-01-24 17:35:26'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>28,
            'result_id'=>14,
            'matchday'=>2,
            'team_id'=>3,
            'points'=>1,
            'goalFor'=>2,
            'goalAgainst'=>4,
            'result'=>'L',
            'win'=>0,
            'lose'=>1,
            'draw'=>1,
            'created_at'=>'2024-01-24 17:35:26',
            'updated_at'=>'2024-01-24 17:35:26'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>29,
            'result_id'=>16,
            'matchday'=>2,
            'team_id'=>13,
            'points'=>6,
            'goalFor'=>4,
            'goalAgainst'=>0,
            'result'=>'W',
            'win'=>2,
            'lose'=>0,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:36:30',
            'updated_at'=>'2024-01-24 17:36:30'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>30,
            'result_id'=>16,
            'matchday'=>2,
            'team_id'=>15,
            'points'=>3,
            'goalFor'=>5,
            'goalAgainst'=>2,
            'result'=>'L',
            'win'=>1,
            'lose'=>1,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:36:30',
            'updated_at'=>'2024-01-24 17:36:30'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>31,
            'result_id'=>17,
            'matchday'=>2,
            'team_id'=>16,
            'points'=>3,
            'goalFor'=>3,
            'goalAgainst'=>3,
            'result'=>'W',
            'win'=>1,
            'lose'=>1,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:37:28',
            'updated_at'=>'2024-01-24 17:37:28'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>32,
            'result_id'=>17,
            'matchday'=>2,
            'team_id'=>17,
            'points'=>0,
            'goalFor'=>1,
            'goalAgainst'=>3,
            'result'=>'L',
            'win'=>0,
            'lose'=>2,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:37:28',
            'updated_at'=>'2024-01-24 17:37:28'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>33,
            'result_id'=>18,
            'matchday'=>2,
            'team_id'=>18,
            'points'=>4,
            'goalFor'=>4,
            'goalAgainst'=>2,
            'result'=>'W',
            'win'=>1,
            'lose'=>0,
            'draw'=>1,
            'created_at'=>'2024-01-24 17:38:21',
            'updated_at'=>'2024-01-24 17:38:21'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>34,
            'result_id'=>18,
            'matchday'=>2,
            'team_id'=>14,
            'points'=>3,
            'goalFor'=>1,
            'goalAgainst'=>2,
            'result'=>'L',
            'win'=>1,
            'lose'=>1,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:38:21',
            'updated_at'=>'2024-01-24 17:38:21'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>35,
            'result_id'=>19,
            'matchday'=>2,
            'team_id'=>19,
            'points'=>4,
            'goalFor'=>4,
            'goalAgainst'=>2,
            'result'=>'W',
            'win'=>1,
            'lose'=>0,
            'draw'=>1,
            'created_at'=>'2024-01-24 17:39:25',
            'updated_at'=>'2024-01-24 17:39:25'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>36,
            'result_id'=>19,
            'matchday'=>2,
            'team_id'=>7,
            'points'=>1,
            'goalFor'=>2,
            'goalAgainst'=>4,
            'result'=>'L',
            'win'=>0,
            'lose'=>1,
            'draw'=>1,
            'created_at'=>'2024-01-24 17:39:25',
            'updated_at'=>'2024-01-24 17:39:25'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>37,
            'result_id'=>20,
            'matchday'=>2,
            'team_id'=>20,
            'points'=>0,
            'goalFor'=>1,
            'goalAgainst'=>5,
            'result'=>'L',
            'win'=>0,
            'lose'=>2,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:40:21',
            'updated_at'=>'2024-01-24 17:40:21'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>38,
            'result_id'=>20,
            'matchday'=>2,
            'team_id'=>5,
            'points'=>6,
            'goalFor'=>8,
            'goalAgainst'=>2,
            'result'=>'W',
            'win'=>2,
            'lose'=>0,
            'draw'=>0,
            'created_at'=>'2024-01-24 17:40:21',
            'updated_at'=>'2024-01-24 17:40:21'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>41,
            'result_id'=>21,
            'matchday'=>3,
            'team_id'=>1,
            'points'=>7,
            'goalFor'=>5,
            'goalAgainst'=>3,
            'result'=>'D',
            'win'=>2,
            'lose'=>0,
            'draw'=>1,
            'created_at'=>'2024-01-24 20:31:14',
            'updated_at'=>'2024-01-24 20:31:14'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>42,
            'result_id'=>21,
            'matchday'=>3,
            'team_id'=>10,
            'points'=>4,
            'goalFor'=>3,
            'goalAgainst'=>5,
            'result'=>'D',
            'win'=>1,
            'lose'=>1,
            'draw'=>1,
            'created_at'=>'2024-01-24 20:31:14',
            'updated_at'=>'2024-01-24 20:31:14'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>43,
            'result_id'=>22,
            'matchday'=>3,
            'team_id'=>3,
            'points'=>1,
            'goalFor'=>2,
            'goalAgainst'=>6,
            'result'=>'L',
            'win'=>0,
            'lose'=>2,
            'draw'=>1,
            'created_at'=>'2024-01-24 20:48:59',
            'updated_at'=>'2024-01-24 20:48:59'
            ] );
            
            
                        
            Scoreboard::create( [
            'id'=>44,
            'result_id'=>22,
            'matchday'=>3,
            'team_id'=>18,
            'points'=>7,
            'goalFor'=>6,
            'goalAgainst'=>2,
            'result'=>'W',
            'win'=>2,
            'lose'=>0,
            'draw'=>1,
            'created_at'=>'2024-01-24 20:48:59',
            'updated_at'=>'2024-01-24 20:48:59'
            ] );
    }
}
