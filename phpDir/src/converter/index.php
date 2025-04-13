<?php include "converter.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Converter</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Grandiflora+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gloock&family=Grandiflora+One&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Kalnia:wght@100..700&family=Oranienbaum&family=Prata&family=Rozha+One&family=Scope+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Belanosima:wght@400;600;700&family=Cutive&family=Gruppo&family=Hepta+Slab:wght@1..900&family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Krona+One&family=League+Spartan:wght@100..900&family=Stint+Ultra+Expanded&family=Sulphur+Point:wght@300;400;700&display=swap" rel="stylesheet">

    <script>
        function toggleSections() {
            const conversionType = document.querySelector('input[name="conversion_type"]:checked').value;

            document.querySelector('.temperature').style.display = 'none';
            document.querySelector('.speed').style.display = 'none';
            document.querySelector('.mass').style.display = 'none';

            if (conversionType === 'temperature_radio') {
                document.querySelector('.temperature').style.display = 'block';
            } else if (conversionType === 'speed_radio') {
                document.querySelector('.speed').style.display = 'block';
            } else if (conversionType === 'mass_radio') {
                document.querySelector('.mass').style.display = 'block';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            toggleSections();
            document.querySelectorAll('input[name="conversion_type"]').forEach(function(radio) {
                radio.addEventListener('change', toggleSections);
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <h1>Measurement Converter</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div id="conversion_type">
                <h2 id="h2-1">What do you want to convert?</h2><br>
                <input type="radio" value="temperature_radio" id="temperature_radio" name="conversion_type" class="conversion_type" <?php if (isset($conversion_type) && $conversion_type == "temperature_radio") echo "checked"; ?> checked>
                <label for="temperature_radio">Temperature</label><br>
                <input type="radio" value="speed_radio" id="speed_radio" name="conversion_type" class="conversion_type"
                    <?php if (isset($conversion_type) && $conversion_type == "speed_radio") echo "checked"; ?>>
                <label for="speed_radio">Speed</label><br>
                <input type="radio" value="mass_radio" id="mass_radio" name="conversion_type" class="conversion_type"
                    <?php if (isset($conversion_type) && $conversion_type == "mass_radio") echo "checked"; ?>>
                <label for="mass_radio">Mass</label><br>
            </div>
            <img src="./8c1961028be627668eb7bdf0e00b2538.png" id="scale-img" alt="balanced scale">
            <h2 id="h2-2">Choose measurement units:</h2>
            <div class="temperature" style="display: <?php echo ($conversion_type == 'temperature_radio') ? 'block' : 'none'; ?>;">
                <select class="unit1" name="unit1_temperature" id="unit1_temperature" <?php $unit1_temperature = $_POST["unit1_temperature"] ?? ""; ?> required>
                    <option value="" default>Choose unit</option>
                    <option value="°C (Celsius)" <?php if (isset($unit1_temperature) && $unit1_temperature == "°C (Celsius)") echo "selected"; ?>>°C (Celsius)</option>
                    <option value="°F (Fahrenheit)" <?php if (isset($unit1_temperature) && $unit1_temperature == "°F (Fahrenheit)") echo "selected"; ?>>°F (Fahrenheit)</option>
                    <option value="K (Kelvin)" <?php if (isset($unit1_temperature) && $unit1_temperature == "K (Kelvin)") echo "selected"; ?>>K (Kelvin)</option>
                </select>
                <p class="into">into</p>
                <select class="unit2" name="unit2_temperature" id="unit2_temperature" <?php $unit2_temperature = $_POST["unit2_temperature"] ?? ""; ?> required>
                    <option value="" default>Choose unit</option>
                    <option value="°C (Celsius)" <?php if (isset($unit2_temperature) && $unit2_temperature == "°C (Celsius)") echo "selected"; ?>>°C (Celsius)</option>
                    <option value="°F (Fahrenheit)" <?php if (isset($unit2_temperature) && $unit2_temperature == "°F (Fahrenheit)") echo "selected"; ?>>°F (Fahrenheit)</option>
                    <option value="K (Kelvin)" <?php if (isset($unit2_temperature) && $unit2_temperature == "K (Kelvin)") echo "selected"; ?>>K (Kelvin)</option>
                </select>
            </div>
            <div class="speed" style="display: <?php echo ($conversion_type == 'speed_radio') ? 'block' : 'none'; ?>;">
                <select class="unit1" name="unit1_speed" id="unit1_speed" <?php $unit1_speed = $_POST["unit1_speed"] ?? ""; ?> required>
                    <option value="default" default>Choose unit</option>
                    <option value="km/h (kilometers per hour)" <?php if (isset($unit1_speed) && $unit1_speed == "km/h (kilometers per hour)") echo "selected"; ?>>km/h (kilometers per hour)</option>
                    <option value="m/s (meters per second)" <?php if (isset($unit1_speed) && $unit1_speed == "m/s (meters per second") echo "selected"; ?>>m/s (meters per second)</option>
                    <option value="kn (knots)" <?php if (isset($unit1_speed) && $unit1_speed == "kn (knots)") echo "selected"; ?>>kn (knots)</option>
                </select>
                <p class="into">into</p>
                <select class="unit2" name="unit2_speed" id="unit2_speed" <?php $unit2_speed = $_POST["unit2_speed"] ?? ""; ?> required>
                    <option value="default" default>Choose unit</option>
                    <option value="km/h (kilometers per hour)" <?php if (isset($unit2_speed) && $unit2_speed == "km/h (kilometers per hour)") echo "selected"; ?>>km/h (kilometers per hour)</option>
                    <option value="m/s (meters per second)" <?php if (isset($unit2_speed) && $unit2_speed == "m/s (meters per second") echo "selected"; ?>>m/s (meters per second)</option>
                    <option value="kn (knots)" <?php if (isset($unit2_speed) && $unit2_speed == "kn (knots)") echo "selected"; ?>>kn (knots)</option>
                </select>
            </div>
            <div class="mass" style="display: <?php echo ($conversion_type == 'mass_radio') ? 'block' : 'none'; ?>;">
                <select class="unit1" name="unit1_mass" id="unit1_mass" <?php $unit1_mass = $_POST["unit1_mass"] ?? ""; ?> required>
                    <option value="default" default>Choose unit</option>
                    <option value="g (grams)" <?php if (isset($unit1_mass) && $unit1_mass == "g (grams)") echo "selected"; ?>>g (grams)</option>
                    <option value="kg (kilograms)" <?php if (isset($unit1_mass) && $unit1_mass == "kg (kilograms)") echo "selected"; ?>>kg (kilograms)</option>
                </select>
                <p class="into">into</p>
                <select class="unit2" name="unit2_mass" id="unit2_mass" <?php $unit2_mass = $_POST["unit2_mass"] ?? ""; ?> required>
                    <option value="default" default>Choose unit</option>
                    <option value="g (grams)" <?php if (isset($unit2_mass) && $unit2_mass == "g (grams)") echo "selected"; ?>>g (grams)</option>
                    <option value="kg (kilograms)" <?php if (isset($unit2_mass) && $unit2_mass == "kg (kilograms)") echo "selected"; ?>>kg (kilograms)</option>
                </select>
            </div>
            <h2 id="h2-3">Insert number value:</h2>
            <input id="number_input" name="number_input" type="number" class="number_input" step="any" value="<?php if (isset($_POST["number_input"])) echo $_POST["number_input"]; ?>" placeholder="123" required>
            <input type="submit" class="btn" id="convert" value="Convert">
            <input type="submit" class="btn" id="reset" name="reset" value="Reset">
            <div class="result">
                <p id="result"> <?php echo $result; ?></p>
                <p id="message"> <?php echo $message ?? " "; ?></p>
            </div>
        </form>
    </div>
</body>

</html>