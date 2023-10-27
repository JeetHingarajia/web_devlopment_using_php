<?php
/* Script_43 Develop a PHP script to extract the keys from an associative array using the array_keys() 
function.*/

$student = array(
    "first_name" => "Jeet",
    "surname" => "Hingarajia",
    "age" => 20,
);

$keys = array_keys($student);

echo "Keys from the associative array:<br>";

print_r($keys);

?>