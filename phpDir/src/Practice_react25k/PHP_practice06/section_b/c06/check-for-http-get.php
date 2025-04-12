<?php include 'includes/header.php'; ?>

<?php
/* Write your PHP code here
Overall idea here is to instead of POST in prev. practice 
how would you do this with HTTP GET

Step 1: Use null-coalescing operator to check if $_GET superglobal array 
has a value for the key sent. If it does, you can store its value in some variable
If it does not, it should store a blank string. 

Step 2: Using if condition, you can check the value in variable is search. 
If it is, the form should be then sent via HTTP GET and the search term is displayed. 
  "You searched for ..."  (replace ... with term user searched for)

Step 3: Otherwise, simply display the form


<form action="" action="check-for-http-get.php" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
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

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $search = $_GET["search"] ?? "";
  $search_valid = test_input($search);
  $message = '<h2 style="font-size: 20pt;">You searched for: </h2><br>' . $search;
} else {
  $search = "";
  $message = "";
}

?>

<form action="check-for-http-post.php" method="get">
  <label for="search" style="font-size: 24pt; display: block; margin: 2rem 0 0 0; text-align:center;">Search</label>
  <input name="search" type="text" style="display: block; margin: 2rem auto; width: 250px;">
  <input type="submit" class="submit" style="display: block; margin: 0 auto 4rem auto;">
</form>

<div class="message" style="font-size: 18pt; margin-bottom: 2rem;">
  <?php echo $message ?>
</div>

<?php include 'includes/footer.php'; ?>