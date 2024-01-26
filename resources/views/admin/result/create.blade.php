@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
    <div class="home-tab">
        <div class="tab-content tab-content-basic">
            <div class="row">            
                <div class="col-lg-12 grid-margin">
                    <div class="card">
                      @if(Session::has('message'))
                          <div class="alert alert-success">
                              {{Session::get('message')}}
                          </div>
                      @endif
                      <form action="{{route('results.store')}}" method="post">@csrf
                        <div class="card-body">
                          <table class="table table-striped">
                            <thead>
                              @if(count($result) > 0)
                                          @foreach($result as $result)
                                          <input type="hidden" name="fixture_id" value="{{$result->id}}">
                                          <input type="hidden" name="matchday" value="{{$result->matchday}}">
                                          <input type="hidden" name="home_team" value="{{$result->home_team}}">
                                          <input type="hidden" name="away_team" value="{{$result->away_team}}">
                                            <tr>
                                                <td class="fixtures-row">
                                                    <div class="club-name">
                                                        {{$result->matchday}}
                                                    </div>
                                                    <div class="club-name">
                                                        <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$result->homeTeam->image}}" alt="image" />
                                                        <h5>{{$result->homeTeam->name}}</h5>
                                                    </div>
                                                    <p>vs</p>
                                                    
                                                    <div class="club-name">
                                                        <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$result->awayTeam->image}}" alt="image" />
                                                        <h5>{{$result->awayTeam->name}}</h5>
                                                    </div>
                                                </td>
                                               
                                                </tr>
                                            @endforeach
                                            @else
                                                <td>No teams to display</td>
                                            @endif
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <input
                                    name="homeTeam_goal"
                                    class="form-control"
                                    placeholder="home"
                                  />
                                </td>
                                <td>Score</td>
                                <td>
                                  <input
                                    name="awayTeam_goal"
                                    class="form-control"
                                    placeholder="away"
                                  />
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <input
                                    name="home_xG"
                                    class="form-control"
                                    placeholder="home"
                                  />
                                </td>
                                <td>xG</td>
                                <td>
                                  <input
                                    name="away_xG"
                                    class="form-control"
                                    placeholder="away"
                                  />
                                </td>
                              </tr>
                              
                              <tr>
                                <td>
                                  <input
                                    name="home_ballPossession"
                                    class="form-control"
                                    placeholder="home"
                                  />
                                </td>
                                <td>Ball Possession</td>
                                <td>
                                  <input
                                    name="away_ballPossession"
                                    class="form-control"
                                    placeholder="away"
                                  />
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <input
                                    name="home_shots"
                                    class="form-control"
                                    placeholder="home"
                                  />
                                </td>
                                <td>Shots</td>
                                <td>
                                  <input
                                    name="away_shots"
                                    class="form-control"
                                    placeholder="away"
                                  />
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <input
                                    name="home_shotsOnTarget"
                                    class="form-control"
                                    placeholder="home"
                                  />
                                </td>
                                <td>Shots On Target</td>
                                <td>
                                  <input
                                    name="away_shotsOnTarget"
                                    class="form-control"
                                    placeholder="away"
                                  />
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <input
                                    name="home_corners"
                                    class="form-control"
                                    placeholder="home"
                                  />
                                </td>
                                <td>Corners</td>
                                <td>
                                  <input
                                    name="away_corners"
                                    class="form-control"
                                    placeholder="away"
                                  />
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <input
                                    name="home_offsides"
                                    class="form-control"
                                    placeholder="home"
                                  />
                                </td>
                                <td>Offsides</td>
                                <td>
                                  <input
                                    name="away_offsides"
                                    class="form-control"
                                    placeholder="away"
                                  />
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <input
                                    name="home_fouls"
                                    class="form-control"
                                    placeholder="home"
                                  />
                                </td>
                                <td>Fouls</td>
                                <td>
                                  <input
                                    name="away_fouls"
                                    class="form-control"
                                    placeholder="away"
                                  />
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <input
                                    name="home_yellow"
                                    class="form-control"
                                    placeholder="home"
                                  />
                                </td>
                                <td>Yellow</td>
                                <td>
                                  <input
                                    name="away_yellow"
                                    class="form-control"
                                    placeholder="away"
                                  />
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <input
                                    name="home_red"
                                    class="form-control"
                                    placeholder="home"
                                  />
                                </td>
                                <td>Red</td>
                                <td>
                                  <input
                                    name="away_red"
                                    class="form-control"
                                    placeholder="away"
                                  />
                                </td>
                              </tr>
                              


                            </tbody>
                          </table>
                          <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">
                              Submit
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                
                
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
  
@endsection