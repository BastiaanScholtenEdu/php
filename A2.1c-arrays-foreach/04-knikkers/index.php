<?php
  $ren = "";
  $amount = null; 

  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["amount"])) {
    $amount = $_POST["amount"];

    if ($amount < 0 || $amount > 10) {
      $ren = "Je hebt maar 10 knikkers.";
    } else {
      $remaining = 10 - $amount;
      $ren = "Je hebt nog $remaining knikkers over."; 
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    
    <h2>Bereken hoeveel knikkers in de zak overblijven</h2>
    <p>Er zijn 10 knikkers in de zak.</p>
    <form action="" method="POST">
      <input name="amount" placeholder="Aantal knikkers" type="number" min="0" max="10" style="width: 110px;">
      <input name="submit" type="submit" value="Gooi knikkers">
    </form>
    <br>
    <p><?= $ren; ?></p>
  </body>
</html>