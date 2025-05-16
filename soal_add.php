<?php
session_start();
include "config/db.php";
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $q = $_POST['pertanyaan'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $key = $_POST['kunci'];

    mysqli_query($conn, "INSERT INTO soal (pertanyaan, opsi_a, opsi_b, opsi_c, opsi_d, jawaban)
                         VALUES ('$q','$a','$b','$c','$d','$key')");
    header("Location: soal_list.php");
}
?>
<h2>Tambah Soal</h2>
<form method="post">
    Pertanyaan: <br><textarea name="pertanyaan" rows="3" cols="50"></textarea><br>
    Opsi A: <input type="text" name="a"><br>
    Opsi B: <input type="text" name="b"><br>
    Opsi C: <input type="text" name="c"><br>
    Opsi D: <input type="text" name="d"><br>
    Kunci Jawaban (A/B/C/D): <input type="text" name="kunci" maxlength="1"><br>
    <input type="submit" value="Simpan">
</form>
<a href="soal_list.php">Kembali</a>