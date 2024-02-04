<div class="row alert alert-light">
    <div class="col-sm-6">
      <div class="club-name">
        <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$team->image}}" alt="image" />
        <h5> {{$team->name}}</h5>
      </div>
    </div>
    <div class="col-sm-6">
      {{-- Total Matchs have Played: {{App\Models\ScoreBoard::where('team_id',  $teamScoreBoard->team_id)->where('matchday', '<=', $teamScoreBoard->matchday)->count()}} --}}
      Total Matchs have Played: {{$teamScoreBoard->matchday}}                
      <br>
      Total Points: {{$teamScoreBoard->points}}
      <br>
      GF: {{$teamScoreBoard->goalFor}}
      <br>
      GA: {{$teamScoreBoard->goalAgainst}}
    </div>
    
  </div>