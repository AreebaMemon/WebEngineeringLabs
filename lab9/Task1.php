
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Age Verification (Lab9 Task1)</title>
</head>
<body>

<!-- Task 1: Conditional Statements
 Write a PHP script that takes a variable $age as input.
 Use an if-elseif-else statement to check the value of $age:
 If $age is less than 18, print "You are a minor."
 If $age is between 18 and 65 (inclusive), print "You are an adult."
 If $age is greater than 65, print "You are a senior citizen."
 If $age is not a valid number, print "Invalid input."
 Test your script with different values of $age to verify its correctness.
 -->

<form method="post">
    <label>Enter Your Age:</label>
    <input type="number" name="age" required>
    <button type="submit">Check</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["age"]; 

    if ($age>=1 && $age <18) {
        echo "<p style='color: green;'>You are a minor</p>";
    } else if($age >=18 && $age <=65) {
        echo "<p style='color: orange;'>You are an adult</p>";
    }
    else if($age > 65 && $age <=100) {
        echo "<p style='color:purple;'>You are a senior citizen</p>";
    }else{
        echo "<p style='color:red;'>You are a senior citizen</p>";
    }
}
?>
</body>
</html>

