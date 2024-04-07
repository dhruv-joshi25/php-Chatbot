<?php

// Database connection
$conn = mysqli_connect("localhost", "root", "", "onlinebot");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize username, email, and password inputs
    $username = mysqli_real_escape_string($conn, $_POST['signup_username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['signup_password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Check if passwords match
    if ($password !== $confirm_password) {
        $error_message = "Passwords do not match. Please try again.";
    } else {
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert username, email, and hashed password into the database
        $insert_query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
        $insert_result = mysqli_query($conn, $insert_query);

        if ($insert_result) {
            // Signup successful, redirect to chatbot.php
            $_SESSION['username'] = $username;
            header("Location: chatbot.php");
            exit();
        } else {
            // Signup failed, display error message
            $error_message = "Signup failed. Please try again.";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        p.error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
    <form action="signup.php" method="post" class="container">
    <label for="signup_username">Username:</label>
    <input type="text" id="signup_username" name="signup_username" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="signup_password">Password:</label>
    <input type="password" id="signup_password" name="signup_password" required>
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required>
    <input type="submit" value="Sign Up">
</form>

</body>
</html>