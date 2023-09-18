<html>
<head>
    <title>Find the Largest of Three Numbers</title>
</head>
<body>
    <h1>Find the Largest of Three Numbers</h1>
    <form method="post" action="">
        <label>Enter the first number: <input type="number" name="num1"></label>
		<br><br>
        <label>Enter the second number: <input type="number" name="num2"></label>
		<br><br>
        <label>Enter the third number: <input type="number" name="num3"></label>
		<br><br>
        
		<input type="submit" name="submit" value="Find Largest">
    </form>

<?php
    if(isset($_POST['submit'])) {
        // Get the user-entered numbers
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        // Find the largest number using the max() function
        $largest = max($num1, $num2, $num3);

        // Display the result
        echo "<p>The largest number is: $largest</p>";
    }
    ?>
</body>
</html>
