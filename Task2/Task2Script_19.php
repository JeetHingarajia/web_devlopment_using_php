<?php
/* Script_19: Develop a PHP script that takes a positive integer as input and checks whether it is a 
prime number*/

$input = isset($_POST['number']) ? (int)$_POST['number'] : null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $input !== null && $input > 1) {
    $isPrime = true;
    for ($i = 2; $i <= sqrt($input); $i++) {
        if ($input % $i === 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        $resultMessage = "$input is a prime number.";
    } else {
        $resultMessage = "$input is not a prime number.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h1>Prime Number Checker</h1>
    <p>Enter a positive integer to check if it's a prime number:</p>
    
    <form method="POST">
        <input type="number" name="number" min="2" required>
        <input type="submit" value="Check Prime">
    </form>

    <?php if (isset($resultMessage)) : ?>
        <p><?php echo $resultMessage; ?></p>
    <?php endif; ?>
</body>
</html>


