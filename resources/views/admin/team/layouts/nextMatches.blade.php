<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid align-items-center">
      <h6 class="navbar-brand">Next Match: {{$fixtures->count()}}</h6>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          @foreach ($fixtures as $fixture)
         
          <div class="d-flex flex-column align-items-center">
              @if($fixture->home_team == $team->id)
                    <h6 class="p-1 rounded-circle bg-secondary text-white">H</h6>
              @else 
                  <h6 class="p-1 rounded-circle bg-secondary text-white">A</h6>
              @endif
             
            
                  <img class="@if($fixture->home_team == $team->id ) d-none @endif" src="{{asset('template/src/assets/images/pl-badges')}}/{{$fixture->homeTeam->image}}" alt="image"  />
                  <img class="@if($fixture->away_team == $team->id ) d-none @endifd ) d-none @endif" src="{{asset('template/src/assets/images/pl-badges')}}/{{$fixture->awayTeam->image}}" alt="image" />
            
  
          </div>
          
         
  
          @endforeach
         
        </div>
      </div>
    </div>
  </nav>
  
  