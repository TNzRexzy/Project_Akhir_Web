<?php
session_start();
include "config/db.php";
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM soal WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $q = $_POST['pertanyaan'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $key = $_POST['kunci'];

    mysqli_query($conn, "UPDATE soal SET 
        pertanyaan='$q', opsi_a='$a', opsi_b='$b', opsi_c='$c', opsi_d='$d', jawaban='$key'
        WHERE id=$id");

    header("Location: soal_list.php");
}
?>
<h2>Edit Soal</h2>
<form method="post">
    Pertanyaan: <br><textarea name="pertanyaan" rows="3" cols="50"><?php echo $data['pertanyaan']; ?></textarea><br>
    Opsi A: <input type="text" name="a" value="<?php echo $data['opsi_a']; ?>"><br>
    Opsi B: <input type="text" name="b" value="<?php echo $data['opsi_b']; ?>"><br>
    Opsi C: <input type="text" name="c" value="<?php echo $data['opsi_c']; ?>"><br>
    Opsi D: <input type="text" name="d" value="<?php echo $data['opsi_d']; ?>"><br>
    Kunci Jawaban: <input type="text" name="kunci" value="<?php echo $data['jawaban']; ?>"><br>
    <input type="submit" value="Update">
</form>
<a href="soal_list.php">Kembali</a>