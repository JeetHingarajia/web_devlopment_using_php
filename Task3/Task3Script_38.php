<?php
/* Script_38 Write a PHP script to use the array_shift() function to remove an element from the 
beginning of an array and the array_unshift() function to add elements at the beginning*/

$fruits = array("cherry", "mango", "kiwi");
$removedElement = array_shift($fruits);
echo "Removed Element: $removedElement <br>";
echo "Array after removing an element: ";
print_r($fruits);
echo "<br>";
array_unshift($fruits, "apple", "banana");
echo "Array after adding elements at the beginning: ";
print_r($fruits);

?>