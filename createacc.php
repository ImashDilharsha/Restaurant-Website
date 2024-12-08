<?php
session_start(); // Start the session

// Database connection
$servername = "localhost";
$username = "root"; // Change if you have a different username
$password = ""; // Change if you have a password set
$dbname = "gallerycafe"; // Change to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($input_password !== $confirm_password) {
        echo "Passwords do not match. Please try again.";
        exit();
    }

    // SQL query to check if username already exists
    $sql = "SELECT username FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $input_username);
    $stmt->execute();
    $stmt->store_result();

    // Check if username already exists
    if ($stmt->num_rows > 0) {
        echo "The username is already taken. Please choose a different username.";
    } else {
        // Insert new user record
        $sql = "INSERT INTO users (username, password, type) VALUES (?, ?, 'customer')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $input_username, $input_password);

        if ($stmt->execute()) {
            echo "<script>alert('Account created successfully.'); window.location.href = 'loginform.html';</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "'); window.history.back();</script>";
        }
    }

    $stmt->close();
}

$conn->close();
?>
