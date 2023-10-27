<?php
/*Script_34 Develop a PHP script to check if a specific value exists in an array using the in_array() 
function*/
$arrayToSearch = ['apple', 'banana', 'cherry'];
$valueToFind = 'cherry';
if (in_array($valueToFind, $arrayToSearch)) {
    echo "The value '$valueToFind' exists in the array.";
} else {
    echo "The value '$valueToFind' does not exist in the array.";
}
?>