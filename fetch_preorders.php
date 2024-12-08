<?php
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

$sql = "SELECT * FROM preorders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $preorders = array();
    while($row = $result->fetch_assoc()) {
        $preorders[] = $row;
    }
    echo json_encode($preorders);
} else {
    echo json_encode([]);
}

$conn->close();
?>
