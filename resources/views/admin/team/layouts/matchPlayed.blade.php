  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <div class="container-fluid align-items-center">
    <h6 class="navbar-brand">Match played:</h6>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        @foreach ($results as $result)
       
        <div class="d-flex flex-column align-items-center">
            @if($result->home_team == $team->id)
                  <h6 class="p-1 rounded-circle bg-secondary text-white">H</h6>
            @else 
                <h6 class="p-1 rounded-circle bg-secondary text-white">A</h6>
            @endif
             <a href="#" data-bs-toggle="modal" data-bs-target="#showMatchResult{{$result->id}}">        
                <img class="@if($result->home_team == $team->id ) d-none @endif" src="{{asset('template/src/assets/images/pl-badges')}}/{{$result->fixture->homeTeam->image}}" alt="image"  />
                <img class="@if($result->away_team == $team->id ) d-none @endifd ) d-none @endif" src="{{asset('template/src/assets/images/pl-badges')}}/{{$result->fixture->awayTeam->image}}" alt="image" />
            </a>

        </div>
        
       

        @endforeach
       
      </div>
    </div>
  </div>
</nav>

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