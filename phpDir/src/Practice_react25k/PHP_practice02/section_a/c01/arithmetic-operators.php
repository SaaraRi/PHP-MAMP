<?php

$shopping_cart = array(
  array("item" => "chocolate bar", "price" => 5),
  array("item" => "gummy bears", "price" => 5),
  array("item" => "lollipop", "price" => 5)
);

$subtotal = $shopping_cart[0]["price"] + $shopping_cart[1]["price"] + $shopping_cart[2]["price"];
$tax = $subtotal * 0.2;
$total = $subtotal + $tax;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>

  <p><?= $shopping_cart[0]["item"]; ?>: € <?= $shopping_cart[0]["price"]; ?></p>
  <p><?= $shopping_cart[1]["item"]; ?>: € <?= $shopping_cart[1]["price"]; ?></p>
  <p><?= $shopping_cart[2]["item"]; ?>: € <?= $shopping_cart[2]["price"]; ?></p>
  <br>

  <p>Subtotal: € <?= $subtotal ?></p>
  <p>Tax: € <?= $tax ?></p>
  <p>Total: € <?= $total ?></p>

</body>

</html>