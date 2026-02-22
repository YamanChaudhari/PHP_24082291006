<?php
echo "11.Write a PHP script to demonstrate the concept of class and object in PHP.<br>";
echo "Name : Yaman Chaudhary <br>";
echo "Enrollment Number : 24082291006 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
class Student {
    public $name;
    public $age;

    function setData($n, $a) {
        $this->name = $n;
        $this->age = $a;
    }

    function display() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}

$st1 = new Student();
$st1->setData("Vyom", 19);
$st1->display();
?>