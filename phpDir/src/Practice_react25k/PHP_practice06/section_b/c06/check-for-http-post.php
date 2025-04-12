<?php include 'includes/header.php'; ?>

<?php
/* Write PHP Code here  
Overall idea here is to check if a form has been submitted


Step 1: Use if statement to check $_SERVER superglobal array to see if the key called
REQUEST_METHOD has a value of POST

Step 2: If it does, the search form has to be sent via HTTP POST, 
and a message should be displayed like this:
  "You searched for ..."  (replace ... with term user searched for)

Step 3: Otherwise, simply display the form



*/

$search = "";
$message = "";


function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $search = $_POST["search"] ?? "";
  $search_valid = test_input($_POST["search"]);
  $message = '<h2 style="font-size: 20pt;">You searched for: </h2><br>' . $search;
} else {
  $search = "";
  $message = "";
}

?>

<form action="check-for-http-post.php" method="post">
  <label for="search" style="font-size: 24pt; display: block; margin: 2rem 0 0 0; text-align:center;">Search</label>
  <input name="search" type="text" style="display: block; margin: 2rem auto; width: 250px;">
  <input type="submit" class="submit" style="display: block; margin: 0 auto 4rem auto;">
</form>

<div class="message" style="font-size: 18pt; margin-bottom: 2rem;">
  <?php echo $message ?>
</div>

<?php include 'includes/footer.php'; ?>