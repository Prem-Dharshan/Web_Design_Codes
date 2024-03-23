<!DOCTYPE html>
<html>
<head>
    <title>Count Words</title>
</head>
<body>
    <h1>Count Words</h1>
    <form action="" method="post">
        <label for="input_string">Enter a string:</label><br>
        <input type="text" id="input_string" name="input_string" required><br><br>
        <button type="submit">Count Words</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $input_string = $_POST['input_string'];

        // Count the number of words in the string
        $total_words = str_word_count($input_string);
        echo "<p>Total words in the string: $total_words</p>";
    }
    ?>
</body>
</html>
