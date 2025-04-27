<?php
include("connection.php");
$msg = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $user_type = $_POST['user_type'];

    if ($password !== $cpassword) {
        $msg = "Passwords do not match!";
    } else {
        // Check if table is empty
        $check = mysqli_query($conn, "SELECT COUNT(*) as total FROM users");
        $row = mysqli_fetch_assoc($check);

        if ($row['total'] == 0) {
            mysqli_query($conn, "ALTER TABLE users AUTO_INCREMENT = 1");
        }

        // Check if user already exists
        $select1 = "SELECT * FROM users WHERE email = '$email'";
        $select_user = mysqli_query($conn, $select1);

        if (mysqli_num_rows($select_user) > 0) {
            $msg = "User already exists!";
        } else {
            $insert1 = "INSERT INTO users(name, email, password, user_type) 
                        VALUES ('$name','$email','$password','$user_type')";
            mysqli_query($conn, $insert1);
            header('Location: login.php');
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <form action="" method="post">
            <h2>Registration</h2>
            <p class="msg"><?= $msg ?></p>
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your Name" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your Email" class="form-control" required>
            </div>
            <div class="form-group">
                <select name="user_type" class="form-control">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Enter your Password" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="password" name="cpassword" placeholder="Confirm your Password" class="form-control" required>
            </div>
            <button class="btn font-weight-bold" name="submit">Register Now</button>
            <p>Already have an Account? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>
</html>
