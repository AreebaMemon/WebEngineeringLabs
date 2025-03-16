<?php 
// If method is GET then use this
// $x=$_GET['num1'];
// $y=$_GET['num2'];
// $z=$_GET['char'];

$x=$_POST['num1'];
$y=$_POST['num2'];
$z=$_POST['char'];

echo "Number1 = ".$x."<br>";
echo "Number2 = ".$y."<br>";
echo "Symbol = ".$z."<br> <br>";

function factorial($a){
   if($a==0){
    return 1;
   }else{
    return($a * (factorial($a-1)));
   }  
}
echo "Factorial of Number1 = " . factorial($x);
echo "<br>";

function numberToWords($b) {
    $length = strval($b); // Convert number to string
    // Replace each digit with its word
    $b = str_replace(
        ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'], 
        ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'], 
        $length
    );
    return $b;
}
$a="Convert Number1 to Words = ";
echo $a.numberToWords($x); // Output: onetwothreefour
echo "<br>";

function overloading($a,$b,$symbol){
    if($symbol =="+"){
        echo "Addition " .$a+$b;
    }elseif($symbol == "-"){
        echo "Subtraction " .$a-$b;
    }
    elseif($symbol == "*"){
        echo "Multiplication " .$a*$b;
    }
    elseif($symbol == "/"){
        echo "Division " .$a/$b;
    }
    elseif($symbol == "%"){
        echo "Modulo " .$a%$b;
    }
    elseif($symbol == "**"){
        echo "Power " .$a**$b;
    }else{
        echo "Invalid Input";
    }
}

overloading($x,$y,$z);

?>
