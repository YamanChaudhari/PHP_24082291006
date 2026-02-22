<?php
echo "2.Write a PHP script to demonstrate the use of constants and arithmetic / logical operators in PHP.<br>";
echo "Name : Yaman Chaudhary <br>";
echo "Enrollment Number : 24082291006 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
define("PI", 3.14);

$a = 10;
$b = 5;

echo "PI = " . PI . "<br>";
echo "Addition = " . ($a + $b) . "<br>";
echo "Multiplication = " . ($a * $b) . "<br>";
echo "Logical AND = " . ($a > 5 && $b < 10);
?>