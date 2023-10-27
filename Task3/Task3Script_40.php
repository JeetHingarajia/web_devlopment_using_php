<?php
/* Script_40 Develop a PHP script to remove and replace elements from an array using the 
array_splice() function.*/

$color = array("orange", "blue", "red", "black", "pink");


$removed_elements = array_splice($color, 1, 2);

echo " Removed Elements : ";
print_r($removed_elements);

echo "<br><br>";

echo "Original Array after removal : ";
print_r($color);

$replacement = array("yellow", "grey");

array_splice($color, 1, 2, $replacement);

echo "<br><br>";

echo "Array after replacement : ";
print_r($color);

?>