<?php
include "../../koneksi.php";
$id_klien = $_GET['id_klien'];
$query = mysqli_query($con, "DELETE FROM klien WHERE id_klien ='$id_klien'");

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='klien.php';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='tambah.php';</script>";
}