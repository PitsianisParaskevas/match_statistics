<?php

namespace App\Models;
use App\Models\Fixture;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function fixture() {
        return $this->hasOne(Fixture::class, 'id', 'fixture_id');
    }


    // get the last matchdayof the team
    public function getLastMathcDayOfTeam($id) {
        // $lastIndex = Result::select('matchday')->where('home_team', $id)->orWhere('away_team', $id)->latest('matchday', $id)->first()->pluck('matchday');
        $lastIndex = Result::select('matchday')->where('home_team', $id)->orWhere('away_team', $id)->latest('matchday', $id)->first();
        // return $lastIndex; // return {"matchday":1}
        return $lastIndex->matchday; // return 1
    }

    public function calculationResut(){
         if($request->homeTeam_goal > $request->awayTeam_goal) {
            $data['home_result']= 'W';
            $data['home_points'] = 3;
            $data['away_result']= 'L';
            $data['away_points'] = 0;
        } else if($request->homeTeam_goal < $request->awayTeam_goal) {
            $data['home_result']= 'L';
            $data['home_points'] = 0;
            $data['away_result']= 'W';
            $data['away_points'] = 3;
        } else {
            $data['home_result']= 'D';
            $data['home_points'] = 1;
            $data['away_result']= 'D';
            $data['away_points'] = 1;
        }
        
    }

    public function calculatePoints($home, $away) {
        if ($home > $away ) {
            $homePoints = 3;
            $awayPoints = 0;
            $homeResult = 'W';
            $awayResult = 'L';
        } else if ($home < $away ) {
            $homePoints = 0;
            $awayPoints = 3;
            $homeResult = 'L';
            $awayResult = 'W';
        } else {
            $homePoints = 1;
            $awayPoints = 1;
            $homeResult = 'D';
            $awayResult = 'D';
        }

        $points = array(
            "homePoints" => $homePoints,
            "homeResult" => $homeResult,
            "awayPoints" => $awayPoints,
            "awayResult" => $awayResult,
        );

        return $points;
    }

    //calculate sum of home team 
    public function sumHome($id) {
        $total = Result::where('home_team', $id)->get();

        $homeTotal = array (
            'total' => $total->count(),
            'gF' =>  $total->sum('homeTeam_goal'),
            'gA' => $total->sum('awayTeam_goal'),
            'points' => $total->sum('home_points'),
            'xG' => number_format($total->sum('home_xG'), 2),
            'ballPossesion'  => $total->sum('home_ballPossession'),
            'shots' => $total->sum('home_shots'),
            'shotsOnTarget'=> $total->sum('home_shotsOnTarget'),
            'corner' => $total->sum('home_corners'),
            'offsides'=> $total->sum('home_offsides'),
            'fouls'=> $total->sum('home_fouls'),
            'yellow'=> $total->sum('home_yellow'),
            'red'=> $total->sum('home_red'),
        );
        return $homeTotal;
    }

    //calculate avg of home team 
    public function avgHome($id) {

        $sumHome = $this->sumHome($id);
        $avgHome = array (
            // 'total' => $total->count(),
            'gF' =>  ($sumHome['gf'] / $sumHome['total']),
            // 'gA' => $total->sum('awayTeam_goal'),
            // 'points' => $total->sum('home_points'),
            // 'xG' => number_format($total->sum('home_xG'), 2),
            // 'ballPossesion'  => $total->sum('home_ballPossession'),
            // 'shots' => $total->sum('home_shots'),
            // 'shotsOnTarget'=> $total->sum('home_shotsOnTarget'),
            // 'corner' => $total->sum('home_corners'),
            // 'offsides'=> $total->sum('home_offsides'),
            // 'fouls'=> $total->sum('home_fouls'),
            // 'yellow'=> $total->sum('home_yellow'),
            // 'red'=> $total->sum('home_red'),
        );
        return $avgHome;
    }



    //calculate sum of away team 
    public function sumAway($id) {
        $total = Result::where('away_team', $id)->get();
        $awayTotal = array (
            'total' => $total->count(),
            'gF' =>  $total->sum('awayTeam_goal'),
            'gA' => $total->sum('homeTeam_goal'),
            'points' => $total->sum('away_points'),
            'xG' => number_format($total->sum('away_xG'), 2),
            'ballPossesion'  => $total->sum('away_ballPossession'),
            'shots' => $total->sum('away_shots'),
            'shotsOnTarget'=> $total->sum('away_shotsOnTarget'),
            'corner' => $total->sum('away_corners'),
            'offsides'=> $total->sum('away_offsides'),
            'fouls'=> $total->sum('away_fouls'),
            'yellow'=> $total->sum('away_yellow'),
            'red'=> $total->sum('away_red'),
        );
        return $awayTotal;
    }

    

    public function totalResult($home, $away) {
        $totalResult = array(
        'total' => $home['total'] + $away['total'],   
        'gF' => $home['gF'] + $away['gF'],
        'gA' => $home['gA'] + $away['gA'],
        'points' => $home['points'] + $away['points'],
        'xG' =>  number_format(($home['xG'] + $away['xG']), 2),
        'ballPossesion'  => $home['ballPossesion'] + $away['ballPossesion'],
        'shots' => $home['shots'] + $away['shots'],
        'shotsOnTarget'=> $home['shotsOnTarget'] + $away['shotsOnTarget'],
        'corner' => $home['corner'] + $away['corner'],
        'offsides'=> $home['offsides'] + $away['offsides'],
        'fouls'=> $home['fouls'] + $away['fouls'],
        'yellow'=> $home['yellow'] + $away['yellow'],
        'red'=> $home['red'] + $away['red'],
        );
        return $totalResult;
    }

    public function collectAll($id) {      
        $collectAll = array (
            'sumHome' => $this->sumHome($id),
            'sumAway' => $this->sumAway($id),
            'totalResult' =>$this->totalResult($this->sumHome($id), $this->sumAway($id)),
        );

        return $collectAll;

    }
    
        




    // team goal on matchday
        // $homeTeam_goal = Result::where('matchday', $matchday)->where('home_team', $teamId)->sum('homeTeam_goal');
        // $AwayTeam_goal = Result::where('matchday', $matchday)->where('away_team', $teamId)->sum('AwayTeam_goal');
        // $total_goal = $homeTeam_goal + $AwayTeam_goal;
        // return $total_goal;

        
    // all team golas
        // $homeTeam_goal = Result::where('home_team', $teamId)->sum('homeTeam_goal');
        // $awayTeam_goal = Result::where('away_team', $teamId)->sum('AwayTeam_goal');
        // $total_goal = $homeTeam_goal + $awayTeam_goal;
        // return $total_goal;

        //
        // $home_points = Result::where('home_team', $id)->sum('home_points');
        // $away_points = Result::where('away_team', $id)->sum('away_points');
        // $total_goal = $home_points + $away_points;
        // return $total_goal;

        // Team calculate points ga gf Home

        // Team calculate points ga gf Away 



    
}
