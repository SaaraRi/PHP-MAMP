<?php

$in_stock = 5;
$qty_wanted = 6;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>

  <?php

  if ($qty_wanted <= $in_stock) {
    echo "<p>In stock</p>";
  } else if ($qty_wanted > $in_stock) {
    echo "<p>Out of stock</p>";
  } else {
    echo "<p>Not available</p>";
  }
  ?>

  <?= $in_stock >= $qty_wanted ? "In stock" : "Out of stock"; ?>

</body>

</html>