<!-- Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument -->

<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h1>Factorial Calculator</h1>
    <form action="" method="post">
        Enter a non-negative integer:
        <input type="number" name="number" min="0" required><br>
        <button type="submit">Calculate Factorial</button>
    </form>

    <?php
    function factorial($number) {
        if ($number == 0 || $number == 1) {
            return 1;
        } else {
            return $number * factorial($number - 1);
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = (int)$_POST['number'];

        if ($number >= 0) {
            echo "<p>Factorial of $number is: " . factorial($number) . "</p>";
        } 
        else {
            echo "<p>Please enter a non-negative integer.</p>";
        }
    }
    ?>
</body>
</html>
