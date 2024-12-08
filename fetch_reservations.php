<?php
include 'db_connect.php';

$sql = "SELECT * FROM reservations";
$result = $conn->query($sql);

$reservations = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $reservations[] = $row;
    }
}

echo json_encode($reservations);
?>
