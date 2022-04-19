
<?php
  $celsius = floatval($_POST['temp']);
  $fahrenheit = 9 / 5 * $celsius + 32;
  echo "The temperature in Fahrenheit is " . number_format($fahrenheit, 2) . " degrees Fahrenheit.";
?>
