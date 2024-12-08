<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['userId']; // Use the username to identify the user
    $newPassword = $_POST['newPassword'];

    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE username = ?");
    $stmt->bind_param("ss", $newPassword, $username);

    if ($stmt->execute()) {
        echo "Password updated successfully.";
    } else {
        echo "Error updating password.";
    }

    $stmt->close();
    $conn->close();
}
?>
