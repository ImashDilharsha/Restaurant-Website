<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username']) || !isset($_SESSION['type'])) {
    header("Location: loginform.html");
    exit();
}
?>
