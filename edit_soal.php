<?php 
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM soal WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Soal</title>
</head>
<body>
    <h1>Edit Soal</h1>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <label for="pertanyaan">Pertanyaan:</label><br>
        <textarea name="pertanyaan" id="pertanyaan" rows="4" required><?php echo $data['pertanyaan']; ?></textarea><br><br>
        
        <label for="opsi_a">Opsi A:</label>
        <input type="text" name="opsi_a" id="opsi_a" value="<?php echo $data['opsi_a']; ?>" required><br>
        
        <label for="opsi_b">Opsi B:</label>
        <input type="text" name="opsi_b" id="opsi_b" value="<?php echo $data['opsi_b']; ?>" required><br>
        
        <label for="opsi_c">Opsi C:</label>
        <input type="text" name="opsi_c" id="opsi_c" value="<?php echo $data['opsi_c']; ?>" required><br>
        
        <label for="opsi_d">Opsi D:</label>
        <input type="text" name="opsi_d" id="opsi_d" value="<?php echo $data['opsi_d']; ?>" required><br>

        <label for="opsi_e">Opsi E:</label>
        <input type="text" name="opsi_e" id="opsi_e" value="<?php echo $data['opsi_e']; ?>" required><br>
        
        <label for="jawaban">Jawaban Benar:</label>
        <select name="jawaban" id="jawaban" required>
            <option value="A" <?php if ($data['jawaban'] == 'A') echo 'selected'; ?>>A</option>
            <option value="B" <?php if ($data['jawaban'] == 'B') echo 'selected'; ?>>B</option>
            <option value="C" <?php if ($data['jawaban'] == 'C') echo 'selected'; ?>>C</option>
            <option value="D" <?php if ($data['jawaban'] == 'D') echo 'selected'; ?>>D</option>
            <option value="D" <?php if ($data['jawaban'] == 'E') echo 'selected'; ?>>D</option>
        </select><br><br>
        
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
