<?php
include 'config.php';
$kelasResult = mysqli_query($conn, "SELECT * FROM kelas");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>
    <h2>Tambah Siswa</h2>

    <form method="post" action="tambahsiswa.php">
        Nama Siswa: <input type="text" name="nama" required><br><br>
        Jurusan: <input type="text" name="jurusan" required><br><br>

        Kelas:
        <select name="kelas" required>
            <option value="">-- Pilih Kelas --</option>
            <?php while ($k = mysqli_fetch_assoc($kelasResult)): ?>
                <option value="<?= $k['id'] ?>">
                    <?= $k['kelas'] ?>
                </option>
            <?php endwhile; ?>
        </select>
        <br><br>

        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>
