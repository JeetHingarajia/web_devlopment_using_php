<?php
$TargetDirectory="upload/";
$TargetFile=$TargetDirectory.basename($_FILES["Fileupload"]["name"]);
move_uploaded_file($_FILES["Fileupload"]["tmp_name"],$TargetFile);

$connection=mysqli_connect("localhost","root","","Jeet");
$query="INSERT INTO `example`(`Image`) VALUES ('$TargetFile')";
$execute_query=mysqli_query($connection,$query);


?>