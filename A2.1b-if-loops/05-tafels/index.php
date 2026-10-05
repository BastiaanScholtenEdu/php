<?php
  $ren = "";
  $tabel = null;
  $int_1 = null;
  $int_2 = null;
  if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["tabel"], $_GET["start"], $_GET["end"])) {
    $tabel = $_GET["tabel"];
    $int_1 = $_GET["start"];
    $int_2 = $_GET["end"];

    for ($i = $int_1; $i <= $int_2; $i++) {
      $result = $i * $tabel;
      $ren .= "$i * $tabel = ". "$result <br>";
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    
    <h2>Toon een zelfgekozen tafel tussen twee getallen</h2>
    <form action="" method="GET">
      <input name="tabel" placeholder="tafel"><br>
      <input name="start" placeholder="beginwaarde"><br>
      <input name="end" placeholder="eindwaarde"><br>
      <input name="submit" type="submit">
    </form>
    <br><hr>
    <?= $ren; ?>
  </body>
</html>