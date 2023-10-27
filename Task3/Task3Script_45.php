<?php
/* Script_45 Create a PHP script that flips the keys and values of an associative array using the 
array_flip() function.*/

$colors = array(
    "red" => "apple",
    "yellow" => "banana",
    "green" => "kiwi",
    "purple" => "grape"
);

$flipped = array_flip($colors);

echo "Flipped associative array:<br>";
print_r($flipped);

?>