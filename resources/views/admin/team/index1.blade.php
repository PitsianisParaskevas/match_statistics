@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
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
                                        <th colspan="3" class="club-col">Team</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @if (count($teams) > 0) 
                                    @foreach ($teams as $key => $team)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td colspan="3" class="py-1">
                                                <a href="{{route('teams.show', [$team->id])}}">
                                                <div class="club-name">
                                                    <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$team->image}}" alt="image" />
                                                    <h5>{{$team->name}}</h5>
                                                    
                                                        
                                                
                                                </div>
                                            </a>
                                            {{-- <a href="{{route('teams.showTeam', [$team->id])}}">
                                                <div class="club-name">
                                                    <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$team->image}}" alt="image" />
                                                    <h5>{{$team->name}}</h5>
                                                    
                                                        
                                                
                                                </div>
                                            </a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <td>No teams to display</td>
                                    
                                      
                                  @endif
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