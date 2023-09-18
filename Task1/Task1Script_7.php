<?php
/* Script_7: Write a PHP script to swap the values of two variables $x and $y using a temporary 
variable. Display the swapped values using the echo statement.*/
$a=24;
$b=04;
$temp=$a;
$a=$b;
$b=$temp;
echo"\n The number before swapping is$a.$b:\n";
echo"\n The number after swapping is :<br><br>";
echo"a=".$a." b=".$b;
?>