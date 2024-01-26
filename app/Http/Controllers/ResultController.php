<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Team;
use App\Models\Fixture;
use App\Models\ScoreBoard;
class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::paginate(10);
        return view('admin.tables.updateResult', compact('results'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fixture_id'=>'required',
            'matchday'=>'required',
            'home_team'=>'required',
            'away_team'=>'required',
            'homeTeam_goal'=>'required',
            'awayTeam_goal'=>'required'
        ]);

        $data = $request->all();
          
        //calculate P R 
        /**
         * get the home goal and away goal and return which team has Win and calulate the points 
         */
        $points = new Result();
        $points = $points->calculatePoints($request->homeTeam_goal, $request->awayTeam_goal);
        
        $data['home_points'] = $points['homePoints'];
        $data['away_points'] = $points['awayPoints'];
        
        
        
        // calculate HomeTeam W L D
        //create array for insert 
         /**
         * get the [W,L,D] and return [1,0,0] to add on row for sum it the result
         */
        $resultScore = new ScoreBoard();
        $resultScore = $resultScore->calculateResult($points['homeResult']);      
        // Array of Home Team
        $scoreHome = array (
            'result_id' => $data['fixture_id'],
            'matchday' => $data['matchday'],                   
            'team_id' => $data['home_team'],
            'points' => $points['homePoints'],
            'goalFor' =>   $data['homeTeam_goal'],
            'goalAgainst' => $data['awayTeam_goal'],
            'result' => $points['homeResult'],
            'win' => $resultScore['win'],
            'lose' =>   $resultScore['lose'],
            'draw' => $resultScore['draw'],
        );
        $hometeam = new ScoreBoard ();
        $hometeam->createScore($data['home_team'],$scoreHome);


        $resultScore = new ScoreBoard();
        $resultScoreAway = $resultScore->calculateResult($points['awayResult']); 
        // Array of Away Team
        $scoreAway = array (
            'result_id' => $data['fixture_id'],
            'matchday' => $data['matchday'],                   
            'team_id' => $data['away_team'],
            'points' => $points['awayPoints'],
            'goalFor' =>   $data['awayTeam_goal'],
            'goalAgainst' => $data['homeTeam_goal'],
            'result' => $points['awayResult'],
            'win' => $resultScoreAway['win'],
            'lose' =>   $resultScoreAway['lose'],
            'draw' => $resultScoreAway['draw'],
        );
        
        $awayteam = new ScoreBoard ();
        $awayteam->createScore($data['away_team'],$scoreAway);
        
        // $team = new ScoreBoard ();
        // return $team->createScore($data['home_team']);

        

        

        $home_team = $data['home_team'];
        $away_team = $data['away_team'];
