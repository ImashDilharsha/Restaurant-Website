<?php
// Database configuration
include 'db_connect.php';

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$date = $_POST['date']; // Date should be in YYYY-MM-DD format
$time = $_POST['time'];
$guests = $_POST['guests'];

// Insert data into database
$sql = "INSERT INTO reservations (name, email, mobile, date, time, guests) VALUES ('$name', '$email', '$mobile', '$date', '$time', '$guests')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Reservation successful!'); window.location.href = 'index.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
