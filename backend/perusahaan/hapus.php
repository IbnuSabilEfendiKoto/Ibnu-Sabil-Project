<?php
include "../../koneksi.php";
$id_perusahaan = $_GET['id_perusahaan'];
$query = mysqli_query($con, "DELETE FROM perusahaan WHERE id_perusahaan ='$id_perusahaan'");

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='perusahaan.php';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='perusahaan.php';</script>";
}

?>