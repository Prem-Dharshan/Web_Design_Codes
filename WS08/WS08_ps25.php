<!DOCTYPE html>
<html>
<head>
    <title>Random Password Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .password {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Random Password Generator</h1>
        <div class="password">
            <?php
            // Given string
            $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';

            // Shuffle the characters
            $shuffledString = str_shuffle($characters);

            // Take the first 8 characters as the password
            $password = substr($shuffledString, 0, 8);

            // Display the password
            echo "Your Password: $password";
            ?>
        </div>
    </div>
</body>
</html>
