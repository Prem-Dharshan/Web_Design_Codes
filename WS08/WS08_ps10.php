<!-- Write a PHP program to check if a person is eligible to vote or not. -->

<!DOCTYPE html>
<html>
<head>
    <title>Voter Eligibility Checker</title>
</head>
<body>
    <h1>Voter Eligibility Checker</h1>
    <form action="" method="post">
        Enter your age:
        <input type="number" name="age" min="0" required><br><br>
        <button type="submit">Check Eligibility</button><br>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $age = (int)$_POST['age'];

        if ($age >= 18) {
            echo "<p>You are eligible to vote!</p>";
        } else {
            echo "<p>Sorry, you are not eligible to vote yet.</p>";
        }
    }
    ?>
</body>
</html>
