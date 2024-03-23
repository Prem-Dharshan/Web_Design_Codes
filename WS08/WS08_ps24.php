<!-- Write a PHP script to: 
a) transform a string all uppercase letters.
b) Transform a string all lowercase letters.
c) Make a string's first character uppercase.
d) Make a string's first character of all the words uppercase. -->

<!DOCTYPE html>
<html>
<head>
    <title>String Transformation</title>
</head>
<body>
    <h1>String Transformation</h1>
    <form action="" method="post">
        Enter a string:
        <input type="text" name="input_string" required><br><br>
        <button type="submit" name="uppercase">Transform to Uppercase</button>
        <button type="submit" name="lowercase">Transform to Lowercase</button>
        <button type="submit" name="first_uppercase">First Character Uppercase</button>
        <button type="submit" name="titlecase">Title Case</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $input_string = $_POST['input_string'];

        if (isset($_POST['uppercase'])) {
            echo "<p>Uppercase: " . strtoupper($input_string) . "</p>";
        }
        if (isset($_POST['lowercase'])) {
            echo "<p>Lowercase: " . strtolower($input_string) . "</p>";
        }
        if (isset($_POST['first_uppercase'])) {
            echo "<p>First Character Uppercase: " . ucfirst($input_string) . "</p>";
        }
        if (isset($_POST['titlecase'])) {
            echo "<p>Title Case: " . ucwords($input_string) . "</p>";
        }
    }
    ?>
</body>
</html>
