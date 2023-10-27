<?php
/*Script_30 Create a PHP script that removes duplicate values from an array using the array_unique() 
function*/
$truearray=[1,2,3,4,4,5,5,6,6,7,8];
$uniquearray=array_unique($truearray);
print_r ($uniquearray);
?>