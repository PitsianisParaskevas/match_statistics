@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        @include('admin.layouts.byRounds')
    <div class="home-tab">
        <div class="tab-content tab-content-basic">
            <div class="row">            
                <div class="col-lg-12 grid-margin">
                    <div class="card">
                        {{-- <div class="card-header py-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <form method="get" action="/search">
                                        <div class="input-group">
                                            <input class="form-control" name="search" placeholder="Search" class="form-control">
                                            <button class="btn btn-primary">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div> --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                <thead>
                                  
                                    <tr>
                                        <th>SN</th>
                                        <th class="club-col">Team</th>
                                        <th>Match Played</th>
                                        <th>P</th>
                                        <th>W</th>
                                        <th>L</th>
                                        <th>D</th>
                                        <th>GF</th>
                                        <th>GA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($scores as $key => $score)
                                            <tr>
                                                <td>
                                                   # {{$key+1}}  / MD: {{$score->matchday}}
                                                </td>
                                                <td>
                                                    <div class="club-name">
                                                            <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$score->team->image}}" alt="image" />
                                                            <h5>{{$score->team->name}}</h5>
                                                    </div>
                                                </td>
                                                {{-- <td>{{App\Models\ScoreBoard::where('team_id', $score->team_id)->where('matchday', $score->matchday)->get()->count()}}</td> --}}
                                                <td>{{App\Models\ScoreBoard::where('team_id',  $score->team_id)->where('matchday', '<=', $score->matchday)->count()}}</td>
                                                {{-- <td>{{$score->matchday}}</td> --}}
                                                <td>{{$score->points}}</td>
                                                <td>{{$score->win}}</td>
                                                <td>{{$score->lose}}</td>
                                                <td>{{$score->draw}}</td>
                                                <td>{{$score->goalFor}}</td>
                                                <td>{{$score->goalAgainst}}</td>
                                                </tr>
                                            @endforeach
                                </tbody>
                                </table>
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