<?php
session_start(); // Start session to manage user session data

// Predefined username and password (for testing purposes)
$valid_username = "user";
$valid_password = "password";

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Login successful, redirect to home page
        $_SESSION['username'] = $username; // Store username in session
        header("Location: home.php");
        exit();
    } else {
        echo "Login failed. Invalid username or password.";
    }
}
?>
