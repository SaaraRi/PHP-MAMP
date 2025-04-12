<?php
/* Write PHP Code here

Step 1: Initialize two variables with empty strings

Step 2: Write custom fuction to check 
if any given value between 0 to 100 is a number

Step 3: Check if the form has been submitted. If it has,
     collect age from the $_POST superglobal array.
  The data comes from a text input, so a value will always be sent for it
  when the form is submitted.

Step 4: Call the custom function to check if the value user submitted falls between
range 16 and 65. You may store boolean value as return type in function to check if the number is valid. 

Step 5: Check if condition is valid, if it is you can display
    "Age is valid" else "You must be 16-65 years old"






    function is_number($number, int min= 0, int $max = 100): bool 
{
  return ($number >= $min and $number <= $max)
 }
    $valid=is_number($age, 16, 65);
  
?>
*/

$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $age = $_POST["age"] ?? "";

  if ($age >= 16 && $age <= 65) {
    $message = "Valid. You are $age years old, which is within the the age range (16 - 65 years).";
  } elseif ($age < 16 || $age > 65) {
    $message = "Error. You are $age years old. The accepted age range is 16 - 65 years.";
  } else {
    $message = "";
  }
}

?>

<?php include "includes/header.php"; ?>

<form method="post">
  <label for="age" style="display: block; margin: 2rem auto; text-align:center; font-size: 20pt;">Age:</label>
  <input type="number" name="age" style="display: block; margin: 2rem auto;" />
  <input type="submit" style="display: block; margin: 2rem auto;" name="submit" value="submit">
  <p> <?php echo $message; ?></p>


  <?php include 'includes/footer.php'; ?>