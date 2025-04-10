<?php

$candy1_type = "chocolate bar";
$candy1_price = 2;

$candy1_type = "box of chocolate bars";
$candy1_price = 20;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Variables</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>

  <p>The full package is a <?php echo $candy1_type ?>, which costs € <?php echo $candy1_price ?> .</p>
</body>

</html>