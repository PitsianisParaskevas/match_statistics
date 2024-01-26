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

                                            @if (count($fixtures) > 0) 
                                            <h4>Matchday</h4>
                                            <div class="table-pagination">
                                                <button type="button" class="btn btn-primary">Previous</button>
                                                <h6>{{count($fixtures)}}</h6>
                                                <button type="button" class="btn btn-primary">Next</button>
                                            </div>
                                            @endif
                                            
                                        </div>                                        
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                        <tbody>
                                            
                                            @foreach ($fixtures as $key => $fixture)
                                            
                                            <tr>
                                                <td>{{$key +1}}</td>
                                                <td class="fixtures-row">
                                                    
                                                    <div class="club-name">
                                                        <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$fixture->homeTeam->image}}" alt="image" />
                                                        <h5>{{$fixture->homeTeam->name}}</h5>
                                                    </div>
                                                    {{-- <a href="{{route('fixture.createMatchday', [$fixture->id])}}">vs</a> --}}
                                                    <div class="club-name">
                                                        <img src="{{asset('template/src/assets/images/pl-badges')}}/{{$fixture->awayTeam->image}}" alt="image" />
                                                        <h5>{{$fixture->awayTeam->name}}</h5>
                                                    </div>
                                                </td>
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
        </div>
    </div>
    </div>
</div>
  
@endsection