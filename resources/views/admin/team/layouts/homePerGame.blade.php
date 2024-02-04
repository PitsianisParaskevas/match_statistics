<div class="col-sm-6">
    <h4>Per Game</h4>  
    <hr>
    <ul class="list-group list-group-flush ">
        <li class="list-group-item">
            <h6>Points: <small class="text-muted">{{ number_format( ($homeSum['points']) /  ($homeSum['total']), 2) }}</small></h6>
        </li>
        <li class="list-group-item"><h6>Goals</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-dark"><h6>GF: <small class="text-muted"> {{ number_format( ($homeSum['gF']) /  ($homeSum['total']), 2) }}</small></h6></li>
                <li class="list-group-item list-group-item-dark"><h6>GA: <small class="text-muted">{{ number_format( ($homeSum['gA']) /  ($homeSum['total']), 2) }}</small></h6></li>
                <li class="list-group-item list-group-item-dark"><h6>DIF: <small class="text-muted">{{ number_format( ($homeSum['gF'] - $homeSum['gA']) /  ($homeSum['total']), 2) }}</small></h6></li>
              </ul>
        </li>
        <li class="list-group-item"><h6>xG: <small class="text-muted">{{ number_format( ($homeSum['xG']) /  ($homeSum['total']), 2) }}</small></h6></li>
        <li class="list-group-item"><h6>Ball Possession: <small class="text-muted">{{ number_format( ($homeSum['ballPossesion']) /  ($homeSum['total']), 2) }}</small></h6></li>
        <li class="list-group-item"><h6>Shots</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-dark"><h6>Shots: <small class="text-muted"> {{ number_format( ($homeSum['shots']) /  ($homeSum['total']), 2) }}</small></h6></li>
                <li class="list-group-item list-group-item-dark"><h6>Shots on target: <small class="text-muted">{{ number_format( ($homeSum['shotsOnTarget']) /  ($homeSum['total']), 2) }}</small></h6></li>
                <li class="list-group-item list-group-item-dark"><h6>Shots / target: <small class="text-muted"> {{ number_format( ($homeSum['shots'] / $homeSum['shotsOnTarget']) /  ($homeSum['total']), 2) }}</small></h6></li>
              </ul>
        </li>
        <li class="list-group-item"><h6>Corners: <small class="text-muted"> {{ number_format( ($homeSum['corner']) /  ($homeSum['total']), 2) }}</small></h6></li>
        <li class="list-group-item"><h6>Offsides: <small class="text-muted">{{ number_format( ($homeSum['offsides']) /  ($homeSum['total']), 2) }}</small></h6></li>
        <li class="list-group-item"><h6>Fouls: <small class="text-muted">{{ number_format( ($homeSum['fouls']) /  ($homeSum['total']), 2) }}</small></h6></li>
        <li class="list-group-item"><h6>Cards</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-dark"><h6>Yellow :<small class="text-muted">{{ number_format( ($homeSum['yellow']) /  ($homeSum['total']), 2) }}</small></h6></li>
                <li class="list-group-item list-group-item-dark"><h6>Red:<small class="text-muted">{{ number_format( ($homeSum['red']) /  ($homeSum['total']), 2) }}</small></h6></li>
              </ul>
        </li>
      </ul>
  </div>

  

  
  

  
  
 

 
  
  

  
  