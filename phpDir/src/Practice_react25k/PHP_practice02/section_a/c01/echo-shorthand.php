<?php

$customers = array(
  array("name" => "Mike", "favorite" => "jelly beans"),
  array("name" => "Jane", "favorite" => "candy canes"),
  array("name" => "Paul", "favorite" => "marshmallows")
);

$user = "Saara";
$favorite_candy = "salmiakki";

?>

<!DOCTYPE html>
<html>

<head>
  <title>Echo Shorthand</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>

  <h2>Our customers recommend their favorite sweets! </h2>

  <p> <?= $user; ?> 's preference is <?= $favorite_candy; ?> </p>

  <p><?= $customers[0]["name"]; ?> 's preference is <?= $customers[0]["favorite"]; ?> </p>
  <p><?= $customers[1]["name"]; ?> 's preference is <?= $customers[1]["favorite"]; ?> </p>
  <p><?= $customers[2]["name"]; ?> 's preference is <?= $customers[2]["favorite"]; ?> </p>

</body>

</html>