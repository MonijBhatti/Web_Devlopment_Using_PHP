<!-- Script_14: Create a PHP script that calculates the sum of all numbers from 1 to 100 and displays 
the result. -->

<?php
// Initialize a variable to store the sum
$sum = 0;

// Loop through numbers from 1 to 100 and calculate the sum
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}

// Display the sum using echo
echo "The sum of all numbers from 1 to 100 is: $sum";
?>
