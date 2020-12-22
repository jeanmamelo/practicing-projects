<?php
include_once "class_lib.php";

$stefan = new person("Stefan Mischook");
$jimmy  = new person("Nick Waddles");
$james  = new employee("Johnny Fingers");

echo "Stefan's fullname is: " . $stefan->getName();
echo "<br>Nick's fullname is: " . $jimmy->getName();
echo "<br>--> " . $james->getName();

/**
 * Since $pinNumber was declared private,
 * this line of code will generate an error.
 * Try it out!
 */
echo "<br>Tell me private stuff: " . $stefan->getPinNumber();