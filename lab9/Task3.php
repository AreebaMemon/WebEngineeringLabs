<?php
// Lab9 Task3 
// Task 3: Creating and Accessing Multidimensional Arrays
// Write a PHP script that defines a multidimensional array named $students
// containing information about students. Each student should have the following attributes: name, age, and grade.
// Populate the array with at least three students.
// Write code to access and print the information of each student in the array.

$students = [
    [
        "name" => "Areeba Memon",
        "age" => 21,
        "grade" => "B"
    ],
    [
        "name" => "Nadia",
        "age" => 17,
        "grade" => "A"
    ],
    [
        "name" => "Muskan",
        "age" => 38,
        "grade" => "A+"
    ]
];

// Accessing and printing student information
foreach ($students as $student) {
    echo "Name: " . $student["name"] . "<br>";
    echo "Age: " . $student["age"] . "<br>";
    echo "Grade: " . $student["grade"] . "<br><br>";
}
?>
