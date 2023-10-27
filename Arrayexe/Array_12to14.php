<?php
/*12. Create an associative array representing a person's details, including name, age, and email.
13. Access and display the person's age from the associative array created in question 12.
14. Remove the email element from the associative array and display the updated array.*/
   
    $student= [
        "name" => "Jeet",
        "rno" => 21,
    ];
    print_r($student);
    echo "<br><br>";
       
    echo " Access and display the student's rollno : " . $student["rno"] . "<br><br>";
    
    
    
    unset($student["name"]);
    
    
    echo "Updated Array :<br>";
    print_r($student);
?>