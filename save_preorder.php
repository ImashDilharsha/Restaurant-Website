<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallerycafe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the input data
$data = json_decode(file_get_contents('php://input'), true);
$item = $data['item'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO preorders (item) VALUES (?)");
$stmt->bind_param("s", $item);

$response = array();

if ($stmt->execute()) {
    $response['success'] = true;
} else {
    $response['success'] = false;
}

$stmt->close();
$conn->close();

// Return the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
