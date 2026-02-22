<?php
echo "16.Write a PHP script to demonstrate encapsulation using private data members and public getter and setter methods. <br>";
echo "Name : Yaman Chaudhary <br>";
echo "Enrollment Number : 24082291006 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";

class Student {
    private $name;   // Private variable

    // Setter method
    public function setName($n) {
        $this->name = $n;
    }

    // Getter method
    public function getName() {
        return $this->name;
    }
}

$s = new Student();

$s->setName("vrishik");
echo "Name: " . $s->getName();
?>