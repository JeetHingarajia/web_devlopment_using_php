<?php
/*Script_33 Create a PHP script to check if a specific key exists in an associative array using the 
array_key_exists() function*/
$associativearray=[
	'name'=>'Jeet',
	'surname'=>'Hingarajia',
	'city'=>'Bhayavadar',
];
$checkarray='name';

if (array_key_exists($checkarray, $associativearray)) {

    echo "Key '$checkarray' exists in the associative array.";

} else {

    echo "Key '$checkarray' does not exist in the associative array.";
}
?>
