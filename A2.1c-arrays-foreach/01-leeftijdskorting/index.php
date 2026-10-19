<?php
  $price = 12;

  $age = null; 
  $ren = "";

  if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["age"])) {
    $age = $_GET["age"];

    if ($age < 3) {
      $price = 0;
    } elseif ($age >= 3 && $age <= 16) {
      $price -= ($price / 2); // 50% discount
    } elseif ($age >= 65) {
      $price -= ($price /4); // 25% discount
    }

    $ren = "Uw prijs is: €$price";
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    
    <h2>Bereken de prijs van een boottocht voor vier leeftijdsgroepen</h2>
    <form action="" method="GET">
      <input name="age" placeholder="Leeftijd">
      <input name="submit" type="submit" value="Bereken prijs">
    </form>
    <div>
      <h4>De standaard prijs is €12</h4>
      <p>Jonger dan 3 jaar is gratis, 3 t/m 16 jaar krijgt 50% korting en Vanaf 65 jaar krijgt u 25% korting</p>
    </div>
    <hr>
    <br>
    <?= $ren; ?>
  </body>
</html>