<?php
include 'config.php';

// Ambil data siswa + nama kelas (LEFT JOIN)
$result = mysqli_query($conn, "
    SELECT s.id, s.nama_siswa, s.jurusan, k.kelas
    FROM siswaa s
    LEFT JOIN kelas k ON s.kelas = k.id
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
    <h2>Daftar Siswa</h2>
    <a href="formtambahsiswa.php">+ Tambah Siswa</a>
    <br><br>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama_siswa'] ?></td>
            <td><?= $row['jurusan'] ?></td>
            <td><?= $row['kelas'] ?: '-' ?></td>
            <td>
                <a href="formubahsiswa.php?id=<?= $row['id'] ?>">Ubah</a> |
                <a href="hapussiswa.php?id=<?= $row['id'] ?>" onclick="return confirm('Anis mau hapus ya?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
