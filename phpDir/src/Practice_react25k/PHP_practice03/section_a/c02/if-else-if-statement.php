<?php
/*
Create a simple if else if statement to check if candy is in the stock or is coming
soon or sold out. If candy is not in stock then print message “Sold Out”, if it is
available in stock, print message “In Stock”
*/

$candy_stock = 0;
$candy_ordered = true;

function checkStock(int $candy_stock, bool $candy_ordered)
{
  if ($candy_stock > 0) {
    echo "In Stock";
  } elseif ($candy_stock = 0 && $candy_ordered = true) {
    echo "Coming soon!";
  } else {
    echo "Sold Out";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>if else if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <?php

  checkStock($candy_stock, $candy_ordered);


  ?>
</body>

</html>