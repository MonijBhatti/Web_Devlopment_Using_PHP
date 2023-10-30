<?php
// Script_43 Develop a PHP script to extract the keys from an associative array using the array_keys() function.

$student = array(
    "First_name" => "Monij",
    "Last_name" => "Bhatti",
    "Age" => 21,
);

$keys =array_keys($student);
echo "keys from an associative array";
print_r($keys);

?>