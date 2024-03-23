<!-- Write a program to show day of the week (for example: Monday) based on numbers using switch/case statements.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day of the week</title>
</head>
<body>
    <form action="" method="post">
        Enter the number of the date
        <input type="number" name="num" min="1" max="7" required="true"><br>
        <button type="submit">Show the Day</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $num = (int)$_POST['num'];

            switch($num) {
                case 1 : echo "<br>Monday"; break;
                case 2 : echo "<br>Tuesday"; break;
                case 3 : echo "<br>Wednesday"; break;
                case 4 : echo "<br>Thursday"; break;
                case 5 : echo "<br>Friday"; break;
                case 6 : echo "<br>Saturday"; break;
                case 7 : echo "<br>Sunday"; break;
                default: echo "<br>Invalid number";
            }
        }
    ?>
</body>
</html>