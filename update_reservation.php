<?php
include 'db_connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$date = $_POST['date'];
$time = $_POST['time'];
$guests = $_POST['guests'];

$sql = "UPDATE reservations SET name=?, email=?, mobile=?, date=?, time=?, guests=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssi", $name, $email, $mobile, $date, $time, $guests, $id);

if ($stmt->execute()) {
    echo "Reservation updated successfully";
} else {
    echo "Error updating reservation: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
