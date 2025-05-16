<?php
session_start();
include "config/db.php";
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM soal WHERE id=$id");
header("Location: soal_list.php");
?>