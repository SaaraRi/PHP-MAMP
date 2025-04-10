<?php
/*
Create a simple switch statement to get 20% off chocolates on Monday and 20%
off mints on Tuesday, and in all other cases, it should show “Buy three packs, get
one free.”
*/

$day = "Monday";

?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>

  <p>Today's offer:</p>
  <p>
    <?php
    switch ($day) {
      case "Monday":
        echo "All chocolates -20 %!";
        break;
      case "Tuesday":
        echo "Mint candies -20 %!";
        break;
      default:
        echo "Buy three packs, get one free!";
        break;
    }
    ?>
  </p>

</body>

</html>