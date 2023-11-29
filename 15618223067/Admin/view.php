
<?php

$connect=mysqli_connect("localhost","root","","15618223067");
$query="SELECT * FROM `product_details`";
$execute_query=mysqli_query($connect,$query);

$number_record=mysqli_num_rows($execute_query);
echo"<form action=delet.php method=post>";
echo " <center><table border=1>
<tr>
<td>product_name </td>
<td> product_caegory </td>
<td> product_price </td>
</tr>";
for($i=1; $i<=$number_record; $i++)
{
    $fetch_data = mysqli_fetch_row($execute_query);
    echo "<tr><td>$fetch_data[1]</td><td>$fetch_data[3]</td><td>$fetch_data[4]</td><td><input type='checkbox' name='delete[]' value=$fetch_data[0]></td></tr>";
}
echo "</table>";
echo "<input type ='submit' name = submit>";

?>
