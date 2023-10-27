<?php
/* Script_42 Create a PHP script that finds the difference between two arrays using the array_diff() 
function*/
$array1 = array(1, 2, 3, 4, 5);
$array2 = array(3, 4, 5, 6, 7);

$difference = array_diff($array1, $array2);
print_r($difference);
?>