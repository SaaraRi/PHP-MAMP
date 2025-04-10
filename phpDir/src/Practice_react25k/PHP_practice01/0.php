<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>

  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">
    <html>

    <head>
      <title>PHP Test</title>
    </head>

    <body>
      <?php
      /*
    Echo function to show string variable
    */

      $greeting = "Hello PHP";
      echo $greeting;
      ?>
    </body>

    </html>
  </article>
  <!--MAIN CONTENT-->

  <?php include "includes/footer.php"; ?>