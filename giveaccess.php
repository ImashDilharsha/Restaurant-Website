<?php
session_start(); // Start the session

// Database connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "gallerycafe"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // SQL query to fetch user details
    $sql = "SELECT type, username, password FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $input_username, $input_password);
    $stmt->execute();
    $stmt->store_result();

    // Check if user exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_type, $db_username, $db_password);
        $stmt->fetch();

        // Store user information in session
        $_SESSION['username'] = $input_username;
        $_SESSION['type'] = $user_type;

        // Redirect based on user type
        if ($user_type == 'admin') {
            header("Location: index1.php");
        } elseif ($user_type == 'staff') {
            header("Location: index2.php");
        } elseif ($user_type == 'customer') {
            header("Location: index3.php");
        }
        exit();
    } else {
        // Invalid login
        echo "Invalid username or password";
    }

    $stmt->close();
}

$conn->close();
?>
