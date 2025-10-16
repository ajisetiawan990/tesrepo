<?php
include 'config.php';

if (isset($_POST['update'])) {
    $id        = $_POST['id'];
    $nama      = $_POST['nama'];
    $jurusan   = $_POST['jurusan'];
    $kelas     = $_POST['kelas'];

    $query = "UPDATE siswaa 
              SET nama_siswa='$nama', jurusan='$jurusan', kelas='$kelas'
              WHERE id=$id";
                mysqli_query($conn, $query);

                header("Location: tampilsiswa.php");

}
?>
