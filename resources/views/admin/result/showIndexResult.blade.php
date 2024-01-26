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
                                                {{$fixtures->links()}}
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
                                            @if(count($fixtures) > 0)
                                            @foreach ($fixtures as $fixture)
                                            <tr>
                                                <td class="fixtures-row">
                                               
                                                    <div class="club-name @if( App\Models\Result::where('fixture_id', $fixture->id)->first() ) badge bg-success rounded-pill @endif">
                                                        {{$fixture->id}}
                                                    </div>
                                                    <div class="club-name">
                                                        <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$fixture->homeTeam->image}}" alt="image" />
                                                        <h5>{{$fixture->homeTeam->name}}</h5>
                                                    </div>
                                                       
                                                        @if( App\Models\Result::where('fixture_id', $fixture->id)->first() )
                                                            <a href="#" class="btn btn-success">
                                                                vs    
                                                            </a>
                                                        @else
                                                            <a href="{{route('results.createResult', [$fixture->id])}}" class="btn btn-light">
                                                                vs    
                                                            </a>
                                                        @endif
                                                        
                                                    
                                                    <div class="club-name">
                                                        <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$fixture->awayTeam->image}}" alt="image" />
                                                        <h5>{{$fixture->awayTeam->name}}</h5>
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