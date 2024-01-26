<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fixture;
use App\Models\Result;

class FixtureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // vres to teleuteo fixtrure_id  sto result (+1) where fixture_id > $id kai kane where sto fixture all prepei na ferneis pagination sta matchday
        // $result = Result::orderBy('matchday', 'DESC')->first('fixture_id');
        // $current_fixture_id =  $result->fixture_id;
        // $fixtures = Fixture::where('id', '>', $current_fixture_id)->paginate(10);
        $fixtures = Fixture::paginate(10);
        return view('admin.fixture.index', compact('fixtures'));
    }

    // public function home(){
    //     $fixtures = Fixture::paginate(10);
    //     return view('home', compact('fixture'));
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function createResult($id)
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
        // $fixtures = Fixture::where('matchday', $id)->get();
        // return view('admin.fixture.matchday', compact('fixtures'));

        $result = Fixture::where('id', $id)->get();
        return view('admin.result.create', compact('result'));
       
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

    public function createMatchday($id)
    {
        $fixture = Fixture::find($id);
        dd($fixture);
        // return view('admin.fixture.createMatchday', compact('fixtures'));
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

    public function getHomeMatch($id) {
        $homematch = new Fixture();
        return $homematch->getHomeMatch($id);
    }

    public function getAwayMatch($id) {
        $awaymatch = new Fixture();
        return $awaymatch->getAwayMatchp($id);
    }
    
}
