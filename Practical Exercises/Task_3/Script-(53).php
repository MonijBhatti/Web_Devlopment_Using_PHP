<?php
// Script_53 Write a PHP script that removes duplicate values from an associative array using the array_unique() function.


$Fruits=array("Apple","Apple","Mango","mango","Mango","Watermallon","Banana");
$Uniquearray=array_unique($Fruits);

print_r($Uniquearray);

?>