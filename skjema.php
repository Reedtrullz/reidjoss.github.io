<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/master.css">
</head>

<?php
$mechanics = array("Danielsen", "Isaksen", "Jensen", "Olsen");
$agreements = array("Politiet", "Ambulansen", "Trøndertaxi", "Bilforhandleren", "DNB Bank", "Eiendomsmegler1", "Flyskolen", "Bahama Mamas", "AutoXO", "Bennys", "Oslo Advokaten", "Statens Vegvesen", "Arbeidsledig");
$prices = array("100k til 200k", "200k til 500k", "500k til 1 mill", "1mill til 1.5mill", "1.5mill til 2mill", "2mill til 3mill");
$tuningoptions = array("Standard", "Steg 1", "Steg 2", "Steg 3", "Steg 4", "Steg 5", "Steg 6");

$boolean_labels = array("Velg", "Nei", "Ja");

$motorpris = array(0, 2500, 3750, 5000, 7000);
$bremsepris = array(0, 2000, 2500, 3750, 4750);
$girpris = array(0, 2500, 3750, 8500);
$pansringpris = array(0, 2000, 2900, 3250, 4100, 4500, 8500);
$senkingpris = array(0, 2000, 2350, 3250, 4000, 4750);
$turbopris = array (0, 0, 7500);

function optionslist($options, $initial) {
  foreach($options as $option) {
    echo "<option";
    if($option == $initial) echo " selected";
    echo ">$option</option>";
  }
}

function selectfield($name, $label, $options) {
  echo "<div class=\"input-group mb-3\"><div class=\"input-group-prepend\"><label class=\"input-group-text\" for=\"$name\">$label</label></div>";
  echo "<select class=\"custom-select\" id=\"$name\" name=\"$name\">";
  echo optionslist($options, $_GET[$name]);
  echo "</select></div>";
}

function submit_button($name, $label, $style, $enable_criteria) {
  $disabled = $enable_criteria ? "" : " disabled";
  return "<input type='submit' class='btn btn-$style' value='$label' name='$name'$disabled>";
}

function get_price($item, $options, $pricelist) {
  $i = 0;
  foreach($options as $option) {
    if ($option == $item) return $pricelist[$i];
    $i ++;
  }
  return 0;
}

$price_total = 0;

$price_total += get_price($_GET["motor"], $tuningoptions, $motorpris);
$price_total += get_price($_GET["bremser"], $tuningoptions, $bremsepris);
$price_total += get_price($_GET["gir"], $tuningoptions, $girpris);
$price_total += get_price($_GET["pansring"], $tuningoptions, $pansringpris);
$price_total += get_price($_GET["senking"], $tuningoptions, $senkingpris);
$price_total += get_price($_GET["turbo"], $boolean_labels, $turbopris);

?>

<body>
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-lg-8 col-sm-12 skjemaboks">
        <div class="tuningskjema">
          <form action="skjema.php" method="get">
            <div class="card">
              <h5 class="card-header">Info</h5>
              <div class="card-body">
                <div class="form-row">
                  <div class="col">
                    <?php echo selectfield("mekaniker", "Mekaniker", $mechanics); ?>
                  </div>

                  <!-- Dette er feltet for valg av bedriftsavtale -->

                  <div class="col">
                    <?php echo selectfield("avtale", "Bedriftsavtale", $agreements); ?>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <?php echo selectfield("verdi", "Bilens verdi", $prices); ?>
                  </div>

                  <div class="col">
                    <?php echo selectfield("import", "Importbil?", $boolean_labels); ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="card tuning">
              <h5 class="card-header">Tuning</h5>
              <div class="card-body">

                <div class="form-row">
                  <div class="col">
                    <?php echo selectfield("bremser", "Bremser", $tuningoptions); ?>
                  </div>

                  <div class="col">
                    <?php echo selectfield("gir", "Girkasse", $tuningoptions); ?>
                  </div>


                  <div class="col">
                    <?php echo selectfield("motor", "Motor", $tuningoptions); ?>
                  </div>

                  <div class="col">
                    <?php echo selectfield("pansring", "Pansring", $tuningoptions); ?>
                  </div>

                  <div class="col">
                    <?php echo selectfield("senking", "Senking", $tuningoptions); ?>
                  </div>

                  <div class="col">
                    <?php echo selectfield("turbo", "Turbo", $boolean_labels); ?>
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
                  <input type="text" class="form-control" id="totalpris" aria-describedby="totalpris-addon" value="<?php echo $price_total ?>.00 kr" readonly>
                </div>
              </div>
            </div>
            <?php echo submit_button("update", "Oppdater", "info", 1) ?>
            <?php echo submit_button("send", "Lagre", "success", $price_total) ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
