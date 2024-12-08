<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallerycafe";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];

$sql = "UPDATE preorders SET status = 'confirmed' WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();

$conn->close();
?>