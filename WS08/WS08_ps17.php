<!-- Write a PHP script to display string, values within a table. -->

<!DOCTYPE html>
<html>
<head>
    <title>String and Values Display</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>String and Values Display</h1>
    <table>
        <tr>
            <th>Variable</th>
            <th>Value</th>
        </tr>
        <?php
        $name = "John Doe";
        $age = 30;
        $city = "New York";

        displayRow("Name", $name);
        displayRow("Age", $age);
        displayRow("City", $city);

        function displayRow($variable, $value) {
            echo "<tr><td>$variable</td><td>$value</td></tr>";
        }
        ?>
    </table>
</body>
</html>
