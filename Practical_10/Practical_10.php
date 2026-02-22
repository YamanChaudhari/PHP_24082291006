<?php
echo "10.Write a PHP script to create associative arrays and apply sorting functions such as asort()and ksort(). <br>";
echo "Name : Yaman Chaudhary <br>";
echo "Enrollment Number : 24082291006 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
$marks = array("OM"=>69, "Vyom"=>50, "Sumit"=>75);

asort($marks);
foreach ($marks as $name=>$mark) {
    echo "$name = $mark<br>";
}

ksort($marks);
echo "After ksort:<br>";
foreach ($marks as $name=>$mark) {
    echo "$name = $mark<br>";
}
?>