<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
require 'config/db.php';
$materi = mysqli_query($conn, "SELECT * FROM materi");
?>
<!DOCTYPE html>
<html>
<head><title>Materi</title></head>
<body>
    <h2>Daftar Materi</h2>
    <ul>
        <?php while($row = mysqli_fetch_assoc($materi)): ?>
            <li><a href="<?= $row['link']; ?>"><?= $row['judul']; ?></a></li>
        <?php endwhile; ?>
    </ul>
    <a href="dashboard.php">Kembali ke Dashboard</a>
</body>
</html>
