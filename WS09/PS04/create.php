<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
$sql = "CREATE TABLE student_registration (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    dadname VARCHAR(255),
    momname VARCHAR(255),
    phno VARCHAR(20),
    email VARCHAR(255),
    gender ENUM('male', 'female', 'other'),
    day INT,
    month INT,
    year INT,
    addr VARCHAR(255),
    bloodgrp VARCHAR(10),
    department ENUM('CSE', 'EEE', 'BBA'),
    course VARCHAR(255)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table student_registration created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
