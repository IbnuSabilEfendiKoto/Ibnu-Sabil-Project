<?php
include "../../koneksi.php";
$id_mobil = $_GET['id_mobil'];
$query = mysqli_query($con, "DELETE FROM mobil WHERE id_mobil ='$id_mobil'");

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='mobil.php';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='tambah.php';</script>";
}
