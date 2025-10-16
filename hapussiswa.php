<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM siswaa WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: tampilsiswa.php");
}
?>
