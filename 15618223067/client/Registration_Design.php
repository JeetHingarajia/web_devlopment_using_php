<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table align="center" border="5" bgcolor="purple">
        <form method="POST" action="Registration_Code.php">
            <tr>
                <td colspan=2 align=center><h1>Atmiya Uni. Registration form</h1></td>
            </tr>
            <tr>
                <td>Reg_id</td>
				<td><input type ="int" name="Reg_id"></input></td>
            </tr>
            <tr>
                <td>First Name</td>
				<td><input type ="varchar" name="fname"></input></td>
            </tr>
            <tr> 
                <td>Middle Name</td>
				<td><input type ="varchar" name="mname"></input></td>
            </tr>
            <tr>
                <td>Last Name</td>
				<td><input type ="varchar"name="lname"></input></td>
            </tr>
            <tr>
                <td>Email</td>
				<td><input type ="varchar"name="mail"></input></td>
            </tr>
            <tr>
                <td>Mobile</td>
				<td><input type ="int"name="no"></input></td>
            </tr>
            <tr>
                <td>Password</td>
				<td><input type ="int"name="Password"></input></td>
            </tr>
            <tr>
                <td>City</td>
				<td><input type ="varchar"name="City"></input></td>
            </tr>
            <tr>
                <td>State</td>
				<td><input type ="varchar"name="State"></input></td>
            </tr>
            <tr>
                <td>Country</td>
				<td><input type ="varchar"name="Country"></input></td>
            </tr>
            <tr>
                <td>Education Qualification</td>
				<td><input type ="varchar"name="Education_Qualification"></input></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type ="radio"name="gender">male</input>
                    <input type ="radio"name="gender">female</input>
                </td>
            </tr>
            </tr>
             <tr>
                <td colspan=2 align=center><input type ="submit"></input></td>
            </tr>
        <form>
</table>
</body>
</html>