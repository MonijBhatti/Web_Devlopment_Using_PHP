<?php
// Script_40 Develop a PHP script to remove and replace elements from an array using the array_splice() function.

$colors = ['red', 'green', 'blue', 'yellow', 'purple'];
$removedElements = array_splice($colors, 1, 2, ['orange', 'pink']);

echo "Removed elements: ";

print_r($removedElements);

echo "</br>";
echo "Array after removal and replacement: ";

print_r($colors);

?>