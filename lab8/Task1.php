<?php 
// Lab8 Task1
// 1.Write a PHP code for the following and print their outputs (where applicable) on the browser:
//     a.	To get the PHP version and configuration information.
//     b.	To get the name of the owner of the current PHP script, document root directory under which the current script is running and the operating system PHP is running on.
//     c.	To swap two variables and print their values before and after swapping.
//     d.	To redirect a user to a different web page (for example: http://sw.muet.edu.pk).
//     e.	To display the following strings:
//     Tomorrow I’ll learn something new. This is a bad command: del c:\*.*\$.
//     f.	To test whether a number is greater than 30, 20 or 10 usingternary operator and print the result.
//     g.	To return the following components of any url stored in a variable such as:
//     URL: http://sw.muet.edu.pk/faculty/cvs/samp le.pdf
//     Scheme: http
//     Host: www.sw.muet.edu.pk
//     Path: /faculty/cvs/sample.pdf
//     Hint: Use string functions to extract various components from the url
    
$a=phpversion();
echo "PHP Version: $a <br> <br>";

echo "Owner of the script: " . get_current_user() . "<br>";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo "Operating System: " . PHP_OS . "<br> <br>";

$b=67;
$c=34;

echo "Before Swapping: a=$b, b=$c <br>";
$b=$b+$c;
$c=$b-$c;
$b=$b-$c;
echo "After Swapping: a=$b, b=$c <br> <br>";

// $d=header("Location: http://sw.muet.edu.pk");
// exit();

echo "Tomorrow I'll learn something new  <br>";
echo "This is a bad command: del c:\*.*\\$. <br> <br> ";

$num=80;
$result = ($num > 30) ? "Greater than 30" :
         (($num > 20) ? "Greater than 20" :
         (($num > 10) ? "Greater than 10" : "10 or below"));
echo "$result . <br> <br>";

$url = "http://sw.muet.edu.pk/faculty/cvs/sample.pdf";
$parsed_url = parse_url($url);
echo "Scheme: " . $parsed_url['scheme'] . "<br>";
echo "Host: " . $parsed_url['host'] . "<br>";
echo "Path: " . $parsed_url['path'] . "<br>";
?>



