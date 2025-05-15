<?php

declare(strict_types=1);

$result = " ";
$message = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $number_input1 = $_POST["number_input1"] ?? 0;
    $number_input2 = $_POST["number_input2"] ?? 0;
    $operation = $_POST["operation"] ?? " ";

    switch ($operation) {
        case "add":
            $result = $number_input1 + $number_input2;
            break;
        case "subtract":
            $result = $number_input1 - $number_input2;
            break;
        case "multiply":
            $result = $number_input1 * $number_input2;
            break;
        case "divide":
            if ($number_input2 == 0) {
                $message = "Numbers can't be divided by 0! &#9785;";
            } else {
                $result = $number_input1 / $number_input2;
            }
            break;
        default:
            $message = "Input numbers and pick an operation to get a result &#9786;";
    }

    if ($result !== 0) {
        $result = round($result, 9);
    }

    if (isset($_POST["reset"])) {
        $_POST = [];
        $result = "";
        $message = "";
    }
}
