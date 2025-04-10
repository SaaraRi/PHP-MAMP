<?php
/* 
Create a simple while loop to find prices for multiple packs of candy. For example, if one pack costs $1.99 how much would 5 pack costs? Display the prices for all 5
packs of candy.
*/

$candy_price = 1.99;
$counter = 1;
$total_price = $candy_price;

while ($counter <= 5) {
  $total_price += $candy_price;
  echo "Number of packs: $counter <br>; 
   
  <p>Total price: <?php $total_price ?>
  
  The price is: $total_price";
  $counter++;
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>Number of packs: <?php $counter ?></p>
  <p>Total price: <?php $total_price ?></p>
</body>

</html>