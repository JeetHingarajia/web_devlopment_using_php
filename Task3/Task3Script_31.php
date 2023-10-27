<?php
 /*Script_31 Develop a PHP script that searches for a specific element in an array using the 
array_search() function and displays the index if found.*/
$array=[1,2,3,4,5,6,7,8];
$findarray=4;
$searchearray=array_search($findarray,$array);
print_r ($searchearray);
?>