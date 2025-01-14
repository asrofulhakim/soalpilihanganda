<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM soal WHERE id = '$id'";

if (mysqli_query($conn, $query)) {
    echo "Soal berhasil dihapus.";
    echo "<br><a href='index.php'>Kembali ke Daftar Soal</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
