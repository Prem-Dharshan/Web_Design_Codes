<!-- Write a PHP program to check whether a number is positive, negative or zero. -->

<!DOCTYPE html>
<html>
<head>
    <title>Number Type Checker</title>
</head>
<body>
    <h1>Number Type Checker</h1>
    <form action="" method="post">
        Enter a number:
        <input type="number" name="number" required><br>
        <button type="submit">Check Type</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = (float)$_POST['number'];

        if ($number > 0) {
            echo "<p>The number $number is positive.</p>";
        } elseif ($number < 0) {
            echo "<p>The number $number is negative.</p>";
        } else {
            echo "<p>The number is zero.</p>";
        }
    }
    ?>
</body>
</html>
