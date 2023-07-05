<?php
include "../../koneksi.php";
$id_kontak = $_GET['id_kontak'];
$query = mysqli_query($con, "DELETE FROM kontak WHERE id_kontak ='$id_kontak'");

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='kontak.php';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='kontak.php';</script>";
}

?>