<?php

$candy1_type = "chocolate bar";
$candy1_price = 2;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Variables</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Welcome!</h2>
  <p>Our most sold item is the <?php echo $candy1_type ?>, which costs € <?php echo $candy1_price ?> .</p>

  <?php
  $candy1_type = "box of chocolate bars";
  $candy1_price = 20;
  ?>

  <p>The full package is a <?php echo $candy1_type ?>, which costs € <?php echo $candy1_price ?> .</p>
  <br>

</body>

</html>