<!-- delete_item.php -->
<?php
include 'db_connect.php';

$id = $_GET['id'];

// Prepare and execute the delete statement
$sql = "DELETE FROM menu_items WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header('Location: index1.php'); // Redirect to the admin dashboard
    exit(); // Ensure no further code is executed after redirect
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
