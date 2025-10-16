<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "data_sekolah";

$conn = mysqli_connect($host, $user, $pass,$db);

// Mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil!";