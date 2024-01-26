<?php

use Illuminate\Support\Facades\Route;
use App\Models\Fixture;
use App\Models\Team;
use App\Models\Result;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\FixtureController;
use App\Http\Controllers\ScoreBoardController;
use App\Models\ScoreBoard;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('teams', 'TeamController');
Route::resource('fixtures', 'FixtureController');
Route::resource('results', 'ResultController');
Route::resource('board', 'ScoreBoardController');

// Route::get('url', [path of class name, [function name] ])
// Route::get('users', [ResultController::class,'getData'] );

Route::get('last_matchday_team/{id}',  'ResultController@getLastMathcDayOfTeam' );

Route::get('hometeam/{id}',  'FixtureController@getHomeMatch' );
Route::get('awayteam/{id}',  'FixtureController@getAwayMatch' );

Route::get('updateResult/{id}',  'FixtureController@updateResult' );
/**
 * createResults is the url 
 * ResultController@createResults custom method createResults
 * name('results.createResults') name of the link target to call it.
 */
Route::get('showIndexResult', 'ResultController@showIndexResult')->name('results.showIndexResult');
/**
 * createResult/{id} is the url with parameter
 * ResultController@createResult method cotroller
 * results.createResult name of the link target to call it.
 */ 
Route::get('createResult/{id}', 'ResultController@createResult')->name('results.createResult');
// Route::resource('results', 'FixtureResultController');

// Route::get('/createResult/{id}','ReusultController@createResult')->name('results.createResult');
// Route::post('/createResult/{id}','ReusultController@store');

// Route::view('/pl', 'admin/pl');

// Route::get('/team/{id}','TeamController@showTeam');


// //one to one
// Rout::get('/', function() {
//     $user = User::find(1);
//     $profile = new Profile;
//     $profile->adderss="melbourne";
//     $user->profile()->save($profile);

//     //inverse
//     return Profile::find(1)->user;
// });

// //hasMany()
// Routes::get('/has-many', [App\Http\Controllers\RelationController::class, 'index']);

// Route::get('/showTeam', function() {
//     $teams = Team::all();
//     return $teams;
// });

// Route::get('/showFixture', function() {
//     $fixture_id = Fixture::where('home_team', 1)->get();
//     return $fixture_id;
// });

Route::get('/InsertResult', function() {

    $result1 = Result::create([
        'fixture_id'    => 1,
        'matchday'      => 1,
        'home_team'     => 1,
        'away_team'     => 2,
        'homeTeam_goal' => 2,
        'awayTeam_goal' => 0,
        'home_points'   => 3,
        'away_points'   => 0,
    ]);

});

