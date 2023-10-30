<?php
// Script_38 Write a PHP script to use the array_shift() function to remove an element from the  beginning of an array and the array_unshift() function to add elements at the beginning.

$fruits = ['apple', 'banana', 'cherry'];
$removedFruit = array_shift($fruits);

echo "Removed element: $removedFruit\n";
echo "Array after removal: ";
print_r($fruits);

array_unshift($fruits, 'orange', 'grape');
echo "<br/>";

// Display the array after adding elements
echo "Array after adding elements: ";
print_r($fruits);

?>