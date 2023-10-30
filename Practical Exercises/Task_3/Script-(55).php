<?php
//  Script_55 Develop a PHP script that uses the array_key_first() and array_key_last() functions to retrieve the first and last keys of an array.
 
// Sample associative array
$myArray = array(
    "first_name" => "Monij",
    "last_name" => "Bhatti",
    "age" => 20,
    "city" => "India"
);

// Retrieve the first key
$firstKey = array_key_first($myArray);

// Retrieve the last key
$lastKey = array_key_last($myArray);

// Output the results
echo "The first key in the array is: $firstKey<br>";
echo "The last key in the array is: $lastKey";

?>