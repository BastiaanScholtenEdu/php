<?php
  $ren ='';
  if (!empty($_POST)) {
    for ($i = 0; $i <= 90; $i += 10) {
      $ren .= $i. " ";
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    
    <h2>Tellen van 0-90 met stappen van 10</h2>
    <form action="" method="POST">
      <input name="submit" type="submit">
    </form>
    <?= $ren; ?>
  </body>
</html>
