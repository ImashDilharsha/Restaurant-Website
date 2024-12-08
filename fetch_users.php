<?php
include 'db_connect.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['username']) . "</td>";
        echo "<td>" . htmlspecialchars($row['type']) . "</td>";
        echo "<td>
                <a href='delete_user.php?username=" . urlencode($row['username']) . "' class='btn btn-danger btn-sm'>Delete</a>
                <button class='btn btn-warning btn-sm' onclick='showChangePasswordModal(\"" . htmlspecialchars($row['username']) . "\")'>Change Password</button>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No users found</td></tr>";
}

$conn->close();
?>
