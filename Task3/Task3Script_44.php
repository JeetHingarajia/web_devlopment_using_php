<?php
/*Script_44 Write a PHP script to extract the values from an associative array using the array_values() 
function.*/
$student = array(
    "name" => "Jeet",
    "surname" => "Hingarajia",
    "age" => 20,
    
);

$keys = array_values($student);

echo "Keys from the associative array:<br>";

print_r($keys);
?>