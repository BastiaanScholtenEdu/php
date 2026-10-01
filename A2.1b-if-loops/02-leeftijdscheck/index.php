<?php
  $todayStr = date('Y-m-d');
  $years = "";
  if (isset($_GET["date-select"]) && !empty($_GET["date-select"]) && $_GET["date-select"] !== $todayStr) {
    $selectedDateObj = date_create($_GET["date-select"]);
    $todayObj = date_create('today');

    $diff = date_diff($todayObj, $selectedDateObj, true);
    $years = $diff->format("%y");
  }
?>

<!DOCTYPE html>
<html>
  <body>
    <form action="" method="GET">
      <label for="date-id">Voer uw geboorte datum in</label><br>
      <input id="date-id" type="date" name="date-select" value="<?php echo $todayStr; ?>" ><br>
      <input type="submit">
    </form>
    <?php if (!empty($years)): ?>
      <?php echo "<p>U bent $years jaar oud.</p>"?>
    <?php endif; ?>
  </body>
</html>