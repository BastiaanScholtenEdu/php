<?php
  $backgroundColor = "white";
  if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["color"])) {
    $backgroundColor = $_GET["color"];
    switch ($backgroundColor) {
      case "aqua":
        $backgroundColor = "aqua";
        break;
      case "lime":
        $backgroundColor = "lime";
        break;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body style="background-color: <?= $backgroundColor ?>">
    <h2>Verander de achtergrondkleur met een formulier</h2>
    <form action="" method="GET">
      <select name="color">
        <option value="aqua">aqua</option>
        <option value="lime">lime</option>
      </select>
      <input name="submit" type="submit" value="Set">
    </form>
  </body>
</html>