<?php
include("connection.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Page</title>
</head>
<body>
    <div class="user-page">
        <h2>Welcome to User page!</h2>
        <p>User : <span><?php echo $_SESSION['user']; ?></span></p>

        <a href="logout.php">
            <button class="btn font-weight-bold" id="logout">Logout</button>
        </a>

        <a href="update_user.php">
            <button class="btn font-weight-bold" id="logout">Update</button>
        </a>

        <a href="delete_user.php" onclick="return confirm('Are you sure you want to delete your account?');">
            <button class="btn font-weight-bold" id="logout">Delete</button>
        </a>
    </div>
</body>
</html>
