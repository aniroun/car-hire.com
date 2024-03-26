<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have a variable $email containing the email input
$email = "ameliachesiyna@example.com"; // Replace this with your email variable

// Sanitize user input to prevent SQL injection
$safe_email = mysqli_real_escape_string($conn, $email);

// Use $safe_email in your SQL queries
// For example: $sql = "SELECT * FROM users WHERE email = '$safe_email'";
?>
