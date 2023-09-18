<?php
/*Script_20 Script to find the factorial of a given number and display the result.*/
// Get the user's input as a positive integer
$input = isset($_POST['number']) ? (int)$_POST['number'] : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $input !== null && $input >= 0) {
    $factorial = 1;
	
    for ($i = 1; $i <= $input; $i++) {
        $factorial *= $i;
    }

    $resultMessage = "The factorial of $input is $factorial";
}
?>

<html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h1>Factorial Calculator</h1>
    <p>Enter a non-negative integer to calculate its factorial:</p>
    
    <form method="POST">
        <input type="number" name="number" min="0" required>
        <input type="submit" value="Calculate Factorial">
    </form>

    <?php if (isset($resultMessage)) : ?>
        <p><?php echo $resultMessage; ?></p>
    <?php endif; ?>
</body>
</html>
