<?php

namespace App\Models;
use App\Models\Use;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreBoard extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function team() {
        return $this->hasOne(Team::class, 'id', 'team_id');
    }

    // Team Matchs has played
    // App\Models\ScoreBoard::where('team_id',  $teamScoreBoard->team_id)->where('matchday', '<=', $teamScoreBoard->matchday)->count()
    public function teamHasMatchHasPlayed () {
        // $team_id = 1;
        // $matchday = 3;
        $matchHasPlayed = ScoreBoard::where('team_id',  $teamScoreBoard->team_id)->where('matchday', '<=', $teamScoreBoard->matchday)->count();
    }

    public function findTeam($id) {
        $team = ScoreBoard::where('team_id', $id)->get();
        return $team;
    }

    public function calculateResult($result){
       
       if($result ==  'W') {
            $result = array(
                'win' => 1,
                'lose' => 0,
                'draw' => 0,
            );
       } else if($result == 'L') {
            $result = array(
                'win' => 0,
                'lose' => 1,
                'draw' => 0,
            );
       } else if ($result == 'D') {
            $result = array(
                'win' => 0,
                'lose' => 0,
                'draw' => 1,
            );
       } else {
            $result = array(
                'win' => 0,
                'lose' => 0,
                'draw' => 0,
            );
       }
       
        return $result;

    }

    // find last matchday team
    public function findLastMatchDay($id) {
        $lastResult = ScoreBoard::where('team_id', $id)->orderBy('matchday', 'DESC')->first();
        return $lastResult;
    }

   
    // create data for team 
    public function createScore($id, $scoreBoard) {

        // calculate W D L 

        if (ScoreBoard::where('team_id', $id)->exists()) {
            // last result 
            $lastResult = ScoreBoard::where('team_id', $id)->orderBy('matchday', 'DESC')->first();
            $scoreBoardLast = ScoreBoard::create([
                'result_id' => $scoreBoard['result_id'],
                'matchday' => $scoreBoard['matchday'],                   
                'team_id' => $scoreBoard['team_id'],
                'result' => $scoreBoard['result'],
                'points' => $lastResult['points'] + $scoreBoard['points'],
                'goalFor' =>   $lastResult['goalFor'] + $scoreBoard['goalFor'],
                'goalAgainst' => $lastResult['goalAgainst'] + $scoreBoard['goalAgainst'],                
                'win' => $lastResult['win'] + $scoreBoard['win'],
                'lose' => $lastResult['lose'] + $scoreBoard['lose'],
                'draw' => $lastResult['draw'] + $scoreBoard['draw'],
            ]);
           
        }
         
        if (ScoreBoard::where('team_id', $id)->doesntExist()) {
            // ScoreBoard::create([
            //     'result_id' => $data['fixture_id'],
            //     'matchday' => $data['matchday'],                   
            //     'team_id' => $data['home_team'],
            //     'points' => $data['home_points'],
            //     'goalFor' =>   $data['homeTeam_goal'],
            //     'goalAgainst' => $data['awayTeam_goal'],
            //     'result' => $homeResult,
            //     'win' => $homeWin,
            //     'lose' => $homeLose,
            //     'draw' => $homeDraw,
            // ]); 
            $scoreBoard = ScoreBoard::create([
                'result_id' => $scoreBoard['result_id'],
                'matchday' => $scoreBoard['matchday'],                   
                'team_id' => $scoreBoard['team_id'],
                'points' => $scoreBoard['points'],
                'goalFor' =>   $scoreBoard['goalFor'],
                'goalAgainst' => $scoreBoard['goalAgainst'],
                'result' => $scoreBoard['result'],
                'win' => $scoreBoard['win'],
                'lose' => $scoreBoard['lose'],
                'draw' => $scoreBoard['draw'],
            ]);
            
        }
    //     'result_id' 
    //     'matchday' 
    //     'team_id'
    //     'points' 
    //     'goalFor'
    //     'goalAgainst'
    //     'result'
    //     'win'
    //     'lose'
    //     'draw'

    }

}
