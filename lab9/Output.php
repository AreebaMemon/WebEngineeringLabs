<?php
session_start();
if (!isset($_SESSION['randomNumber'])) {
    $_SESSION['randomNumber'] = rand(1, 100);
    $_SESSION['attempts'] = 0;
}

echo "<p>Random Number (for debugging): " . $_SESSION['randomNumber'] . "</p>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guess = $_POST['guess'];
    $_SESSION['attempts']++;
    
    echo "<p>Your Guess: " . $guess . "</p>";

    if (!is_numeric($guess) || $guess < 1 || $guess > 100) {
        echo "<p>Invalid input. Please enter a number between 1 and 100.</p>";
    } elseif ($guess == $_SESSION['randomNumber']) {
        echo "<p>Congratulations! You guessed the number in " . $_SESSION['attempts'] . " attempts.</p>";
        session_destroy();    
    } elseif ($guess > $_SESSION['randomNumber']) {
        echo "<p>Too high! Try again.</p>";
    } else {
        echo "<p>Too low! Try again.</p>";
    }
}
?>
