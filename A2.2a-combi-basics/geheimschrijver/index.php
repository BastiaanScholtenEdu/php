<?php
  $ren = "";

  include './functions.php';
  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["textArea"])) {
    $input = $_POST["textArea"];
    [$output, $steps] = getResult($input, $_POST["submit"]);

    // Result
    $ren .= "
      <h3>Resultaat</h3>\n
      <p><b>Ingevoerde tekst: </b>". htmlspecialchars($input). "</p>
    ";

    if ($_POST["submit"] === "Encrypt") {
      $ren .= "
        <p><b>Versleutelde tekst: </b>". htmlspecialchars($output). "</p>\n
        <p><b>Veranderde karakters: </b>". htmlspecialchars($steps). "</p>
      ";
    } elseif ($_POST["submit"] === "Decrypt") {
      $ren .= "
        <p><b>Onversleutelde tekst: </b>". htmlspecialchars($output). "</p>\n
        <p><b>Veranderde karakters: </b>". htmlspecialchars($steps). "</p>
      ";
    }

    // Explanation
    $ren .= "
      <h3>Hoe werkt het?</h3>\n
      <p>Elke kleine letter word het volgende letter in het alfabet<p>\n
      <p>Alle hoofdletters, cijfers, of speciale tekens blijven gelijk</p>
    ";

  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    
    <h2>Maak een geheimschrijver in PHP</h2>
    <form action="" method="POST">
    <textarea name="textArea" rows="4" cols="50"></textarea><br>
    <input type="submit" name="submit" value="Encrypt"></input>
    <input type="submit" name="submit" value="Decrypt"></input>
    </form>
    <?= $ren; ?>
  </body>
</html>