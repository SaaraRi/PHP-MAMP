<?php
/*
Create a simple if statement to greet user if the name is not empty.
*/

$name = "Saara";

function welcomeMessage($name)
{
  if ($name !== "") {
    echo "Welcome to the Candy Store, $name!";
  } else {
    echo "Please log in.";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<h1>The Candy Store</h1>
<?php

welcomeMessage($name);

?>
</body>

</html>