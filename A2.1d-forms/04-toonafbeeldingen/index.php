<?php
  $ren = "";

  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["cars"])) {

    foreach($_POST["cars"] as $selected) {
      $ren .= "<h3>" .mb_convert_case($selected, MB_CASE_TITLE, "UTF-8"). "</h3>";

      $ren .= "<img src=\"assets/$selected/img_1.png\" width=\"450px\" height=\"250px\">\n";
      $ren .= "<img src=\"assets/$selected/img_2.png\" width=\"450px\" height=\"250px\">\n";
    }
  } elseif ($_SERVER["REQUEST_METHOD"] === "POST" && !isset($_POST["cars"])) {
    $ren = "<p><b>Maak een keuze!</b></p>";
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <h2>Toon twee afbeeldingen per gekozen automerk</h2>
    <form action="" method="POST">
      <input type="checkbox" name="cars[]" value="mercedes-benz">Mercedes-Benz<br>
      <input type="checkbox" name="cars[]" value="Volvo">Volvo<br>
      <input type="checkbox" name="cars[]" value="audi">Audi<br>

      <input name="submit" type="submit" value="Bevestig">
    </form>
    <?= $ren; ?>
  </body>
</html>