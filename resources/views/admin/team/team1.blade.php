@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
      {{-- include header team --}}
      {{-- @include('admin.team.layouts.button') --}}
    <div class="home-tab">
        <div class="tab-content tab-content-basic">
            
            {{-- header --}}
            {{-- <div class="row">
              <div class="col-sm-12">
                <h4>Total: {{$teamScoreBoard->matchday}}</h4>                
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
            </div> --}}
            
            {{-- Per Game --}}
            <div class="row">
              <div class="col-sm-12">
                <h4>Home Game {{$collectAll['totalResult']['total']}}</h4>
                <hr>
                <div class="statistics-details d-flex align-items-center justify-content-between">
                  <div>
                    <h6>Points</h6>
                    <p>P: {{$collectAll['totalResult']['gF'] / $collectAll['sumHome']['total']}}</p>
                  </div>
                  <div>
                    <h6>Goals</h6>
                    <p>GF:</p>
                    <p>GA: 1</p>
                    <p class="d-flex">DIF: 1</p>
                  </div>
                  <div>
                    <h6>xG</h6>
                    <p>xG: 1</p>
                  </div>
                  <div>
                    <h6>Ball Possession</h6>
                    <p>Poseesion: 1</p>
                  </div>
                  <div>
                    <h6>Shots</h6>
                    <p>Shots: 1</p>
                    <p>Shots on target: 1</p>
                    <p>Shots / target: 1</p>
                  </div>
                  <div>
                    <h6>Corners</h6>
                    <p>Corners: 1</p>
                  </div>
                  <div>
                    <h6>Offsides</h6>
                    <p>Offsides:  1</p>
                  </div>
                  <div>
                    <h6>Fouls</h6>
                    <p>Fouls: 1</p>
                  </div>
                  <div>
                    <h6>Cards</h6>
                    <p>Yellow:  1</p>
                    <p>Red:  1</p>
                  </div>
                </div>
              </div>
            </div>

           
            {{-- header --}}


           
        </div>
    </div>
    </div>
</div>
@endsection