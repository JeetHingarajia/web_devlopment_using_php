<?php
/*Script to check if a given number is a palindrome or not and display the result.*/

$input = isset($_POST['number']) ? (int)$_POST['number'] : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $input !== null && $input >= 0) {

    $numberStr = (string)$input;

    $reversedStr = strrev($numberStr);

    if ($numberStr === $reversedStr) {
        $resultMessage = "$input is a palindrome.";
    } else {
        $resultMessage = "$input is not a palindrome.";
    }
}
?>

<html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>
    <h1>Palindrome Checker</h1>
    <p>Enter a non-negative integer to check if it's a palindrome:</p>
    
    <form method="POST">
        <input type="number" name="number" min="0" required>
        <input type="submit" value="Check Palindrome">
    </form>

    <?php if (isset($resultMessage)) : ?>
        <p><?php echo $resultMessage; ?></p>
    <?php endif; ?>
</body>
</html>
