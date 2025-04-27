<?php
include("connection.php");
session_start();

// Check if user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$id = $_SESSION['id'];

// Delete user from database
$delete = "DELETE FROM users WHERE id='$id'";
mysqli_query($conn, $delete);

// Destroy session and redirect to registration page
session_destroy();
header("Location: register.php");
exit();
?>
