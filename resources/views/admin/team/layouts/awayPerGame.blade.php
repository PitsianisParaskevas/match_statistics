<div class="col-sm-6">
    <h4>Per Game</h4>  
    <hr>
    <ul class="list-group list-group-flush ">
        <li class="list-group-item">
            <h6>Points: <small class="text-muted">{{ number_format( ($awaySum['points']) /  ($awaySum['total']), 2) }}</small></h6>
        </li>
        <li class="list-group-item"><h6>Goals</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-dark"><h6>GF: <small class="text-muted"> {{ number_format( ($awaySum['gF']) /  ($awaySum['total']), 2) }}</small></h6></li>
                <li class="list-group-item list-group-item-dark"><h6>GA: <small class="text-muted">{{ number_format( ($awaySum['gA']) /  ($awaySum['total']), 2) }}</small></h6></li>
                <li class="list-group-item list-group-item-dark"><h6>DIF: <small class="text-muted">{{ number_format( ($awaySum['gF'] - $awaySum['gA']) /  ($awaySum['total']), 2) }}</small></h6></li>
              </ul>
        </li>
        <li class="list-group-item"><h6>xG: <small class="text-muted">{{ number_format( ($awaySum['xG']) /  ($awaySum['total']), 2) }}</small></h6></li>
        <li class="list-group-item"><h6>Ball Possession: <small class="text-muted">{{ number_format( ($awaySum['ballPossesion']) /  ($awaySum['total']), 2) }}</small></h6></li>
        <li class="list-group-item"><h6>Shots</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-dark"><h6>Shots: <small class="text-muted"> {{ number_format( ($awaySum['shots']) /  ($awaySum['total']), 2) }}</small></h6></li>
                <li class="list-group-item list-group-item-dark"><h6>Shots on target: <small class="text-muted">{{ number_format( ($awaySum['shotsOnTarget']) /  ($awaySum['total']), 2) }}</small></h6></li>
                <li class="list-group-item list-group-item-dark"><h6>Shots / target: <small class="text-muted"> {{ number_format( ($awaySum['shots'] / $awaySum['shotsOnTarget']) /  ($awaySum['total']), 2) }}</small></h6></li>
              </ul>
        </li>
        <li class="list-group-item"><h6>Corners: <small class="text-muted"> {{ number_format( ($awaySum['corner']) /  ($awaySum['total']), 2) }}</small></h6></li>
        <li class="list-group-item"><h6>Offsides: <small class="text-muted">{{ number_format( ($awaySum['offsides']) /  ($awaySum['total']), 2) }}</small></h6></li>
        <li class="list-group-item"><h6>Fouls: <small class="text-muted">{{ number_format( ($awaySum['fouls']) /  ($awaySum['total']), 2) }}</small></h6></li>
        <li class="list-group-item"><h6>Cards</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-dark"><h6>Yellow :<small class="text-muted">{{ number_format( ($awaySum['yellow']) /  ($awaySum['total']), 2) }}</small></h6></li>
                <li class="list-group-item list-group-item-dark"><h6>Red:<small class="text-muted">{{ number_format( ($awaySum['red']) /  ($awaySum['total']), 2) }}</small></h6></li>
              </ul>
        </li>
      </ul>
  </div>

  

  
  

  