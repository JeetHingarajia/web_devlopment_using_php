<?php
/*Script_53 Write a PHP script that removes duplicate values from an associative array using the 
array_unique() function.*/

$fruits = array("mango", "grapes","appple","kiwi","mango","cheery");

$unique = (array_unique($fruits));

print_r($unique);

?>