<?php

echo "Assignment 2: Create a program that simulates a basic calculator.";
echo "<br>";
echo "<br>";
echo "<br>";

echo 'Select option for operations : 
    <br>
1 :  Sum <br>
2 :  Difference <br>
3 :  Product <br>
4 :  Quotient <br>
5 :  Modulus <br>
6 :  Exponentiation <br>
If you select any other option except above options you can not perform any operation.';
echo "<br>";
echo "<br>";
echo "<br>";

$num1 = 45;
$num2 = 0;
$res = 0;


$ch = 4;

switch ($ch) {

    case 1:
        $res = $num1 + $num2;
        echo "$num1 + $num2 = " . $res;
        break;

    case 2:
        $res = $num1 - $num2;
        echo "$num1 - $num2 = " . $res;
        break;

    case 3:
        $res = $num1 * $num2;
        echo "$num1 * $num2 = " . $res;
        break;

    case 4:
        if ($num2 != 0) {
            $res = $num1 / $num2;
            echo "$num1 / $num2 = " . $res;
        } else {
            echo "Invalid Input! $num1 cannot divide by 0.";
        }
        break;

    case 5:
        if ($num2 != 0) {
            $res = $num1 % $num2;
            echo "$num1 % $num2 = " . $res;
        } else {
            echo "Invalid Input! cannot find modulus 0 due to 0 Division";
        }
        break;

    case 6:
        $res = $num1 ** $num2;
        echo "$num1 ** $num2 = " . $res;
        break;

    default:
        echo "Invalid Input!";

}


?>