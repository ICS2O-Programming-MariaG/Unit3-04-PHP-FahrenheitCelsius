<!DOCTYPE html>
<html>
<?php
  $celsius = floatval($_POST['temp']);
  $fahrenheit = 9 / 5 * $celsius + 32;
  echo "The temperature in Fahrenheit is " . (int)$fahrenheit . " degrees Fahrenheit.";
?>
</html>
