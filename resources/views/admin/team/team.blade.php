@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
      {{-- include header banner --}}
      @include('admin.team.layouts.banner')
    <div class="home-tab">
        <div class="tab-content tab-content-basic">
            {{-- Next Matches --}}
            {{-- @include('admin.team.layouts.NextMatches') --}}

            {{-- Match Played --}}
            @include('admin.team.layouts.matchPlayed')

            {{-- header --}}
            {{-- include total stats --}}
            @include('admin.team.layouts.total')
           
            {{-- include total Per Game --}}
            @include('admin.team.layouts.totalPerGame')


            <div class="row">
                @include('admin.team.layouts.homeTotal')
                @include('admin.team.layouts.homePerGame')
            
            </div>

            <div class="row mt-5">
                @include('admin.team.layouts.awayTotal')
                @include('admin.team.layouts.awayPerGame')
            
            </div>
                        


           
            {{-- header --}}
            {{-- @include('admin.team.layouts.tables') --}}

            
        </div>
    </div>
    </div>
</div>
@endsection