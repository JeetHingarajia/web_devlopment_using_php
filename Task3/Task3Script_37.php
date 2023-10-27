<?php
/* Script_37 Develop a PHP script that uses the array_push() function to add elements to an array and 
the array_pop() function to remove elements from the end.*/

$array = array(1,2,);

array_push($array, 3, 4);

echo "Array after adding elements : <br> ";

print_r($array);
echo "<br><br>";

array_pop($array);

echo "Array after removing an element :<br> ";
print_r($array);
?>
