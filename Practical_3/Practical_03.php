<?php
echo "3.Write a PHP script to demonstrate decision making in PHP using if–else and switch–case statements.<br>";
echo "Name : Yaman Chaudhary <br>";
echo "Enrollment Number : 24082291006 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";

$day = "Monday";

if ($day == "Monday") {
    echo "Today is Monday<br>";
} else {
    echo "Today is not Monday<br>";
}

switch ($day) {
    case "Monday":
        echo "Start of week";
        break;
    case "Friday":
        echo "End of week";
        break;
    default:
        echo "Mid week";
}
?>