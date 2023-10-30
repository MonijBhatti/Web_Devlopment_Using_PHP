<!-- Script_9: Create variables for the day, month, and year of your birthdate. Display your birthdate in 
the format "DD/MM/YYYY" using the echo statement. -->

<?php
// Define variables for day, month, and year of your birthdate
$day = 24;     // Change this to your birth day
$month = 10;   // Change this to your birth month
$year = 2002;  // Change this to your birth year

// Display your birthdate in the "DD/MM/YYYY" format using echo
echo "My birthdate is: " . sprintf("%02d/%02d/%04d", $day, $month, $year);
?>
