
<!DOCTYPE html>
<html>
<head>
    <title>Guess the Number (Lab9 Task2)</title>
</head>
<body>
    
    <!-- Task 2: Loops
    Write a PHP script that generates a random number between 1 and 100.
    Use a while loop to allow the user to guess the number.
    Inside the loop, use conditional statements to provide feedback to the user:
    If the guess is correct, print "Congratulations! You guessed the number!" and exit the loop.
    If the guess is too high, print "Too high! Try again."
    If the guess is too low, print "Too low! Try again."
    Keep track of the number of attempts the user makes.
    After the user guesses the number correctly, print the number of attempts it took them to guess the correct number.-->

    <form method="post" action="Output.php">
        <label>Guess the number (between 1 and 100): </label>
        <input type="number" name="guess" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
