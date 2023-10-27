<?php 
/*Script_52 Develop a PHP script to merge two associative arrays using the array_merge() function 
and display the combined result.*/
$num1 = array(1,2,3);
$num2 = array(4,5,6);

$merge = array_merge($num1 , $num2);

print_r($merge);

 
?>