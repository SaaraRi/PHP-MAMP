<?php

declare(strict_types=1);

function addNumbers(int $a, int $b)
{
    return $a + $b;
}
echo addNumbers(5, "5 days");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Treasure Hunt</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <?php
        include 'calculator.php'; // Include PHP logic
        echo $message; // Display dynamic message
        ?>
        <form method="GET">
            <input type="submit" value=1>
            <input type="submit" value=2>
            <input type="submit" value=3>
            <input type="submit" value=4>
            <input type="submit" value=5>
            <input type="submit" value=6>
            <input type="submit" value=7>
            <input type="submit" value=8>
            <input type="submit" value=9>
            <input type="submit" value=0>
            <input type="submit" value=+>
            <input type="submit" value=->
            <input type="submit" value=*>
            <input type="submit" value=>

            <button type="">C</button>
            <button type="">=</button>
            <button type="">+</button>
            <button type="">-</button>
            <button type="">*</button>
            <button type="">/</button>

            <input type="text">
        </form>

        <div class="result" style="background-color: <?php echo $resultColor; ?>;"></div>
        <p><?php echo $message ?? "Choose two colors!"; ?></p>

        <?php if ($showForm): ?>
            <form method="GET">
                <label>Guess the location (Beach, Forest, Cave):</label><br>
                <input type="text" name="guess" placeholder="Enter your guess">
                <input type="submit" value="Search for Treasure">
            </form>
        <?php endif; ?>
    </div>
</body>

</html>


<input type="button" onclick="alert('Hello World!')" value="Click Me!">

<input type="number" id="quantity" name="quantity" min="1" max="1" value="1">

$a = (float) $a;
$a = (int) $a;




/* <?php include 'calculator.php'; ?>



if (isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['operation'])) {


if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"]) || empty($_POST["name"]) || empty($_POST["operation"]) ) {

<option value="default" default>Choose operation &#11015;</option>




if ($operation === "add") {
echo $result = $number_input1 + $number_input2;
} elseif ($operation === "subtract") {
echo $result = $number_input1 - $number_input2;
} elseif ($operation === "multiply") {
echo $result = $number_input1 * $number_input2;
} elseif ($operation === "divide" && $number_input2 == 0) {
echo $message = "Numbers can't be divided with 0! &#9785;";
} elseif ($operation === "divide") {
echo $result = $number_input1 / $number_input2;
} elseif ($operation == "default") {
echo $message = "Input numbers and pick an operation to get a result! &#9786;";
} else {
echo $message = "Input numbers and pick an operation to get a result! &#9786;";
}
} else {
echo $message = "Input numbers and pick an operation to get a result! &#9786;";
}

<option name="operation" <?php if (isset($operation) && $operation == "add") echo "selected"; ?> value="add">+</option>


<option value="add" <?php $_POST["operation"] == "add" ? 'selected="selected"' : " " ?>>+</option>


<option value="subtract">-</option>
<option value="multiply">*</option>
<option value="divide">/</option>




if (isset($_POST["reset"])) {
$number_input1 = " ";
$number_input2 = " ";
$operation = " ";
$result = " ";
$message = " ";
}


} elseif ($reset) {
$number_input1 = " ";
$number_input2 = " ";
$operation = " ";
$result = " ";
$message = " ";






<?php

declare(strict_types=1);


$result = " ";
$message = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $number_input1 = $_POST["number_input1"] ?? " ";
    $number_input2 = $_POST["number_input2"] ?? " ";
    $operation = $_POST["operation"] ?? " ";





    if ($operation === "add") {
        $result = $number_input1 + $number_input2;
    } elseif ($operation === "subtract") {
        $result = $number_input1 - $number_input2;
    } elseif ($operation === "multiply") {
        $result = $number_input1 * $number_input2;
    } elseif ($operation === "divide" && $number_input2 == 0) {
        $message = "Numbers can't be divided with 0! &#9785;";
    } elseif ($operation === "divide") {
        $result = $number_input1 / $number_input2;
    } else {
        $message = "Input numbers and pick an operation to get a result! &#9786;";
    }
}

background-color: rgb(42, 189, 218);



<?php include "calculator.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Treasure Hunt</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Boldonse&family=Bungee+Spice&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Nabla&family=Pixelify+Sans:wght@400..700&family=Press+Start+2P&family=Quicksand:wght@300..700&family=Rubik+80s+Fade&family=Silkscreen:wght@400;700&family=Sixtyfour&family=Sixtyfour+Convergence&family=Tilt+Warp&family=Tourney:ital,wght@0,100..900;1,100..900&family=VT323&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <h1>Calculate!</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <label for="number_input1">Give a number!</label>
            <input id="number_input1" name="number_input1" type="number" class="number-input" step="any" value="<?php if (isset($_POST["number_input1"])) echo $_POST["number_input1"]; ?>" required placeholder=123>
            <select name="operation" id="operation" <?php $operation = $_POST["operation"] ?? " "; ?>>
                <option value="default" default>Choose operation &#11015;</option>
                <option <?php if (isset($operation) && $operation == "add") echo "selected"; ?> value="add">+</option>
                <option <?php if (isset($operation) && $operation == "subtract") echo "selected"; ?> value="subtract">-</option>
                <option <?php if (isset($operation) && $operation == "multiply") echo "selected"; ?> value="multiply">*</option>
                <option <?php if (isset($operation) && $operation == "divide") echo "selected"; ?> value="divide">/</option>
            </select>
            <label for="number_input2">Give another number!</label>
            <input id="number_input2" name="number_input2" type="number" class="number-input" step="any" value="<?php if (isset($_POST["number_input2"])) echo $_POST["number_input2"]; ?>" required>
            <input type="submit" class="equals-btn" value="=">
            <div class="result-box">
                <p id="result" class="number-input"> <?php echo $result ?? " "; ?></p>
                <p id="message"> <?php echo $message ?? " "; ?></p>
            </div>
            <input type="submit" name="reset" value="RESET">
        </form>
    </div>
</body>

</html>