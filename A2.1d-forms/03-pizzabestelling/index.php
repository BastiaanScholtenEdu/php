<?php
  $ren = "";
  $extraSelected = [];

  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["pizza"])) {
    $total = 0;
    $pizzaSelected = $_POST["pizza"];
    if (isset($_POST["extra"])) {
      $extraSelected = $_POST["extra"];
    }
    
    
    foreach($pizzaSelected as $selectedPizza) {
      switch ($selectedPizza) {
        case "spianata-piccante":
          $total += 12.50;
          break;
        case "seppi":
          $total += 11.50;
          break;
        case "tirato":
          $total += 10.50;
          break;
      }
    }

    foreach($extraSelected as $selectedExtra)
    switch ($selectedExtra) {
      case "olives":
        $total += 2.50;
        break;
      case "cheese":
        $total += 1.50;
        break;
      case "deliver":
        $total += 3.50;
        break;
    }
    
    $ren = "Het totaal bedrag is: €$total"; 
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