<?php

declare(strict_types=1);

$result = "???";
$message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $temperature_radio = $_POST["temperature_radio"] ?? "";
    $speed_radio = $_POST["speed_radio"] ?? "";
    $mass_radio = $_POST["mass_radio"] ?? "";
    $conversion_type = $_POST["conversion_type"] ?? "";

    $unit1_temperature = $_POST["unit1_temperature"] ?? "";
    $unit2_temperature = $_POST["unit2_temperature"] ?? "";
    $unit1_speed = $_POST["unit1_speed"] ?? "";
    $unit2_speed = $_POST["unit2_speed"] ?? "";
    $unit1_mass = $_POST["unit1_mass"] ?? "";
    $unit2_mass = $_POST["unit2_mass"] ?? "";

    $number_input = $_POST["number_input"] ?? 0;


    switch ($conversion_type) {
        case "temperature_radio":
            if ($unit1_temperature == "°C (Celsius)" && $unit2_temperature == "°F (Fahrenheit)") {
                $result = $number_input * 1.8 + 32 . " " . $unit2_temperature;
            } elseif ($unit1_temperature == "°F (Fahrenheit)" && $unit2_temperature == "°C (Celsius)") {
                $result = ($number_input - 32) / 1.8 . " " . $unit2_temperature;
            } elseif ($unit1_temperature == "°C (Celsius)" && $unit2_temperature == "K (Kelvin)") {
                $result = $number_input + 273.15 . " " . $unit2_temperature;
            } elseif ($unit1_temperature == "K (Kelvin)" && $unit2_temperature == "°C (Celsius)") {
                $result = $number_input - 273.15 . " " . $unit2_temperature;
            } elseif ($unit1_temperature == "°F (Fahrenheit)" && $unit2_temperature == "K (Kelvin)") {
                $result = ($number_input + 459.67) / 1.8 . " " . $unit2_temperature;
            } elseif ($unit1_temperature == "K (Kelvin)" && $unit2_temperature == "°F (Fahrenheit)") {
                $result = $number_input * 1.8 - 459.67 . " " . $unit2_temperature;
            } elseif ($unit1_temperature == $unit2_temperature) {
                $result = $number_input . " " . $unit2_temperature;
            } else {
                $result = "Choose conversion units";
            }
            break;
        case "speed_radio":
            if ($unit1_speed == "km/h (kilometers per hour)" && $unit2_speed == "m/s (meters per second)") {
                $result = $number_input * 0.2777777778 . " " . $unit2_speed;
            } elseif ($unit1_speed == "m/s (meters per second" && $unit2_speed == "km/h (kilometers per hour)") {
                $result = $number_input * 3.6 . " " . $unit2_speed;
            } elseif ($unit1_speed == "km/h (kilometers per hour)" && $unit2_speed == "kn (knots)") {
                $result = $number_input * 0.5399568035 . " " . $unit2_speed;
            } elseif ($unit1_speed == "kn (knots)" && $unit2_speed == "km/h (kilometers per hour)") {
                $result = $number_input * 1.852 . " " . $unit2_speed;
            } elseif ($unit1_speed == "m/s (meters per second)" && $unit2_speed == "kn (knots)") {
                $result = $number_input * 1.9438444924 . " " . $unit2_speed;
            } elseif ($unit1_speed == "kn (knots)" && $unit2_speed == "m/s (meters per second)") {
                $result = $number_input * 0.5144444444 . " " . $unit2_speed;
            } elseif ($unit1_speed == $unit2_speed) {
                $result = $number_input . " " . $unit2_speed;
            } else {
                $result = "Choose conversion units";
            }
            break;
        case "mass_radio":
            if ($unit1_mass == "kg (kilograms)" && $unit2_mass == "g (grams)") {
                $result = $number_input * 1000 . " " . $unit2_mass;
            } elseif ($unit1_mass == "g (grams)" && $unit2_mass == "kg (kilograms)") {
                $result = $number_input / 1000 . " " . $unit2_mass;
            } elseif ($unit1_mass == $unit2_mass) {
                $result = $number_input . " " . $unit2_mass;
            } else {
                $result = "Choose conversion units";
            }
            break;
    }

    if (isset($_POST["reset"])) {
        $_POST = [];
        $result = "";
        $message = "";
    }
}
