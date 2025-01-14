<?php
include 'koneksi.php';

$id = $_POST['id'];
$pertanyaan = $_POST['pertanyaan'];
$opsi_a = $_POST['opsi_a'];
$opsi_b = $_POST['opsi_b'];
$opsi_c = $_POST['opsi_c'];
$opsi_d = $_POST['opsi_d'];
$opsi_d = $_POST['opsi_e'];
$jawaban = $_POST['jawaban'];

$sql = "UPDATE soal SET 
        pertanyaan = '$pertanyaan',
        opsi_a = '$opsi_a',
        opsi_b = '$opsi_b',
        opsi_c = '$opsi_c',
        opsi_d = '$opsi_d',
        jawaban = '$jawaban'
        WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {
    echo "Soal berhasil diupdate.";
    echo "<br><a href='index.php'>Kembali ke Daftar Soal</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
