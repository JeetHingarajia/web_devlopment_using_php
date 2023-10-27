<?php
/*5. Create an array of numbers and display the total count of elements.
6. Use a loop to display each number in the array from question 5.
7. Remove the last number from the array created in question 5.*/
    $numbers = array(1, 2, 3, 4, 5);

    $totalCount = count($numbers);
    echo "Total count of elements : " . $totalCount . "<br>";

    // 6.Use a loop to display each number in the array from question 5.

    echo "Numbers in the array: ";
    foreach ($numbers as $Numbers) {
        echo $Numbers . " ";
    }

    // 7. Remove the last number from the array created in question 5.

    array_pop($numbers);

    // Display the modified array after removing the last number
    
    echo "<br>Array after removing the last number: ";
    foreach ($numbers as $Numbers) {
        echo $Numbers . " ";
    }
?>