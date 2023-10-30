<?php
// 14. Remove the email element from the associative array and display the updated array.

$person = [
    "name" => "Jeet",
    "age" => 20,
    "email" => "jeet@gmail.com"
];

unset($person["email"]);
print_r($person);


?>