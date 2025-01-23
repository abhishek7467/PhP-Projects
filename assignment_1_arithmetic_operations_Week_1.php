<?php


echo 'Assignment 1: Create a PHP script that performs arithmetic operations on two numbers of different data types.
<br>Arithmetic operations: <br><br>
1. Sum <br>
2. Difference <br>
3. Product <br>
4. Quotient <br>
5. Modulus <br>
6. Exponentiation <br>';




echo "<br>";
echo "<br>";
echo "<br>";
echo "String should be NUMERIC VALUE. <br> e.g. '12'";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";





echo "Different Data Types -> Integer and String ";
echo "<br>";
echo "<br>";

$num1 = 5;
$num2 = '3';


echo "Type of $ num1 is ";
echo (var_dump($num1)) . " and value is  $num1";
echo "<br>";
echo "Type of $ num2 is ";
echo var_dump($num2) . " and value is  $num2";
echo "<br>";
echo "<br>";
echo "<br>";


echo "The Sum of $num1 and $num2 is " . ($num1 + $num2);
echo "<br>";

echo "The Difference of $num1 and $num2 is " . ($num1 - $num2);
echo "<br>";

echo "The Product of $num1 and $num2 is " . ($num1 * $num2);
echo "<br>";

if ($num2 != 0) {
    echo "The Quotient of $num1 and $num2 is " . ($num1 / $num2);
} else {
    echo "Invalid Input! $num1 cannot divide by 0.";
}
echo "<br>";

if ($num2 != 0) {
    echo "The Modulus of $num1 and $num2 is " . ($num1 % $num2);
} else {
    echo "Invalid Input! $num2 cannot find modulo.";
}

echo "<br>";

echo "The Exponentiation of $num1 and $num2 is " . ($num1 ** $num2);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";





echo "Different Data Types -> Integer and Float ";
echo "<br>";
echo "<br>";

$num1 = 11;
$num2 = 4.0;


echo "Type of $ num1 is ";
echo (var_dump($num1)) . " and value is  $num1";
echo "<br>";
echo "Type of $ num2 is ";
echo var_dump($num2) . " and value is  $num2";
echo "<br>";
echo "<br>";
echo "<br>";


echo "The Sum of $num1 and $num2 is " . ($num1 + $num2);
echo "<br>";

echo "The Difference of $num1 and $num2 is " . ($num1 - $num2);
echo "<br>";

echo "The Product of $num1 and $num2 is " . ($num1 * $num2);
echo "<br>";

if ($num2 != 0) {
    echo "The Quotient of $num1 and $num2 is " . ($num1 / $num2);
} else {
    echo "Invalid Input! $num1 cannot divide by 0.";
}
echo "<br>";

if ($num2 != 0) {
    echo "The Modulus of $num1 and $num2 is " . ($num1 % $num2);
} else {
    echo "Invalid Input! $num2 cannot find modulo.";
}
echo "<br>";
echo "The Exponentiation of $num1 and $num2 is " . ($num1 ** $num2);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";





echo "Different Data Types -> Float and String ";
echo "<br>";
echo "<br>";

$num1 = 51.6;
$num2 = '6.0';


echo "Type of $ num1 is ";
echo (var_dump($num1)) . " and value is  $num1";
echo "<br>";
echo "Type of $ num2 is ";
echo var_dump($num2) . " and value is  $num2";
echo "<br>";
echo "<br>";
echo "<br>";


echo "The Sum of $num1 and $num2 is " . ($num1 + $num2);
echo "<br>";

echo "The Difference of $num1 and $num2 is " . ($num1 - $num2);
echo "<br>";

echo "The Product of $num1 and $num2 is " . ($num1 * $num2);
echo "<br>";

if ($num2 != 0) {
    echo "The Quotient of $num1 and $num2 is " . ($num1 / $num2);
} else {
    echo "Invalid Input! $num1 cannot divide by 0.";
}
echo "<br>";

if ($num2 != 0) {
    echo "The Modulus of $num1 and $num2 is " . ($num1 % $num2);
} else {
    echo "Invalid Input! $num2 cannot find modulo.";
}
echo "<br>";

echo "The Exponentiation of $num1 and $num2 is " . ($num1 ** $num2);


?>