<?php
/*16. Create an indexed array of cities you want to visit in the future.
17. Add a new city to your travel list from question 16.*/

    $cities = array("Rajkot", "Ahemdabad", "Bhayavadar", "Upleta");

    print_r($cities);
    echo "<br><br>";

    
    array_push($cities,"Vadodara");

   
    echo "Add a New city in array :<br>";
    print_r($cities);

?>