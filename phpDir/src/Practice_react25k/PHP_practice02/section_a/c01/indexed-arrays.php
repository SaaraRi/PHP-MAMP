<?php

$best_sellers = array("Chocolate bars", "Lollipops", "Salmiakki", "Gummy bears", "Liquorice");

?>

<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>


  <h2>Top selling items of 2025</h2>
  <ol>
    <li> <?php echo $best_sellers[0] ?> </li>
    <li> <?php echo $best_sellers[1] ?> </li>
    <li> <?php echo $best_sellers[2] ?> </li>
  </ol>

</body>

</html>