<?php
include 'config.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Ambil data siswa berdasarkan ID
$siswaResult = mysqli_query($conn, "SELECT * FROM siswaa WHERE id = $id");
$siswa = mysqli_fetch_assoc($siswaResult);

// Ambil data kelas untuk dropdown
$kelasResult = mysqli_query($conn, "SELECT * FROM kelas");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>

    <form method="post" action="ubahsiswa.php">
        <input type="hidden" name="id" value="<?= $siswa['id'] ?>">

        Nama Siswa: 
        <input type="text" name="nama" value="<?= $siswa['nama_siswa'] ?>" required><br><br>

        Jurusan: 
        <input type="text" name="jurusan" value="<?= $siswa['jurusan'] ?>" required><br><br>

        Kelas:
        <select name="kelas" required>
            <option value="">-- Pilih Kelas --</option>
            <?php while ($k = mysqli_fetch_assoc($kelasResult)): ?>
                <option value="<?= $k['id'] ?>" 
                    <?= ($k['id'] == $siswa['kelas']) ? 'selected' : '' ?>>
                    <?= $k['kelas'] ?>
                </option>
            <?php endwhile; ?>
        </select>
        <br><br>

        <button type="submit" name="update">Ubah</button>
    </form>
</body>
</html>
