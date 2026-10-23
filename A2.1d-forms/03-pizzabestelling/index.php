<?php
  $ren = "";
  $total = 0.0;
  $extraSelected = [];

  $pizzaPrices = array(
      "spianata-piccante" => 12.5,
      "seppi" => 11.5,
      "tirato" => 10.5,
    );

  $extraPrices = array(
    "olives" => 2.5,
    "cheese" => 1.5,
    "deliver" => 3.5
  );

  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["pizza"])) {

    if (is_array($_POST["pizza"])) {
      foreach($_POST["pizza"] as $selected) {
        if (isset($pizzaPrices[$selected])) {
          $total += $pizzaPrices[$selected];
        }
      }
    }

    if (!empty($_POST["extra"]) && is_array($_POST["extra"])) {
      foreach($_POST["extra"] as $selected) {
        if (isset($extraPrices[$selected])) {
          $total += $extraPrices[$selected];
        }
      }
    }
    $total = number_format($total, 2);
    $ren = "<p>Het totaal bedrag is: €$total</p>"; 
  } else {
    $ren = "<p>Maak een keuze.</p>";
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <h2>Bereken de prijs van een pizzabestelling</h2>
    <form action="" method="POST">
      <input type="checkbox" name="pizza[]" value="spianata-piccante">Spianata Piccante (€ 12,50)<br>
      <input type="checkbox" name="pizza[]" value="seppi">Seppi (€ 11,50)<br>
      <input type="checkbox" name="pizza[]" value="tirato">Tirato (€ 10,50)<br><br>

      <input type="checkbox" name="extra[]" value="olives">olijven (€ 2,50)<br>
      <input type="checkbox" name="extra[]" value="cheese">kaas (€ 1,50)<br><br>

      <input type="radio" name="extra[]" value="deliver">Laten bezorgen (€ 3,50)<br><br>
      <input name="submit" type="submit" value="Bestel">
    </form>
    <?= $ren; ?>
  </body>
</html>