<?php
/* Script_50 Write a PHP script to filter the elements of an array based on a specified condition using 
the array_filter() function.*/
function oddnumber($var)
  {
  return($var & 1);
  }

$a=array(1,3,2,3,4);

print_r(array_filter($a,"oddNumber"));

?>