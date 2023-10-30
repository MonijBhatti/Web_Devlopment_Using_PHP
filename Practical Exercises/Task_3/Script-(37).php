<?php
// Script_37 Develop a PHP script that uses the array_push() function to add elements to an array and the array_pop() function to remove elements from the end.

$myArray = [1, 2, 3, 4, 5];

$lastElement = array_pop($myArray);

echo "Removed element is : " . $lastElement . "\n";

print_r($myArray);

?>