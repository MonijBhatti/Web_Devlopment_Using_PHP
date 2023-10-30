<?php
// 18. Remove a city of your choice from the array and display the updated list.

$cities = ["Paris", "Tokyo", "Mumbai", "Delhi"];

$cities[] = "New York";

$index = array_search("Tokyo", $cities);
if ($index !== false) {
    unset($cities[$index]);
}


print_r($cities);


?>