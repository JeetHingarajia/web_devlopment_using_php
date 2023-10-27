<?php
/* Script_46 Develop a PHP script to fill an array with a specific value using the array_fill() function*/

$fillValue = "Hello, World!";
$numberOfElements = 1;
$filledArray = array_fill(0, $numberOfElements, $fillValue);
print_r($filledArray);

?>