<div class="row">
    <div class="col-sm-12">
      <h4>Per Game</h4>
      <hr>
      <div class="statistics-details d-flex align-items-center justify-content-between">
        <div>
          <h6>Points</h6>
          <p>P: {{ number_format( ($teamScoreBoard->points) /  ($teamScoreBoard->matchday), 2) }}</p>
        </div>
        <div>
          <h6>Goals</h6>
          <p>GF: {{ number_format( ($teamScoreBoard->goalFor) /  ($teamScoreBoard->matchday), 2) }}</p>
          <p>GA: {{ number_format( ($teamScoreBoard->goalAgainst) /  ($teamScoreBoard->matchday), 2) }}</p>
          <p class="d-flex">DIF: {{ number_format(($teamScoreBoard->goalFor - $teamScoreBoard->goalAgainst) / $teamScoreBoard->matchday , 2) }}</p>
        </div>
        {{-- <div>
          <h6>xG</h6>
          <p>xG: {{ number_format( ($totalResult['xG']) /  ($teamScoreBoard->matchday), 2) }}</p>
        </div>                   --}}
        <div>
          <h6>xG</h6>
          <p>xG: {{ number_format( ($totalResult['xG']) /  (($totalResult['total'])), 2) }}</p>
        </div>
          <div>
          <h6>Ball Possession</h6>
          <p>Poseesion: {{ number_format( ($totalResult['ballPossesion']) /  ($teamScoreBoard->matchday), 2) }}</p>
        </div>
        <div>
          <h6>Shots</h6>
          <p>Shots: {{ number_format( ($totalResult['shots']) /  ($teamScoreBoard->matchday), 2) }}</p>
          <p>Shots on target: {{ number_format( ($totalResult['shotsOnTarget']) /  ($teamScoreBoard->matchday), 2) }}</p>
          <p>Shots / target: {{ number_format( ($totalResult['shotsOnTarget'] / $totalResult['shots']) /  ($teamScoreBoard->matchday), 2) }}</p>
        </div>
        <div>
          <h6>Corners</h6>
          <p>Corners: {{ number_format( ($totalResult['corner']) /  ($teamScoreBoard->matchday), 2) }}</p>
        </div>
        <div>
          <h6>Offsides</h6>
          <p>Offsides:  {{ number_format( ($totalResult['offsides']) /  ($teamScoreBoard->matchday), 2) }}</p>
        </div>
        <div>
          <h6>Fouls</h6>
          <p>Fouls:  {{ number_format( ($totalResult['fouls']) /  ($teamScoreBoard->matchday), 2) }}</p>
        </div>
        <div>
          <h6>Cards</h6>
          <p>Yellow:  {{ number_format( ($totalResult['yellow']) /  ($teamScoreBoard->matchday), 2) }}</p>
          <p>Red:  {{ number_format( ($totalResult['red']) /  ($teamScoreBoard->matchday), 2) }}</p>
        </div>
      </div>
    </div>
  </div>