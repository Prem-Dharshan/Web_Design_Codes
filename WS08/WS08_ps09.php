<!-- Write a program to calculate Electricity bill in PHP -->

<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>
<body>
    <h1>Electricity Bill Calculator</h1>
    <form action="" method="post">
        Enter the number of units consumed:
        <input type="number" name="units" min="0" required><br>
        <button type="submit">Calculate Bill</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $units = (int)$_POST['units'];
        $totalBill = 0;

        if ($units <= 50) {
            $totalBill = $units * 3.50;
        } elseif ($units <= 150) {
            $totalBill = (50 * 3.50) + (($units - 50) * 4.00);
        } elseif ($units <= 250) {
            $totalBill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
        } else {
            $totalBill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
        }

        echo "<p>Units consumed: $units</p>";
        echo "<p>Total Bill: Rs. $totalBill</p>";
    }
    ?>
</body>
</html>
