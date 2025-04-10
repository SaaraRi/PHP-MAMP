<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>

  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <form action="6.php" method="post">
      Name: <input type="text" name="name" /><br />
      E-mail: <input type="text" name="email" /><br />
      <input type="submit" />
    </form>

    <body>
      Welcome <?php echo $_POST["name"]; ?><br>
      Your email address is: <?php echo $_POST["email"]; ?>
    </body>

  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>