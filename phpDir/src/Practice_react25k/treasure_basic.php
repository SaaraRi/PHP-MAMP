<?php
// Variables
$treasureLocation = "Beach";
$attemptsLeft = 3;
$isTreasureFound = false;

// Arrays
$clues = ["The treasure is hidden by a body of water.", "The place is sandy and sunny.", "You can spot ships in the horizon!", "You can hear the sound of waves."];
$locations = [
    "Beach" => true,
    "Forest" => false,
    "Cave" => false,
    "Mountain" => false
];

// Start game
echo "Welcome to the PHP Treasure Hunt!\n";
echo "You have $attemptsLeft attempts to find the treasure.\n";

// Get user input 
if (isset($_GET['guess'])) {
    $userGuess = $_GET['guess'];

    // Comparison and logical operators
    if ($userGuess === $treasureLocation && $attemptsLeft > 0) {
        $isTreasureFound = true;
        echo "Congratulations! You found the treasure in the $treasureLocation!\n";
    } else {
        $attemptsLeft--;
        echo "Wrong guess! Clue: " . $clues[array_rand($clues)] . "\n";
        echo "Attempts left: $attemptsLeft\n";
    }
}

// Simple HTML form for input
if (!$isTreasureFound && $attemptsLeft > 0) {
?>
    <form method="GET">
        <label>Guess the location (Beach, Forest, Cave, Mountain): </label>
        <input type="text" name="guess">
        <input type="submit" value="Submit">
    </form>
<?php
} elseif ($attemptsLeft <= 0) {
    echo "Game Over! The treasure was in the $treasureLocation.";
}
?>