<?php
echo "14.Write a PHP script to demonstrate multiple inheritance using traits. <br>";
echo "Name : Yaman Chaudhary <br>";
echo "Enrollment Number : 24082291006 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
trait A {
    function showA() {
        echo "This is a Trait A<br>";
    }
}

trait B {
    function showB() {
        echo "This is a Trait B<br>";
    }
}

class Test {
    use A, B;   
}

$t = new Test();
$t->showA();
$t->showB();
?>