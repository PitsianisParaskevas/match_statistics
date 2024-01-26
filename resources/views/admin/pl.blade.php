@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-8">
      <div class="card">
        <div class="card-body">
          <div class="row">
             
                  <div class="table-responsive">
                    <table class="table table-striped table-fixed" id="match-result">
                      <thead>
                        <tr>
                          <th >Matchday</th>
                          <th >Home/Away</th>
                          <th >Opponent</th>
                          <th >xG</th>
                          <th >Ball possession</th>
                          <th >Shoots</th>
                          <th >Shots on target</th>
                          <th >Conrers</th>
                          <th >Offsides</th>
                          <th >Fouls</th>
                          <th >Yeloow cards</th>
                          <th >Red cards</th>
                          <th >Results</th>
                          <th >Goals for</th>
                          <th >Goals against</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>H</td>
                          <td>Nottingham Forest</td>
                          <td>0.83</td>
                          <td>78%</td>
                          <td>15</td>
                          <td>7</td>
                          <td>8</td>
                          <td>2</td>
                          <td>12</td>
                          <td>2</td>
                          <td>0</td>
                          <td>2 - 1</td>
                          <td>2</td>
                          <td>1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>H</td>
                            <td>Nottingham Forest</td>
                            <td>0.83</td>
                            <td>78%</td>
                            <td>15</td>
                            <td>7</td>
                            <td>8</td>
                            <td>2</td>
                            <td>12</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2 - 1</td>
                            <td>2</td>
                            <td>1</td>
                          </tr>

                       
                      </tbody>
                    </table>
                  </div>
             
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <td>
                  <img
                    src="{{asset('template/src/assets/images/pl-badges/arsenal.png')}}"
                    alt=""
                  />
                </td>
                <td>vs</td>
                <td>
                  <img
                    src="{{asset('template/src/assets/images/pl-badges/aston villa.png')}}"
                    alt=""
                  />
                </td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1.34</td>
                <td>Expected Goals (xG)</td>
                <td>1.64</td>
              </tr>
              <tr>
                <td>39%</td>
                <td>Ball possession</td>
                <td>61%</td>
              </tr>
              <tr>
                <td>15</td>
                <td>Shots</td>
                <td>13</td>
              </tr>

              <tr>
                <td>15</td>
                <td>Shots</td>
                <td>13</td>
              </tr>

              <tr>
                <td>15</td>
                <td>Shots on target</td>
                <td>13</td>
              </tr>

              <tr>
                <td>15</td>
                <td>Conrners</td>
                <td>13</td>
              </tr>

              <tr>
                <td>15</td>
                <td>Offsides</td>
                <td>13</td>
              </tr>

              <tr>
                <td>15</td>
                <td>Fouls</td>
                <td>13</td>
              </tr>

              <tr>
                <td>15</td>
                <td>Yellow cards</td>
                <td>13</td>
              </tr>

              <tr>
                <td>15</td>
                <td>Red cards</td>
                <td>13</td>
              </tr>

              <tr>
                <td>15</td>
                <td>Result</td>
                <td>13</td>
              </tr>

              <tr>
                <td>15</td>
                <td>Goals for</td>
                <td>13</td>
              </tr>

              <tr>
                <td>15</td>
                <td>Goals against</td>
                <td>13</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>

       
            
@endsection
