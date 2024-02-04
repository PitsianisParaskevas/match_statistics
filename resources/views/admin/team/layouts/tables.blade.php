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
                                          <a href="#" data-bs-toggle="modal" data-bs-target="#showMatchResult{{$result->id}}">
                                            <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$result->fixture->homeTeam->image}}" alt="image" />
                                          </a>
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