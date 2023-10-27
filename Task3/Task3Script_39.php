<?php
/*Script_39 Create a PHP script that extracts a portion of an array using the array_slice() function 
and displays the result.*/

$color = array("orange", "blue", "red", "white", "black");
$slice = array_slice($color, 1, 3); 
echo "Sliced Array: ";
print_r($slice);

?>