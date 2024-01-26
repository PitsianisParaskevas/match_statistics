<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Fixture;
use App\Models\Result;
use App\Models\ScoreBoard;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::get();
        return view('admin.team.index', compact('teams'));

    }

    // public function search(Request $request) {
    //     $search = $request->search;

    //     $fixtures = Team::where('name','like',"%search%")->get();
    //     return view('admin.team.team', compact('fixtures'));
    // }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $allteams = Team::all();
        $team = Team::find($id);
        $fixtures = Fixture::where('home_team', $id)->orWhere('away_team', $id)->get();
        $results = Result::where('home_team', $id)->orWhere('away_team', $id)->get();
        
        $resultsHome = Result::where('home_team', $id)->get();
        $resultsAway = Result::where('away_team', $id)->get();

        $homeSum = new Result();
        $homeSum = $homeSum->sumHome($id);

        $awaySum = new Result();
        $awaySum = $awaySum->sumAway($id);

        $totalResult = new Result();
        $totalResult = $totalResult->totalResult($homeSum, $awaySum);             
           
        //find team in ScoreBoard Total P GA GF
        $teamScoreBoard = ScoreBoard::where('team_id', $id)->orderby('matchday', 'DESC')->first();

        $homematch = new Fixture();
        $homematch = $homematch->getHomeMatch($id);
        // return $results;
        return view('admin.team.team', compact('fixtures','results', 'team', 'homematch', 'teamScoreBoard', 'totalResult'));
    }

    // public function showTeam($id)
    // {
    //     $fixtures = Fixture::where('home_team', $id)->orWhere('away_team', $id)->get();
    //     return view('admin.team.team', compact('fixtures'));
    // }

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

    
}
