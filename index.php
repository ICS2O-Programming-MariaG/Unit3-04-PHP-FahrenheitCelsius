<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Maria's Fahrenheit to Celsius Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="MariaG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Converting From Celsius to Fahrenheit - Maria Goemans</title>
  </head>
  <body>
    <!-- Div placed on left side of page -->
    <div id="left">
      <?php echo "<h1>Converting from Celsius to Fahrenheit</h1>"; ?>
    </div>
    <!-- Div placed on right side of page -->
    <br>
    <br>
    <div id="right">
      <?php
        echo "<p>Welcome! This web page will take your input in Celsius and convert it to degrees Fahrenheit.</p>";
        echo "<p>If you would rather convert from Fahrenheit to Celsius, press the button below:</p>";
        ?>
      <button onclick="window.location.href='https://bit.ly/3xET8zB';">Click here!</button>
    </div>
    <!-- Div for style (below other two divs) -->
    <div id="purple">
      <?php echo "<h3>Your Input:</h3>"; ?>
      <form action="./convert.php" method="post" target="result">
        <label for="celsius">Temperature in Celsius</label>
        <input type="number" step="0.01" name="temp" placeholder="Degrees Celsius..."><br><br>
        <input type="submit" value="Convert">
      </form>
    </div>
    <!-- Iframe for results -->
    <iframe id="result" name="result">
    </iframe>
  </body>
</html>