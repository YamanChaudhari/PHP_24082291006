<?php
echo "4.Write a PHP script using switch-case to implement a simple menu-driven or calculator system. <br>";
echo "Name : Yaman Chaudhary <br>";
echo "Enrollment Number : 24082291006 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
$a = 100;
$b = 69;
$op = "+";

switch ($op) {
    case "+":
        echo "Result = " . ($a + $b);
        break;
    case "-":
        echo "Result = " . ($a - $b);
        break;
    case "*":
        echo "Result = " . ($a * $b);
        break;
    case "/":
        echo "Result = " . ($a / $b);
        break;
    default:
        echo "Invalid operator";
}
?>