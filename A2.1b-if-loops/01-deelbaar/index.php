<?php
  if ($_SERVER["REQUEST_METHOD"] === "GET" & isset($_GET["numerator"], $_GET["denominator"])) {
    $numerator = $_GET["numerator"];
    $denominator = $_GET["denominator"];
    $result = $numerator % $denominator;
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
      <input type="number" name="denominator" placeholder="Denominator"><br>
      <input type="submit"><br>
    </form>
    <?php echo $result; ?>
  </body>
</html>