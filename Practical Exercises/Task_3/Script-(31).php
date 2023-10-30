<?php  
// Script_31 Develop a PHP script that searches for a specific element in an array using the array_search() function and displays the index if found.

$Fruits = array("Apple"=>20,"Mango"=>25,"Watermallon"=>15);

echo array_search(20,$Fruits,true);

$a=array("a"=>"red","b"=>"green","c"=>"blue");

echo array_search("red",$a);

?>