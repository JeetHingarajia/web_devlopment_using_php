<?php 
/* Script_55 Develop a PHP script that uses the array_key_first() and array_key_last() functions to 
retrieve the first and last keys of an array.*/
$student = array('id' => 101, 'name' => 'Jeet', 'age' => 20 );

$firstkey = array_key_first($student);

$lastkey = array_key_last($student);

echo "Array first Key : " ;

print_r($firstkey);

echo "<br> Array last key : ";


print_r($lastkey);
    

 ?>