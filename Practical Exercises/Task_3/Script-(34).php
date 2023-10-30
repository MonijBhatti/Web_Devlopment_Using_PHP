<?php 
// Script_34 Develop a PHP script to check if a specific value exists in an array using the in_array() function.

// Sample array
$myArray = array("apple", "banana", "cherry", "date", "fig");

// Value to check for existence
$valueToCheck = "banana";

if (in_array($valueToCheck, $myArray)) {
    echo "Value '$valueToCheck' exists in the array.";
} else {
    echo "Value '$valueToCheck' does not exist in the array.";
}

?>