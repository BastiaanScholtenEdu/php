<?php
  $ren = "";
  $array = [];

  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["names"])) {
    $array = explode(" ", $_POST["names"]);
    foreach($array as $name) {
      $ren .= $name. "<br>";
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    
    <h2>Toon ingevoerde namen onder elkaar</h2>
    <form action="" method="POST">
      <input name="names" placeholder="Namen">
      <input name="submit" type="submit" value="Toon namen">
    </form>
    <br>
    <?= $ren; ?>
  </body>
</html>