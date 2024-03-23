<!-- Write a program to calculate factorial of a number using for loop in php. -->

<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h1>Factorial Calculator</h1>
    <form action="" method="post">
        Enter a number:
        <input type="number" name="number" min="0" required><br>
        <button type="submit">Calculate Factorial</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = (int)$_POST['number'];
        $factorial = 1;

        if ($number >= 0) {
            for ($i = 1; $i <= $number; $i++) {
                $factorial *= $i;
            }
            echo "<p>The factorial of $number is: $factorial</p>";
        } else {
            echo "<p>Please enter a non-negative number.</p>";
        }
    }
    ?>
</body>
</html>
