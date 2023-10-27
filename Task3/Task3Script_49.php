<?php
/* Script_49 Develop a PHP script to split an array into chunks of a specified size using the 
array_chunk() function.*/
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


$chunkSize = 3;


$chunks = array_chunk($data, $chunkSize);

// Print the resulting chunks
foreach ($chunks as $chunk) {
    print_r($chunk);
}

?>