<?php

namespace App\Models;
use App\Models\Team;
use App\Models\Result;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    use HasFactory;
    protected $fillable = [
        'matchday',
        'home_team',
        'away_team',

    ];

    public function homeTeam() {
        return $this->hasOne(Team::class, 'id', 'home_team');
    }

    public function awayTeam() {
        return $this->hasOne(Team::class, 'id', 'away_team');
    }

    //get the home match of the team
    public function getHomeMatch($id) {
        $homematch = Fixture::where('home_team', $id)->get();
        return $homematch;
    }

    public function getAwayMatch($id) {
        $awaymatch = Fixture::where('away_team', $id)->get();
        return $awaymatch;
    }



    // public function result() {
    //     return $this->hasOne(Result::class, 'id', 'fixture_id');
    // }

    // public function result(){
    //     return $this->belongsTo(Result::class);php 
    // }

}
