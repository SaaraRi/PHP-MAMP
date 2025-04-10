<?php

$offers = array(
  array("name" => "chocolate bar", "stock" => 100, "price" => 1.50),
  array("name" => "lollipop", "stock" => 255, "price" => 0.80),
  array("name" => "salmiakki", "stock" => 50, "price" => 2.50)
);


?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>
  <p>If you buy in stock, we offer the following discounted prices:</p>
  <ul>
    <li> <?php echo $offers[0]["name"] ?> for € <?php echo $offers[0]["price"] ?> </li>
    <li> <?php echo $offers[1]["name"] ?> for € <?php echo $offers[1]["price"] ?> </li>
    <li> <?php echo $offers[2]["name"] ?> for € <?php echo $offers[2]["price"] ?> </li>

</body>

</html>