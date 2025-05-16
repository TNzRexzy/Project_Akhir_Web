<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Profil</title></head>
<body>
    <h2>Profil Pengguna</h2>
    <p>Username: <?php echo $_SESSION['username']; ?></p>
    <ul><li><a href="dashboard.php">Kembali ke Dashboard</a></li>
    <li><a href="logout.php">Logout</a></li></ul>
</body>
</html>