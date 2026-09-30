<?php
  $numerator = null;
  $denominator = null;
  $result = "";
  $output = null;
  $divided = "";

  if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["numerator"], $_GET["denominator"]) && $_GET["numerator"] !== "" && $_GET["denominator"] !== "" && $_GET["numerator"] != 0 && $_GET["denominator"] != 0 ) {
    $numerator = intval($_GET["numerator"]);
    $denominator = intval($_GET["denominator"]);
    $result = $numerator % $denominator;

    $divided = floor($denominator / $numerator);
  }

  if (isset($numerator, $denominator) && $divided >= 1) {
    $output = "Het deeltal past $divided keer in de deler.";
  } else if (isset($numerator, $denominator) && $divided <= 1){
    $output = "Het deeltal past niet in de deler.";
  }

  if ($output === null) {
    $output = "De velden zijn niet correct ingevuld.";
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>

  <body>
    <form action="" method="GET">
      <input type="number" name="numerator" placeholder="Deeltal"><br>
      <input type="number" name="denominator" placeholder="Deler"><br>
      <input type="submit"><br>
    </form>
    <?php echo "<p>$output</p>"; ?>
  </body>
</html>