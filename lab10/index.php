<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab10 (Task1PartA)</title>
</head>
<body>

<!-- Part A: Write PHP code to implement various functions according to the requirements given below:
1.	Take a number as parameter and returns its factorial.
2.	Create arithmetic functions with two and three variables as arguments using function overloading that
returns addition, subtraction, multiplication and division of two or three numbers supplied as arguments.
3.	Create a function that takes any number as input (with multipledigits) and converts them into words. 
Forexample:Number: 534678
Output: fivethreefoursixseveneight-->

<form action="supermethods.php" method="post">
    <label for="num1">Enter Number 1:</label> <br>  
    <input type="number" name="num1" id="num1"> <br> <br>
    <label for="num2">Enter Number 2:</label> <br>  
    <input type="number" name="num2" id="num2"> <br> <br>
    <label for="char">Enter Symbol:(+ - * / % **)</label> <br>  
    <input type="text" name="char" id="char"> <br> <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
