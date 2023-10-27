<?php
/*9. Sort an array of words in alphabetical order.
10. Sort the array from question 9 in reverse alphabetical order.*/

    $color = ["orange", "red", "blue", "pink"];
    sort($color);
    
   
    echo "Alphabetical Order :<br>";
    print_r($color);
    echo "<br><br>";
    
    // 10 - Sort the array in reverse alphabetical order
    rsort($color);
    
    echo "10 - Reverse Alphabetical Order :<br>";
    print_r($color);
?>