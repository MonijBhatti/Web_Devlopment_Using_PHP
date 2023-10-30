<?php
// Script_41 Write a PHP script that finds the intersection of two arrays using the array_intersect() function.

$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];
$intersection = array_intersect($array1, $array2);

echo "Intersection of the two arrays: ";
print_r($intersection);

?>