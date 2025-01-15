<?php
session_start();
require_once 'config/conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitasi input
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query untuk memeriksa kredensial pengguna
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('Location: view/admin/blank.php');
            exit();
        } else {
            echo 'Password salah.';
        }
    } else {
        echo 'Username tidak ditemukan.';
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="css/csslogin.css">
</head>

<body class="center flex">
    <section class="card center">
        <div class="d-logo center flex">
            <a href="index.php">
                <img class="logo" src="https://bantulkab.go.id//resource/temp/logo/logo-bantul@2x.png" alt="logo">
            </a>
        </div>


        <form action="bantul_admin.php" method="POST">
            <section class="form">
                <label for="username">Username</label>
                <input class="center flex roboto-thin" type="text" name="username" id="username" placeholder="Username" required>
                <label for="password">Password</label>
                <input class="center flex roboto-thin" type="password" name="password" id="password" placeholder="Password" required>
            </section>

            <section class="buttons" style="margin-bottom: 25px;">
                <button class="center flex button button-primary" type="submit">Sign in</button>
            </section>
        </form>


    </section>
</body>

</html>