<?php
$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];
$email = $_POST['mail'];
$Mobileno = $_POST['no'];
$pass = $_POST['Password'];
$city = $_POST['City'];
$state = $_POST['State'];
$country = $_POST['Country'];
$e_qualification = $_POST['Education_Qualification'];
$gender = $_POST['gender'];

$connection = mysqli_connect("localhost","root","","15618223067");
$insert = "INSERT INTO `registration`(`First_Name`, `Middle_Name`, `Last_Name`, `Email`, `Mobile`, `Password`, `City`, `State`, `Country`, `Education Qualification`, `Gender`) VALUES ('$firstname','$middlename','$lastname','$email','$Mobileno','$pass','$city','$state','$country','$e_qualification','$gender')";
$query = mysqli_query($connection,$insert);


?>