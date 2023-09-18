<!-- Script_7: Write a PHP script to swap the values of two variables $x and $y using a temporary 
variable. Display the swapped values using the echo statement -->

<?php
// Define the variables
$x = 10;
$y = 20;

// Swap the values using a temporary variable
$temp = $x;
$x = $y;
$y = $temp;

// Display the swapped values
echo "After swapping, x = $x and y = $y";
?>
