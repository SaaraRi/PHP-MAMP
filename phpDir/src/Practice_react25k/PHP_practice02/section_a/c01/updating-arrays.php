<?php

$nutrition = array("fat" => 15, "sugar" => 20, "salt" => 1);

$nutrition["fat"] = 10;
$nutrition["fiber"] = 5;
$nutrition["protein"] = 5;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <ul>
    <li> fat <?php echo $nutrition["fat"] ?> % </li>
    <li> sugar <?php echo $nutrition["sugar"] ?> % </li>
    <li> salt <?php echo $nutrition["salt"] ?> % </li>
    <li> fiber <?php echo $nutrition["fiber"] ?> %</li>
    <li> protein <?php echo $nutrition["protein"] ?> %</li>
  </ul>

</body>

</html>