<?php
/*

Create a simple if else statement to check if candy is in stock or not. If candy is not
in stock, then print the message “Sold Out”; if it is available in stock, print the
message “In Stock.”

*/

$candy_stock = 6;
function checkStock($candy_stock)
{
  if ($candy_stock === 0) {
    echo "Sold Out";
  } else {
    echo "In Stock";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>if else Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <?php

  checkStock($candy_stock);

  ?>
</body>

</html>