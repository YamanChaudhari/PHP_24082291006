<?php
echo "13.Write a PHP script to demonstrate inheritance and method overriding in PHP. <br>";
echo "Name : Yaman Chaudhary <br>";
echo "Enrollment Number : 24082291006 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
class Animal {
    function sound() {
        echo "Animal makes sound<br>";
    }
}

class Dog extends Animal {
    function sound() {
        echo "Dog barks<br>";   
    }
}

$d = new Dog();
$d->sound();
?>