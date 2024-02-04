<div class="col-sm-6">
    <h4>Away: {{$awaySum['total']}}</h4>  
    <hr>
    <ul class="list-group list-group-flush ">
        <li class="list-group-item">
            <h6>Points: <small class="text-muted">{{$awaySum['points']}}</small></h6>
        </li>
        <li class="list-group-item"><h6>Goals</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-dark"><h6>GF: <small class="text-muted">{{$awaySum['gF']}}</small></h6></li>
                <li class="list-group-item list-group-item-dark"><h6>GA: <small class="text-muted">{{$awaySum['gA']}}</small></h6></li>
                <li class="list-group-item list-group-item-dark"><h6>DIF: <small class="text-muted">{{ ($awaySum['gF']) - ($awaySum['gA']) }}</small></h6></li>
              </ul>
        </li>
        <li class="list-group-item"><h6>xG: <small class="text-muted">{{$awaySum['xG']}}</small></h6></li>
        <li class="list-group-item"><h6>Ball Possession: <small class="text-muted">{{$awaySum['ballPossesion']}}</small></h6></li>
        <li class="list-group-item"><h6>Shots</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-dark"><h6>Shots: <small class="text-muted">{{$awaySum['shots']}}</small></h6></li>
                <li class="list-group-item list-group-item-dark"><h6>Shots on target: <small class="text-muted">{{$awaySum['shotsOnTarget']}}</small></h6></li>
                <li class="list-group-item list-group-item-dark"><h6>Shots / target: <small class="text-muted">{{number_format($awaySum['shotsOnTarget'] / $awaySum['shots'], 2)}}</small></h6></li>
              </ul>
        </li>
        <li class="list-group-item"><h6>Corners: <small class="text-muted">{{$awaySum['corner']}}</small></h6></li>
        <li class="list-group-item"><h6>Offsides: <small class="text-muted">{{$awaySum['offsides']}}</small></h6></li>
        <li class="list-group-item"><h6>Fouls: <small class="text-muted">{{$awaySum['fouls']}}</small></h6></li>
        <li class="list-group-item"><h6>Cards</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-dark"><h6>Yellow :<small class="text-muted">{{$awaySum['yellow']}}</small></h6></li>
                <li class="list-group-item list-group-item-dark"><h6>Red:<small class="text-muted">{{$awaySum['red']}}</small></h6></li>
              </ul>
        </li>
      </ul>
  </div>
   