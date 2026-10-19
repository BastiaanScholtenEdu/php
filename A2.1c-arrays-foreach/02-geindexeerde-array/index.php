<?php
  $ren = null;

  $programmeertalen = ["PHP", "C#", "HTML", "Javascript", "Java", "C++", "C"];
  array_push($programmeertalen, "Python", "Swift");

  sort($programmeertalen);
  foreach($programmeertalen as $value) {
    $ren .= $value. "<br>";
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    
    <h2>Sorteer en tel negen programmeertalen</h2>
    <?= $ren; ?>
  </body>
</html>