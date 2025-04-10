<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php

		/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP */

		$number = 3;

		if ($number < 3) {
			echo "Number is less than 3";
		} elseif ($number > 3) {
			echo "Number is greater than 3";
		} else {
			echo "I love PHP" . "<br>";
		};

		/*	Step 2: Make a for loop that displays 10 numbers */

		for ($number2 = 1; $number2 < 11; ++$number2) {
			echo $number2 . "<br>";
		}


		/* Step 3: Make a switch Statement that test against one condition with 5 cases

 */


		?>






	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>