<?php
include "../../koneksi.php";
$id_kategori = $_GET['id_kategori'];
$query = mysqli_query($con, "DELETE FROM kategori WHERE id_kategori ='$id_kategori'");

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='kategori.php';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='kategori.php';</script>";
}

?>