<?php
/* Script_48 Create a PHP script that uses the array_reduce() function to apply a callback function to 
the elements of an array and return a single value.*/
function sum($num, $item) {
    return $num + $item;
}

$numbers = [1, 2, 3, 4, 5];

$total = array_reduce($numbers, 'sum', 0);

echo "The sum of all elements is: $total";
?>