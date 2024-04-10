<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['user'];
    $price = $_POST['tps'];
    $quan = $_POST['tq'];
    $amt = $_POST['fin'];

    // print_r( $_POST);
    $servername = 'localhost';
    $user = "root";
    $pass = "root";
    $db = "fourth";

    $conn = new mysqli($servername, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection errror. " . $conn->connect_error);
    }

    echo "Connection estd.";

    $q = $conn->query("Select id from user_table where uname = '$name'");
    if ($q->num_rows > 0) {
        $uid = $q->fetch_assoc()['id'];
    }


    if ($conn->query("insert into bill (user_id, price, quantity, amount) values ('$uid','$price','$quan','$amt');")) {
        echo "Transaction recorded.";
    } else {
        die($conn->error);
    }
}
