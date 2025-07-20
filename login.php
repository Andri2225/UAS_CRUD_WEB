<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM member WHERE nama = '$username' AND password = '$password'";
    $hasil = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($hasil) > 0) {
        session_start();
        $_SESSION['username'] = $username;

        // Jangan echo dulu sebelum header()
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Login gagal";
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Course</title>
    <link rel="stylesheet" href="css/login-style.css">
</head>

<body>
    <div class="wrapper">
        <form action="login.php" method="POST">
            <h2>Login E-course</h2>
            <div class="input-field">
                <input type="text" name="username" required>
                <label>Masukkan nama user</label>
            </div>
            <div class="input-field">
                <input type="password" name="password" required>
                <label>Masukkan password</label>
            </div>
            <div class="jarak"></div>
            <button type="submit">Log In</button>
            <div class="register">
                <p>Don't have an account? <a href="input.php">Register</a></p>
            </div>
        </form>

    </div>
</body>

</html>