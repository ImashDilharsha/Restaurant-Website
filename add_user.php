<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];

    // Check if username already exists
    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count > 0) {
        echo json_encode(['status' => 'error', 'message' => 'Username already exists']);
    } else {
        // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (username, password, type) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $password, $userType);

        if ($stmt->execute()) {
            echo json_encode(['status' => 'success', 'message' => 'User added successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error adding user']);
        }

        $stmt->close();
    }

    $conn->close();
}
?>
