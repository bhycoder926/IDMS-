<?php
include("connection.php");
session_start();

$id = $_SESSION['id'];
$msg = '';

// Fetch user data
$query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

// Handle update
if (isset($_POST['update'])) {
    $old_pass = $_POST['old_password'];
    $new_pass = $_POST['new_password'];
    $cnew_pass = $_POST['confirm_password'];

    if ($old_pass !== $user['password']) {
        $msg = "Old password is incorrect!";
    } elseif ($new_pass !== $cnew_pass) {
        $msg = "New passwords do not match!";
    } else {
        $update = "UPDATE users SET password='$new_pass' WHERE id='$id'";
        mysqli_query($conn, $update);
        $msg = "Password updated successfully!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form">
    <form method="post">
        <h2>Update Password</h2>
        <p class="msg"><?= $msg ?></p>
        <div class="form-group">
            <input type="password" name="old_password" placeholder="Enter Old Password" required>
        </div>
        <div class="form-group">
            <input type="password" name="new_password" placeholder="Enter New Password" required>
        </div>
        <div class="form-group">
            <input type="password" name="confirm_password" placeholder="Confirm New Password" required>
        </div>
        <button type="submit" name="update" class="btn font-weight-bold">Update Password</button>
        <p><a href="user.php">Go Back</a></p>
    </form>
</div>
</body>
</html>