// result
// win
// lose
// draw
        // // calculate hometeam result 
        // if($homeResult == 'w') {
        //     $homeWin = 3;
        //     $homeLose = 0;
        //     $homeDraw = 0;
        // } else if ($homeResult == 'l') {
        //     $homeWin = 0;
        //     $homeLose = 0;
        //     $homeDraw = 0;
        // } else if ($homeResult == 'd'){
        //     $homeWin = 0;
        //     $homeLose = 0;
        //     $homeDraw = 1;
        // }

        // // calculate awayteam result
        // if ($awayResult == 'w') {
        //     $awayWin = 3;
        //     $awayLose = 0;
        //     $awayDraw = 0;
        // } else if ($awayResult = 'l') {
        //     $awayWin = 0;
        //     $awayLose = 0;
        //     $awayDraw = 0;
        // } else if ($awayResult = 'd') {
        //     $awayWin = 0;
        //     $awayLose = 0;
        //     $awayDraw = 1;
        // }

        

        // insert Home Team Points GF GA in ScoreBoard
        // $findHomeTeam = ScoreBoard::where('team_id', $home_team)->get(); // find in ScoreBoard team_id
        // if(count($findHomeTeam) > 0) { // fixtureTeamHome has row
        //     //check
        //     // $last = ScoreBoard::where('team_id', $home_team)->latest('matchday', $data['matchday'])->first(); // get the last match of the team to P GA GF the second round  point = (points already have the team ) + new
        //     $lastHome = ScoreBoard::where('team_id', $home_team)->orderBy('matchday', 'DESC')->first();
        //     $points = $lastHome->points + $data['home_points'];
        //     $goalFor = $lastHome->goalFor + $data['homeTeam_goal'];
        //     $goalAgainst = $lastHome->goalAgainst + $data['awayTeam_goal'];
        //     $lastHomeWin = $lastHome->win + $homeWin;
        //     $lastHomeLose = $lastHome->lose + $homeLose;
        //     $lastHomeDraw = $lastHome->draw + $homeDraw;

        //         $scoreHome = ScoreBoard::create([
        //             'result_id'    => $data['fixture_id'],
        //             'matchday' => $data['matchday'],
        //             'team_id'     => $data['home_team'],
        //             'points'     => $points,
        //             'goalFor'      => $goalFor,
        //             'goalAgainst' => $goalAgainst,
        //             'result' => $homeResult,
        //             'win' => $lastHomeWin,
        //             'lose' => $lastHomeLose,
        //             'draw' => $lastHomeDraw,
        //         ]);
        // } else { // if it doesn't have
        //         $scoreHome = ScoreBoard::create([
        //             'result_id' => $data['fixture_id'],
        //             'matchday' => $data['matchday'],                   
        //             'team_id' => $data['home_team'],
        //             'points' => $data['home_points'],
        //             'goalFor' =>   $data['homeTeam_goal'],
        //             'goalAgainst' => $data['awayTeam_goal'],
        //             'result' => $homeResult,
        //             'win' => $homeWin,
        //             'lose' => $homeLose,
        //             'draw' => $homeDraw,
        //         ]); 
        // } 

        // // insert Away Team GF GA in ScoreBoard
        // $findAwayTeam = ScoreBoard::where('team_id', $away_team)->get(); // find in ScoreBoard team_id
        // if(count($findAwayTeam) > 0) {
        //     $lastAway = ScoreBoard::where('team_id', $away_team)->orderBy('matchday', 'DESC')->first();
        //     // $last = ScoreBoard::where('team_id', $away_team)->latest('matchday', $data['matchday'])->first(); // get the last match of the team to P GA GF the second round  point = (points already have the team ) + new
        //     $points = $lastAway->points + $data['away_points'];
        //     $goalFor = $lastAway->goalFor + $data['awayTeam_goal'];
        //     $goalAgainst = $lastAway->goalAgainst + $data['homeTeam_goal'];
        //     $lastAwayWin = $lastAway->win + $awayWin;
        //     $lastAwayLose = $lastAway->lose + $awayLose;
        //     $lastAwayDraw = $lastAway->draw + $awayDraw;
        //     $scoreAway = ScoreBoard::create([
        //         'result_id'    => $data['fixture_id'],
        //         'matchday' => $data['matchday'],
        //         'team_id'     => $data['away_team'],
        //         'points'     => $points,
        //         'goalFor'      => $goalFor,
        //         'goalAgainst' => $goalAgainst,
        //         'result' => $awayResult,
        //         'win' => $lastAwayWin,
        //         'lose' => $lastAwayLose,
        //         'draw' => $lastAwayDraw,
                
        //     ]);
           
        // } else {
        //     $scoreAway = ScoreBoard::create([
        //        'result_id' => $data['fixture_id'],
        //        'matchday' => $data['matchday'],
        //        'team_id' => $data['away_team'],
        //        'points' => $data['away_points'], 
        //        'goalFor' =>   $data['awayTeam_goal'],
        //        'goalAgainst' => $data['homeTeam_goal'],
        //        'result' => $awayResult,
        //         'win' => $awayWin,
        //         'lose' => $awayLose,
        //         'draw' => $awayDraw,
        //     ]);     
        // }
        
        
        
        Result::create($data);
        return redirect()->back()->with('message', 'Permission updated');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function updateResult(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    function getLastMathcDayOfTeam($id) {
            // return Result::all();
            // $lastIndex = Result::select('matchday')->where('home_team', $id)->orWhere('away_team', $id)->latest('matchday', $id)->first();
            // return $lastIndex;
            $round = new Result();
            return $round->getLastMathcDayOfTeam($id);
    }

    function showIndexResult() {
        $fixtures = Fixture::paginate(10);
        return view('admin.result.showIndexResult', compact('fixtures'));
    }

    function createResult($id) {
        $result = Fixture::find($id);
        return view('admin.result.createResult', compact('result'));
    }

}


/** last matchday of a team  */
// $id = 1;
// $lastIndex = Result::select('matchday')->where('home_team', $id)->orWhere('away_team', $id)->latest('matchday', $id)->first();
// dd($lastIndex);