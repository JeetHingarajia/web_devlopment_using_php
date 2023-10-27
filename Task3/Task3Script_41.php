<?php
/* Script_41 Write a PHP script that finds the intersection of two arrays using the array_intersect() 
function.*/
$array1 = array(1, 2, 3, 4, 5);
$array2 = array(3, 4, 6, 7, 9);

$intersection = array_intersect($array1, $array2);

echo "Intersection of the arrays:<br>";
print_r($intersection);
?>