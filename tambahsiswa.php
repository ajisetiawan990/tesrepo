<?php
include 'config.php';

if (isset($_POST['simpan'])) {
    $nama_siswa = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];

    $query = "INSERT INTO siswaa (nama_siswa, jurusan, kelas) 
        VALUES ('$nama_siswa', '$jurusan', '$kelas')";
            mysqli_query($conn, $query);

    header("Location: index.php");
}
?>
