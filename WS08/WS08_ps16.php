<!-- Create a simple HTML form and accept the user name and display the name through PHP echo statement.  -->

<!DOCTYPE html>
<html>
<head>
    <title>User Name Form</title>
</head>
<body>
    <!-- <h1>User Name Form</h1> -->
    <form action="" method="post">
        <h2>Please input your name:</h2>
        <input type="text" name="username" required>
        <button type="submit">Submit Name</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        echo "<p><b>$username</b></p>";
    }
    ?>
</body>
</html>
