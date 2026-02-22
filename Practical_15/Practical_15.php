<?php
echo "15.Write a PHP script to demonstrate polymorphism using method overriding in PHP. <br>";
echo "Name : Yaman Chaudhary <br>";
echo "Enrollment Number : 24082291006 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
class Shape {
    function area() {
        echo "Calculating area<br>";
    }
}

class Circle extends Shape {
    function area() {
        echo "Area of Circle<br>";
    }
}

class Square extends Shape {
    function area() {
        echo "Area of Square<br>";
    }
}

$sh1 = new Circle();
$sh2 = new Square();

$sh1->area();
$sh2->area();
?>