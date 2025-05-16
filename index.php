<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><title>Login E-Learning Tryout & Mandiri</title></head>
<body>
    <h2>Login Tryout UTBK</h2>
    <form method="post" action="proses_login.php">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
    <p>Belum punya akun? <a href='register.php'>Daftar di sini</a></p>
    <?php
    if (isset($_SESSION['error'])) {
        echo "<p style='color:red'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
    ?>
</body>
</html>