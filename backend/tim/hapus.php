<?php
include "../../koneksi.php";
$id_tim = $_GET['id_tim'];
$query = mysqli_query($con, "DELETE FROM tim WHERE id_tim ='$id_tim'");

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='tim.php';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='tambah.php';</script>";
}