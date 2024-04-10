<?php
echo "<link rel='stylesheet' type='text/css' href='styles.css'>";
echo "<div class='code-container'>";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "test";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $dadname = $_POST['dadname'];
    $momname = $_POST['momname'];
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $addr = $_POST['addr'];
    $bloodgrp = $_POST['bloodgrp'];
    $department = $_POST['department']; 
    $courses = isset($_POST['course']) ? $_POST['course'] : []; 

    if (empty($name) || empty($dadname) || empty($momname) || empty($phno) || empty($email) || empty($day) || empty($month) || empty($year) || empty($addr) || empty($bloodgrp) || empty($department) || empty($courses)) {
        die("All fields are required.");
    } 

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    $sql = "INSERT INTO student (name, dadname, momname, phno, email, day, month, year, addr, bloodgrp, department, course) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    for ($i = 0; $i < count($courses); $i++) {
        $sql = "INSERT INTO student_registration (name, dadname, momname, phno, email, day, month, year, addr, bloodgrp, department, course) VALUES ('$name', '$dadname', '$momname', '$phno', '$email', '$day', '$month', '$year', '$addr', '$bloodgrp', '$department', '{$courses[$i]}')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='success'>Success: Registered Successfully for the Course " . $courses[$i] . "</div><br>";
        } 
        else {
            echo "<div class='error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }
    }

    $conn->close();
}
else {
    die("DIE - Data Independent Execution (by PHP)");
}
echo "</div>";
