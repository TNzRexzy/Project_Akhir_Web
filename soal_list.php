<?php
session_start();
include "config/db.php";
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

$result = mysqli_query($conn, "SELECT * FROM soal");
?>
<h2>Daftar Soal</h2>
<a href="dashboard.php">Kembali</a> | <a href="soal_add.php">Tambah Soal</a><br><br>
<table border="1" cellpadding="8">
<tr>
    <th>No</th>
    <th>Pertanyaan</th>
    <th>A</th><th>B</th><th>C</th><th>D</th>
    <th>Kunci</th>
    <th>Aksi</th>
</tr>
<?php
$no = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>$no</td>
        <td>{$row['pertanyaan']}</td>
        <td>{$row['opsi_a']}</td>
        <td>{$row['opsi_b']}</td>
        <td>{$row['opsi_c']}</td>
        <td>{$row['opsi_d']}</td>
        <td>{$row['jawaban']}</td>
        <td>
            <a href='soal_edit.php?id={$row['id']}'>Edit</a> | 
            <a href='soal_delete.php?id={$row['id']}' onclick='return confirm(\"Yakin mau hapus?\");'>Hapus</a>
        </td>
    </tr>";
    $no++;
}
?>
</table>
