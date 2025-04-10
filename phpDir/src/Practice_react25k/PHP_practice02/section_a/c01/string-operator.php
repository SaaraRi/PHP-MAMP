<?php

$customer_name = "Mike Mulligan";
$order_confirmed = $customer_name . "'s order has been received. Details will be sent by e-mail, so you can track your shipping.";
$order_thankyou = "Thank you for shopping at The Candy Store," . " ";


?>
<!DOCTYPE html>
<html>

<head>
  <title>String Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>

  <h2>Order Confirmation</h2>
  <br>
  <p><?= $order_confirmed; ?> </p>
  <br><br>
  <p><?= $order_thankyou .= $customer_name; ?>!</p>
</body>

</html>