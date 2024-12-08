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
$item = $_POST['item'];

$sql = "UPDATE preorders SET item = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $item, $id);
$stmt->execute();

$conn->close();
?>
