<!-- update_item.php -->
<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "UPDATE menu_items SET name=?, description=?, price=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdi", $name, $description, $price, $id);

    if ($stmt->execute()) {
        header('Location: index1.php'); // Redirect to the admin dashboard
        exit(); // Make sure to exit after redirect
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM menu_items WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$item = $stmt->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Item</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-4">Update Item</h1>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($item['id']); ?>">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($item['name']); ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" required><?php echo htmlspecialchars($item['description']); ?></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price (LKR)</label>
            <input type="number" id="price" name="price" class="form-control" step="0.01" value="<?php echo htmlspecialchars($item['price']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
