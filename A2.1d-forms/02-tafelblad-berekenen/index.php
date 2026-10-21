<?php
  $ren = "";
  $total = null;

  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["wood-type"], $_POST["shape-type"])) {
    $woodType = $_POST["wood-type"];
    $shapeType = $_POST["shape-type"];

    $width = $_POST["width"];
    $height = $_POST["height"];

    $woodPrice = null;

    switch ($woodType) {
      case 1:
        $woodPrice = 9.50;
        break;
      case 2:
        $woodPrice = 8.50;
        break;
      case 3:
        $woodPrice = 11.50;
        break;
    }

    if ($shapeType == "rectangle") {
      $surface = $width * $height;
    } elseif ($shapeType == "circle") {
      $surface = ((hypot($width, $height) / 2) ** 2) * pi();
    }

    $total = round($surface * $woodPrice);
    $ren = "<p>Oppervlakte: ". round($surface). "m&sup2; </p>\n<p>Totaal: €$total</p>";
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <h2>Bereken de prijs van een rond of rechthoekig tafelblad</h2>
    <form action="" method="POST">
      <table>
        <tr>
          <td><img src="./assets/img_01.jpg" height="275" width="275"></td>
          <td><img src="./assets/img_02.jpg" height="275" width="275"></td>
          <td><img src="./assets/img_03.jpg" height="275" width="275"></td>
        </tr>
        <tr>
          <td><input type="radio" name="wood-type" value="1">Donker eiken hout (€ 9,50/m²)</td>
          <td><input type="radio" name="wood-type" value="2">Eiken hout (€ 8,50/m²)</td>
          <td><input type="radio" name="wood-type" value="3">Berken hout (€ 11,50/m²)</td>
        </tr>
      </table><br>
      <input type="radio" name="shape-type" value="rectangle">Rechthoekig<br>
      <input type="radio" name="shape-type" value="circle">Rond<br><br>
      <input type="text" name="width" placeholder="width"><br>
      <input type="text" name="height" placeholder="height"><br><br>
      <input name="submit" type="submit" value="Bereken">
    </form>
    <?= $ren; ?>
  </body>
</html>