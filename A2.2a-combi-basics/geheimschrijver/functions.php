<?php
  function getResult(string $input, string $type) {
    if ($type === "Encrypt") {
      return encrypt($input);
    } elseif ($type === "Decrypt") {
      return decrypt($input);
    } else {
      return "Error";
      exit;
    }
  }
  function encrypt(string $input): array {
    $inputArray = mb_str_split($input);
    $step = "";
    $stepsArray = [];
    foreach($inputArray as $key => $character) {
      if(preg_match('/[a-z]/', $character)) {
        $base = ord('a');
        $offset = (ord($character) - $base + 1) % 26;
        $inputArray[$key] = chr($base + $offset);

        $step = "$character → " . chr($base + $offset);
        $stepsArray[] = $step;
      }
    }
    return [implode('', $inputArray), implode(', ', $stepsArray)];
  }

  function decrypt(string $input): array {
    $inputArray = mb_str_split($input);
    $step = "";
    $stepsArray = [];
    foreach($inputArray as $key => $character) {
      if(preg_match('/[a-z]/', $character)) {
        $base = ord('z');
        $offset = (ord($character) - $base - 1) % 26;
        $inputArray[$key] = chr($base + $offset);

        $step = "$character → " . chr($base + $offset);
        $stepsArray[] = $step;
      }
    }
    return [implode('', $inputArray), implode(', ', $stepsArray)];
  }
?>