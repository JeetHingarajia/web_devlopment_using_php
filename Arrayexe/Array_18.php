<?php  
/*18. Remove a city of your choice from the array and display the updated list.*/
    $cities = array("Rajkot", "Jamnagar", "Upleta", "Bhayavadar");

    print_r($cities);
    echo "<br><br>";

 

     array_splice($cities, 2,1);  
    
     echo " After remove a city  and display : ";

    print_r($cities);
    
?> 