<?php include 'includes/header.php'; ?>

<?php
//Step 1: Fix the form
//Hints: How the data is collected using form?
//What attributes of the form that are necessary?
//After fixing this form, simply run it few times to check how this works
?>

<form action="collecting-form-data.php" method="post">
  <p>Name: <input type="text" name="name"></p>
  <p>Age: <input type="text" name="age"></p>
  <p>Email: <input type="text" name="email"></p>
  <p>Password: <input type="password" name="pwd"></p>
  <p>Bio: <textarea name="bio"></textarea></p>
  <p>Contact preference:
    <select name="preferences">
      <option value="email">Email</option>
      <option value="phone">Phone</option>
    </select>
  </p>
  <p>Rating:
    1 <input type="radio" name="rating" value="1">
    2 <input type="radio" name="rating" value="2">
    3 <input type="radio" name="rating" value="3"></p>
  <p><input type="checkbox" name="terms" value="true">
    I agree to the terms and conditions.</p>
  <p><input type="submit" value="Save"></p>
</form>

<pre><?php var_dump($_POST); ?></pre>

<?php include 'includes/footer.php'; ?>