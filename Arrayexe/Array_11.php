<?php
/*11. Create two arrays, one with fruits and another with vegetables. Merge them into a single array.*/
    $fruits = ["apple", "banana", "cherry", "orange"];
    
    
    $vegetables = ["potato", "onion", "cucumber", "tomato"];
    

    
    $merge = array_merge($fruits, $vegetables);
   
    echo "Merge them into a single array : <br> " ;
    print_r($merge);
?>