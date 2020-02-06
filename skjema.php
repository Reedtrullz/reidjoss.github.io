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

$authenticated = false;

<?php
session_start();
if (!isset($_SESSION["authenticated"])) {
  try {
    include "db.php";
    $user = $_POST["user"];
      $stmt = $conn->prepare("SELECT salt, hash FROM users WHERE name='$user'");
      $stmt->execute();

      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $k=>$v) {
        $hash = $v["hash"];
        $salt = $v["salt"];
        $ppass = $_POST["pass"];
        if (strcmp(md5($salt . $ppass), $hash) != 0) {
          include 'index.php';
          die();
        } else {
          $_SESSION["authenticated"] = 1;
        }
      }
  }
  catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
  }
  $conn = null;
}
?>

// echo " " + $hash + " ";
// echo //

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

$turbomap = array("Nei" => 0, "Ja" => 7500);
$motormap = array("Standard" => 0, "Steg 1" => 2500, "Steg 2" => 3750, "Steg 3" => 5000, "Steg 4" => 7000);
$bremsemap = array("Standard" => 0, "Steg 1" => 2000, "Steg 2" => 2500, "Steg 3" => 3750, "Steg 4" => 4750);
$girmap = array("Standard" => 0, "Steg 1" => 2500, "Steg 2" => 3750, "Steg 3" => 8500);
$pansringmap = array("Standard" => 0, "Steg 1" => 2000, "Steg 2" => 2900, "Steg 3" => 3250, "Steg 4" => 4100, "Steg 5" => 4500, "Steg 6" => 8500);
$senkingmap = array("Standard" => 0, "Steg 1" => 2000, "Steg 2" => 2350, "Steg 3" => 3250, "Steg 4" => 4000, "Steg 5" => 4750);

// Liste med prosenter kan legges inn sånn:
// $avtaleprosent(0.9, 1.1 ....);
$turbopris = array("Nei" => 0, "Ja" => 7500);
// rekkefølgen på $agreements "Politiet", "Ambulansen", "Trøndertaxi", "Bilforhandleren", "DNB Bank", "Eiendomsmegler1", "Flyskolen", "Bahama Mamas", "AutoXO", "Bennys", "Oslo Advokaten", "Statens Vegvesen", "Arbeidsledig"
$agreements = array("Politiet" => 1.1, "Ambulansen" => 1.1, "Trøndertaxi" => 1.1, "Bilforhandleren" => 1.1, "DNB Bank" => 0.95, "Eiendomsmegler1" => 0.90, "Flyskolen" => 1.1, "Bahama Mamas" => 1.1, "AutoXO" => 1.1, "Bennys" => 0.90, "Oslo Advokaten" => 1.1, "Statens Vegvesen" => 0.95, "Arbeidsledig" => 1.1);
// rekkefølgen på $prices "100k til 200k", "200k til 500k", "500k til 1 mill", "1mill til 1.5mill", "1.5mill til 2mill", "2mill til 3mill"
$prices = array("0k til 100K" => 1.6, "100k til 200k" => 1.8, "200k til 500k" => 1.9, "500k til 1 mill" => 2, "1mill til 1.5mill" => 2.5, "1.5mill til 2mill" => 3, "2mill til 3mill" => 4, "3 mill +" => 5);
// rekkefølgen på $boolean_labels(import?) er "Velg" "Ja" "Nei"
$import = array("Nei" => 1, "Ja" => 1.3);

function optionslist($options, $initial) {
  foreach($options as $option) {
    echo "<option";
    if($option == $initial) echo " selected";
    echo ">$option</option>";
  }
}

function selectfield_map($name, $label, $map) {
  $initial = $_GET[$name];
  echo "<div class='input-group mb-3'><div class='input-group-prepend''><label class='input-group-text' for='$name'>$label</label></div>";
  echo "<select class='custom-select' id='$name' name='$name'>";
  foreach($map as $key => $price) {
    $selected = $price == $initial ? " selected" : "";
    echo "<option value='$map[$key]'$selected>$key ($price,-)</option>";
  }
  echo "</select></div>";
}

function selectfield_percentage($name, $label, $map) {
  $initial = $_GET[$name];
  echo "<div class='input-group mb-3'><div class='input-group-prepend''><label class='input-group-text' for='$name'>$label</label></div>";
  echo "<select class='custom-select' id='$name' name='$name'>";
  foreach($map as $key => $factor) {
    $selected = $key == $initial ? " selected" : "";
    echo "<option value='$key'$selected>$key ";
    echo human_percentage($factor);
    echo "</option>";
  }
  echo "</select></div>";
}

function human_percentage($factor) {
  $percentage = $factor > 1 ? ($factor * 100 - 100) : $factor < 1 ? 10 * (1 - $factor) : 0;
  $percentage = $factor * 100 - 100;
  $sign = $percentage > 0 ? "+" : "";
  echo "($sign$percentage%)";
}

function selectfield($name, $label, $options) {
  echo "<div class='input-group mb-3'><div class='input-group-prepend''><label class='input-group-text' for='$name'>$label</label></div>";
  echo "<select class='custom-select' id='$name' name='$name'>";
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

$price_total = $_GET["motor"] + $_GET["bremser"] + $_GET["gir"] + $_GET["pansring"] + $_GET["senking"] + $_GET["turbo"];
$price_total = $price_total * $agreements[$_GET["avtale"]] * $prices[$_GET["verdi"]] * $import[$_GET["import"]];

// Sånn kan du legge inn prosenter.
// $price_total = $price_total * get_price($_GET["avtale"], $agreements, $avtaleprosent);

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
                    <?php echo selectfield_percentage("avtale", "Bedriftsavtale", $agreements); ?>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <?php echo selectfield_percentage("verdi", "Bilens verdi", $prices); ?>
                  </div>

                  <div class="col">
                    <?php echo selectfield_percentage("import", "Importbil?", $import); ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="card tuning">
              <h5 class="card-header">Tuning</h5>
              <div class="card-body">

                <div class="form-row">
                  <div class="col">
                    <?php selectfield_map("bremser", "Bremser", $bremsemap); ?>
                  </div>

                  <div class="col">
                    <?php selectfield_map("gir", "Girkasse", $girmap); ?>
                  </div>


                  <div class="col">
                    <?php selectfield_map("motor", "Motor", $motormap); ?>
                  </div>

                  <div class="col">
                    <?php selectfield_map("pansring", "Pansring", $pansringmap); ?>
                  </div>

                  <div class="col">
                    <?php selectfield_map("senking", "Senking", $senkingmap); ?>
                  </div>

                  <div class="col">
                    <?php selectfield_map("turbo", "Turbo", $turbomap); ?>
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
