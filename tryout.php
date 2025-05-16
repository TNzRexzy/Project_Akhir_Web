<?php
session_start();
include "config/db.php";

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

$result = mysqli_query($conn, "SELECT * FROM soal");
?>

<!DOCTYPE html>
<html>
<head><title>Tryout UTBK</title></head>
<body>
    <h2>Soal Tryout</h2>
    <form method="post" action="">
        <?php while ($soal = mysqli_fetch_assoc($result)) { ?>
            <p><?php echo $soal['pertanyaan']; ?></p>
            <label><input type="radio" name="jawaban[<?php echo $soal['id']; ?>]" value="A"> <?php echo $soal['opsi_a']; ?></label><br>
            <label><input type="radio" name="jawaban[<?php echo $soal['id']; ?>]" value="B"> <?php echo $soal['opsi_b']; ?></label><br>
            <label><input type="radio" name="jawaban[<?php echo $soal['id']; ?>]" value="C"> <?php echo $soal['opsi_c']; ?></label><br>
            <label><input type="radio" name="jawaban[<?php echo $soal['id']; ?>]" value="D"> <?php echo $soal['opsi_d']; ?></label><br><br>
        <?php } ?>
        <input type="submit" name="submit" value="Selesai">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $benar = 0;
        $jawaban = $_POST['jawaban'];
        $result = mysqli_query($conn, "SELECT * FROM soal");

        // Reset pointer ke awal
        mysqli_data_seek($result, 0);

        while ($soal = mysqli_fetch_assoc($result)) {
            $id = $soal['id'];
            if (isset($jawaban[$id]) && $jawaban[$id] == $soal['jawaban']) {
                $benar++;
            }
        }

        echo "<p>Nilai kamu: $benar benar dari " . mysqli_num_rows($result) . " soal.</p>";
    }
    ?>

    <p><a href="dashboard.php">Kembali ke Dashboard</a></p>

</body>
</html>
