<?php
// 4. Check if the color "Green" exists in the array from question 1.

$fav_color = array("Red", "Green", "Blue");

$fav_color[] = "Yellow";

if(in_array("Green", $fav_color))
{
    echo "Yes, Green Color Exist in Array";
}
else
{
    echo "No, Green Color Does Not Exist in Array";
}

?>
