<?php
echo "6.Write a PHP script to demonstrate the use of while, do-while and foreach loops. <br>";
echo "Name : Yaman Chaudhary <br>";
echo "Enrollment Number : 24082291006 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
$i = 1;
while ($i <= 3) {
    echo "While: $i<br>";
    $i++;
}

$j = 1;
do {
    echo "Do-While: $j<br>";
    $j++;
} while ($j <= 3);

$fruits = array("Apple","Banana","Mango");
foreach ($fruits as $f) {
    echo "Fruit: $f<br>";
}
?>