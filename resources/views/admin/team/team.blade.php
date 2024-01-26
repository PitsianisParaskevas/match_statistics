@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
    <div class="home-tab">
        <div class="tab-content tab-content-basic">
            <div class="row alert alert-light">
              <div class="col-sm-6">
                <div class="club-name">
                  <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$team->image}}" alt="image" />
                  <h5> {{$team->name}}</h5>
                </div>
              </div>
              <div class="col-sm-6">
                Total Matchs have Played: {{App\Models\ScoreBoard::where('team_id',  $teamScoreBoard->team_id)->where('matchday', '<=', $teamScoreBoard->matchday)->count()}}
                <br>
                Total Points: {{$teamScoreBoard->points}}
                <br>
                GF: {{$teamScoreBoard->goalFor}}
                <br>
                GA: {{$teamScoreBoard->goalAgainst}}
              </div>
              
            </div>

            {{-- header --}}
            <div class="row">
              <div class="col-sm-12">
                <h4>Total: {{App\Models\ScoreBoard::where('team_id',  $teamScoreBoard->team_id)->where('matchday', '<=', $teamScoreBoard->matchday)->count()}}</h4>
                <hr>
                <div class="statistics-details d-flex align-items-center justify-content-between">
                  <div>
                    <h6>Points</h6>
                    <p>P: {{$teamScoreBoard->points}}</p>
                  </div>
                  <div>
                    <h6>Goals</h6>
                    <p>GF: {{$teamScoreBoard->goalFor}}</p>
                    <p>GA: {{$teamScoreBoard->goalAgainst}}</p>
                    <p class="d-flex">DIF: {{ ($teamScoreBoard->goalFor) - ($teamScoreBoard->goalAgainst) }}</p>
                  </div>
                  <div>
                    <h6>xG</h6>
                    <p>xG: {{$totalResult['xG']}}</p>
                  </div>
                  <div>
                    <h6>Ball Possession</h6>
                    <p>Possession: {{$totalResult['ballPossesion']}}</p>
                  </div>
                  <div>
                    <h6>Shots</h6>
                    <p>Shots: {{$totalResult['shots']}}</p>
                    <p>Shots on target: {{$totalResult['shotsOnTarget']}}</p>
                    <p>Shots / target: {{number_format($totalResult['shotsOnTarget'] / $totalResult['shots'], 2)}}</p>
                  </div>
                  <div>
                    <h6>Corners</h6>
                    <p>Corners:  {{$totalResult['corner']}}</p>
                  </div>
                  <div>
                    <h6>Offsides</h6>
                    <p>Offsides:  {{$totalResult['offsides']}}</p>
                  </div>
                  <div>
                    <h6>Fouls</h6>
                    <p>Fouls:  {{$totalResult['fouls']}}</p>
                  </div>
                  <div>
                    <h6>Cards</h6>
                    <p>Yellow:  {{$totalResult['yellow']}}</p>
                    <p>Red:  {{$totalResult['red']}}</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- Per Game --}}
            <div class="row">
              <div class="col-sm-12">
                <h4>Per Game</h4>
                <hr>
                <div class="statistics-details d-flex align-items-center justify-content-between">
                  <div>
                    <h6>Points</h6>
                    <p>P: {{($teamScoreBoard->points) / (App\Models\ScoreBoard::where('team_id',  $teamScoreBoard->team_id)->where('matchday', '<=', $teamScoreBoard->matchday)->count()) }}</p>
                  </div>
                  <div>
                    <h6>Goals</h6>
                    <p>GF: {{($teamScoreBoard->goalFor / (App\Models\ScoreBoard::where('team_id',  $teamScoreBoard->team_id)->where('matchday', '<=', $teamScoreBoard->matchday)->count()))}}</p>
                    <p>GA: {{$teamScoreBoard->goalAgainst}}</p>
                    <p class="d-flex">DIF: {{ ($teamScoreBoard->goalFor) - ($teamScoreBoard->goalAgainst) }}</p>
                  </div>
                  <div>
                    <h6>xG</h6>
                    <p>xG: 2</p>
                  </div>
                  <div>
                    <h6>Ball Possession</h6>
                    <p>xG: 2</p>
                  </div>
                  <div>
                    <h6>Shots</h6>
                    <p>Shots: 3</p>
                    <p>Shots on target: 1</p>
                    <p>Shots / target: 1</p>
                  </div>
                  <div>
                    <h6>Corners</h6>
                    <p>Corners: 3</p>
                  </div>
                  <div>
                    <h6>Fouls</h6>
                    <p>Fouls: 3</p>
                  </div>
                  <div>
                    <h6>Cards</h6>
                    <p>Yellow: 3</p>
                    <p>Red: 3</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- header --}}


            <div class="row">
                <div class="col-sm-12">
                <div class="home-tab">
                    <div class="tab-content tab-content-basic">
                      <div class="row">            
                            <div class="col-lg-4 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        
                                        <div class="card-header">
                                          <h4 class="card-title card-title-dash">Match Has Played</h4>

                                            {{-- <div class="club-name">
                                                <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$team->image}}" alt="image" />
                                                <h5> {{$team->name}}</h5>
                                            </div> --}}

                                            {{-- @if (count($fixtures) > 0) 
                                            <h4>Matchday</h4>
                                            <div class="table-pagination">
                                                <button type="button" class="btn btn-primary">Previous</button>
                                                <h6>{{count($fixtures)}}</h6>
                                                <button type="button" class="btn btn-primary">Next</button>
                                            </div>
                                            @endif --}}
                                            
                                        </div>                                        
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                        <tbody>
                                            
                                            @foreach ($results as $key => $result)
                                            
                                            <tr>
                                                <td>{{$key +1}}</td>
                                                {{-- <td>{{$fixture->id}}</td> --}}
                                                <td class="fixtures-row">
                                                    <div class="club-name">
                                                        <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$result->fixture->homeTeam->image}}" alt="image" />
                                                        <h5> {{$result->fixture->homeTeam->name}}</h5>
                                                    </div>

                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#showMatchResult{{$result->id}}">
                                                       vs
                                                    </a>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="showMatchResult{{$result->id}}" tabindex="-1" aria-labelledby="showMatchResultLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                  <table class="table table-striped">
                                                                    <thead>
                                                                      <tr>
                                                                        <td>
                                                                            <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$result->fixture->homeTeam->image}}" alt="image" />
                                                                        </td>
                                                                        <td><h6>{{$result->homeTeam_goal}} - {{$result->awayTeam_goal}}</h6></td>
                                                                        <td>
                                                                            <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$result->fixture->awayTeam->image}}" alt="image" />
                                                                        </td>
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                      <tr>
                                                                        <td>{{$result->home_xG}}</td>
                                                                        <td>Expected Goals (xG)</td>
                                                                        <td>{{$result->away_xG}}</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>{{$result->home_ballPossession}}%</td>
                                                                        <td>Ball possession</td>
                                                                        <td>{{$result->away_ballPossession}}%</td>
                                                                      </tr>
                                                                      
                                                                      <tr>
                                                                        <td>{{$result->home_shots}}</td>
                                                                        <td>Shots</td>
                                                                        <td>{{$result->away_shots}}</td>
                                                                      </tr>

                                                                      <tr>
                                                                        <td>{{$result->home_shotsOnTarget}}</td>
                                                                        <td>Shots on target</td>
                                                                        <td>{{$result->away_shotsOnTarget}}</td>
                                                                      </tr>

                                                                      <tr>
                                                                        <td>{{$result->home_corners}}</td>
                                                                        <td>Conrners</td>
                                                                        <td>{{$result->away_corners}}</td>
                                                                      </tr>

                                                                      <tr>
                                                                        <td>{{$result->home_offsides}}</td>
                                                                        <td>Offsides</td>
                                                                        <td>{{$result->away_offsides}}</td>
                                                                      </tr>

                                                                      <tr>
                                                                        <td>{{$result->home_fouls}}</td>
                                                                        <td>Fouls</td>
                                                                        <td>{{$result->away_fouls}}</td>
                                                                      </tr>

                                                                      <tr>
                                                                        <td>{{$result->home_yellow}}</td>
                                                                        <td>Yellow cards</td>
                                                                        <td>{{$result->away_yellow}}</td>
                                                                      </tr>

                                                                      <tr>
                                                                        <td>{{$result->home_red}}</td>
                                                                        <td>Red cards</td>
                                                                        <td>{{$result->away_red}}</td>
                                                                      </tr>
                                                                    </tbody>
                                                                  </table>
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal end-->

                                                    <div class="club-name">
                                                        <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$result->fixture->awayTeam->image}}" alt="image" />
                                                        <h5>{{$result->fixture->awayTeam->name}}</h5>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                           
                                           
                                         
                                        </tbody>
                                        </table>
                                    </div>

                                    </div>
                                </div>
                            
                            <!-- Button trigger modal -->

                            </div>


                            {{-- Match Fixtures --}}
                            <div class="col-lg-4 grid-margin">
                              <div class="card">
                                  <div class="card-body">
                                      <div class="card-header">
                                        <h4 class="card-title card-title-dash">Match Fixtures Home</h4>
                                      </div>                                        
                                  <div class="table-responsive">
                                      <table class="table table-striped">
                                      <tbody>                                          
                                          @foreach ($homematch as $key => $homematch)                                          
                                          <tr>
                                              <td>{{$homematch->matchday}}</td>
                                              {{-- <td>{{$fixture->id}}</td> --}}
                                              <td class="fixtures-row">
                                                  <div class="club-name">
                                                      <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$homematch->homeTeam->image}}" alt="image" />
                                                      <h5> {{$homematch->homeTeam->name}}</h5>
                                                  </div>

                                                  <a href="#">
                                                     vs
                                                  </a>

                                                  <div class="club-name">
                                                      <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$homematch->awayTeam->image}}" alt="image" />
                                                      <h5>{{$homematch->awayTeam->name}}</h5>
                                                  </div>
                                              </td>
                                          </tr>
                                          @endforeach
                                         
                                         
                                       
                                      </tbody>
                                      </table>
                                  </div>
                                  
                                  </div>
                              </div>
                          
                          <!-- Button trigger modal -->

                          </div>
                            {{-- Match Fixtures --}}
                        </div>
                        
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection