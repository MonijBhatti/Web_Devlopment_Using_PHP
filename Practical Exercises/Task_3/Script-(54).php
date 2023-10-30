<?php
//  Script_54 Create a PHP script that extracts a specific column from a multidimensional array using the array_column() function.

$a = array(
    array(
      'id' => 101,
      'first_name' => 'Shaban',
      'last_name' => 'Khan',
    ),
    array(
      'id' => 4767,
      'first_name' => 'Sagar',
      'last_name' => 'Parida',
    ),
    array(
      'id' => 3809,
      'first_name' => 'Pavan',
      'last_name' => 'Patel',
    )
  );
  
  $last_names = array_column($a, 'last_name');
  print_r($last_names);

?>