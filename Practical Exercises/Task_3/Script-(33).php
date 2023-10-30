<?php
// Script_33 Create a PHP script to check if a specific key exists in an associative array using the array_key_exists() function.

// Sample associative array
$myArray = array(
    "name" => "Monij",
    "age" => 20,
    "city" => "Rajkot",
    "country" => "India"
);

// Key to check for existence
$keyToCheck = "age";

if (array_key_exists($keyToCheck, $myArray)) {
    echo "Key '$keyToCheck' exists in the array.";
} else {
    echo "Key '$keyToCheck' does not exist in the array.";
}

?>