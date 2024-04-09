<?php
// Database connection settings
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

// Validate form data
$isValid = true;
$errors = array();

// Validate username
if (empty($_POST["uname"])) {
    $isValid = false;
    $errors[] = "User ID is required";
}

// Validate password
if (empty($_POST["passwd"])) {
    $isValid = false;
    $errors[] = "Password is required";
}

// Validate name
if (empty($_POST["name"])) {
    $isValid = false;
    $errors[] = "Name is required";
}

// Validate address
if (empty($_POST["addr"])) {
    $isValid = false;
    $errors[] = "Address is required";
}

// Validate country
if (empty($_POST["country"])) {
    $isValid = false;
    $errors[] = "Country is required";
}

// Validate zip code
if (empty($_POST["zip"])) {
    $isValid = false;
    $errors[] = "ZIP code is required";
}

// Validate email
if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $isValid = false;
    $errors[] = "Invalid email address";
}

// Validate sex
if (empty($_POST["sex"])) {
    $isValid = false;
    $errors[] = "Sex is required";
}

// Validate language
if (empty($_POST["lang"])) {
    $isValid = false;
    $errors[] = "Language is required";
}

// If form data is valid, insert into database
if ($isValid) {
    $username = $_POST["uname"];
    $password = $_POST["passwd"];
    $name = $_POST["name"];
    $address = $_POST["addr"];
    $country = $_POST["country"];
    $zip = $_POST["zip"];
    $email = $_POST["email"];
    $sex = $_POST["sex"];
    // $language = implode(', ', $_POST["lang"]);
    $language = is_array($_POST["lang"]) ? implode(', ', $_POST["lang"]) : $_POST["lang"];
    $message = $_POST["mensaje"];

    // Prepare SQL statement
    $sql = "INSERT INTO users5 (username, password, name, address, country, zip, email, sex, language, message)
            VALUES ('$username', '$password', '$name', '$address', '$country', '$zip', '$email', '$sex', '$language', '$message')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Display validation errors
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
}

$conn->close();
?>
