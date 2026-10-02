<?php
  $ren = "";
  if (!empty($_POST)) {
    for ($i = 1; $i <= 5; $i++) {
      $ren .= str_repeat('*', $i). "<br>";
    }
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    
    <h2>Een patroon van vijf regels met sterren</h2>
    <form action="" method="POST">
      <input name="submit" type="submit">
    </form><br>
    <?= $ren; ?>
  </body>
</html>