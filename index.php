<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/master.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-lg-8 col-sm-12 skjemaboks">
        <div class="tuningskjema">
          <!-- Dette er feltet for valg av mekaniker -->
          <form>
            <div class="card">
              <h5 class="card-header">Info</h5>
              <div class="card-body">
                <div class="form-row">
                  <div class="col">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="mekaniker">Mekaniker</label>
                      </div>
                      <select class="custom-select" id="mekaniker">
                        <option>Isak Danielsen</option>
                        <option>Ansatt2</option>
                        <option>Ansatt3</option>
                        <option>Ansatt4</option>
                        <option>Ansatt5</option>
                      </select>
                    </div>
                  </div>

                  <!-- Dette er feltet for valg av bedriftsavtale -->

                  <div class="col">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="avtale">Bedriftsavtale</label>
                      </div>
                      <select class="custom-select" id="avtale">
                        <option>Politiet</option>
                        <option>Ambulansen</option>
                        <option>Trøndertaxi</option>
                        <option>Bilforhandleren</option>
                        <option>DNB Bank</option>
                        <option>Eiendomsmegler1</option>
                        <option>Flyskolen</option>
                        <option>Bahama Mamas</option>
                        <option>AutoXO</option>
                        <option>Bennys</option>
                        <option>Oslo Advokaten</option>
                        <option>Statens Vegvesen</option>
                        <option>Arbeidsledig</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Bilens verdi</span>
                      </div>
                      <input type="number" class="form-control" aria-label="Verdi i hele kroner" required>
                      <div class="input-group-append">
                        <span class="input-group-text">.00 Kr</span>
                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="import">Importbil</label>
                      </div>
                      <select class="custom-select" id="import">
                        <option selected>Velg</option>
                        <option value="Import">Ja</option>
                        <option value="Ikke import">Nei</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card tuning">
              <h5 class="card-header">Tuning</h5>
              <div class="card-body">

                <div class="form-row">
                  <div class="col">
                    <!--Dette er feltet for bremser-->

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="bremser">Bremser</label>
                      </div>
                      <select class="custom-select" id="bremser">
                        <option selected>Velg</option>
                        <option value="BREMS0">Standard</option>
                        <option value="BREMS1">Steg 1</option>
                        <option value="BREMS2">Steg 2</option>
                        <option value="BREMS3">Steg 3</option>
                        <option value="BREMS4">Steg 4</option>
                      </select>
                    </div>
                  </div>

                  <div class="col">
                    <!--Dette er feltet for girkasse-->

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="girkasse">Girkasse</label>
                      </div>
                      <select class="custom-select" id="girkasse">
                        <option selected>Velg</option>
                        <option value="GIR0">Standard</option>
                        <option value="GIR1">Steg 1</option>
                        <option value="GIR2">Steg 2</option>
                        <option value="GIR3">Steg 3</option>
                      </select>
                    </div>
                  </div>


                  <div class="col">
                    <!--Dette er feltet for motor-->

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="motor">Motor</label>
                      </div>
                      <select class="custom-select" id="motor">
                        <option selected>Velg</option>
                        <option value="MOTOR0">Standard</option>
                        <option value="MOTOR1">Steg 1</option>
                        <option value="MOTOR2">Steg 2</option>
                        <option value="MOTOR3">Steg 3</option>
                        <option value="MOTOR4">Steg 4</option>
                        <option value="MOTOR5">Steg 5</option>
                      </select>
                    </div>
                  </div>

                  <div class="col">
                    <!--Dette er feltet for pansring-->

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="pansring">Pansring</label>
                      </div>
                      <select class="custom-select" id="pansring">
                        <option selected>Velg</option>
                        <option value="PANSER0">Standard</option>
                        <option value="PANSER1">Steg 1</option>
                        <option value="PANSER2">Steg 2</option>
                        <option value="PANSER3">Steg 3</option>
                        <option value="PANSER4">Steg 4</option>
                        <option value="PANSER5">Steg 5</option>
                        <option value="PANSER6">Steg 6</option>
                      </select>
                    </div>
                  </div>

                  <div class="col">
                    <!--Dette er feltet for senking-->

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="senking">Senking</label>
                      </div>
                      <select class="custom-select" id="senking">
                        <option selected>Velg</option>
                        <option value="SENK0">Standard</option>
                        <option value="SENK1">Steg 1</option>
                        <option value="SENK2">Steg 2</option>
                        <option value="SENK3">Steg 3</option>
                        <option value="SENK4">Steg 4</option>
                        <option value="SENK5">Steg 5</option>
                      </select>
                    </div>
                  </div>

                  <!--Dette er feltet for turbo-->

                  <div class="col">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="turbo">Turbo</label>
                      </div>
                      <select class="custom-select" id="turbo">
                        <option selected>Velg</option>
                        <option value="Turbo">Ja</option>
                        <option value="Noturbo">Nei</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <!-- Dette er feltet for prisen kunde skal se -->
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="totalpris-addon">Totalpris til kunde</span>
                  </div>
                  <input type="text" class="form-control" id="totalpris" aria-describedby="totalpris-addon" readonly>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sendskjema">Registrer</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
