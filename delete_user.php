<?php
include 'db_connect.php';

if (isset($_GET['username'])) {
    $username = $_GET['username'];

    $stmt = $conn->prepare("DELETE FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        header("Location: index1.php");
    } else {
        echo "Error deleting user.";
    }

    $stmt->close();
    $conn->close();
}
?>
