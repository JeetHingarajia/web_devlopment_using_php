<?php
    $execute_query = $_POST['delete'];
    $connection=mysqli_connect("localhost","root","","15618223067");
    //print_r ($connection);
    foreach($execute_query as $myquery){
        $query="DELETE FROM `product_details`  where product_name='$myquery'";
        $execute_query=mysqli_query($connection,$query);
    }
    header("Location:view.php");
?>