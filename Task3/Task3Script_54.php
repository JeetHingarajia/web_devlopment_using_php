<?php
/* Script_54 Create a PHP script that extracts a specific column from a multidimensional array using 
the array_column() function*/
    $student = array(array('id' => 101, 'name' => 'Jeet', 'age' => 20 ),
                     array('id' => 102, 'name' => 'Vasu', 'age' => 20 ),
                     array('id' => 103, 'name' => 'Kush', 'age' => 21 ),
                     array('id' => 104, 'name' => 'Mehul','age' => 20 )
                );

    $name = array_column($student ,'name');

    print_r($name);

?>