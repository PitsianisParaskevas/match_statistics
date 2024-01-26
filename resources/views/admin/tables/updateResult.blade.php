@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
    <div class="home-tab">
        <div class="tab-content tab-content-basic">
            <div class="row">
                <div class="col-sm-12">
                <div class="home-tab">
                    <div class="tab-content tab-content-basic">
                        <div class="row">            
                            <div class="col-lg-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">

                                        
                                        <div class="card-header">
                                            
                                            <h4 class="mr-5">Matchday</h4>
                                            <div class="ml-2" style="margin-left: 2rem;">
                                                {{$results->links()}}
                                            </div>
                                        {{-- <div class="table-pagination">
                                            <button type="button" class="btn btn-primary">Previous</button>
                                            {{$fixtures->links()}}
                                            <button type="button" class="btn btn-primary">Next</button>
                                        </div> --}}
                                        </div>                                        
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                        <tbody>
                                            @if(count($results) > 0)
                                            @foreach ($results as $result)
                                            <tr>
                                                <td class="fixtures-row">
                                                    <div class="club-name">
                                                        {{$result->id}}
                                                    </div>
                                                    <div class="club-name">
                                                        {{-- <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$result->fixture->homeTeam->image}}" alt="image" /> --}}
                                                        <h5>{{$result->home_team}}</h5>
                                                    </div>
                                                    {{-- <a href="{{route('fixtures.show', [$result->id])}}">vs</a> --}}
                                                    @if (isset({{$result->homeTeam_points}}))
                                                    vs    
                                                    @endif
                                                    <div class="club-name">
                                                        {{-- <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$result->awayTeam->image}}" alt="image" /> --}}
                                                        <h5>{{$result->away_team}}</h5>
                                                    </div>
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
        </div>
    </div>
    </div>
</div>
  
@endsection