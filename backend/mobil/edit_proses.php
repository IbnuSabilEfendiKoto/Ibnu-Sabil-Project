<!--Ubah Proses-->

<?php

include "../../koneksi.php";

$id_mobil = $_POST['id_mobil'];
$id_kategori = $_POST['id_kategori'];
$nm_mobil = $_POST['nm_mobil'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
if ($_FILES['gmbr_baru']['name'] == '') {
    // jika gambar kosong
    $namafile = $_POST['gmbr_baru'];
} else {
    // jika gambar diganti (gambar baru)
    // pindahkan file
    $namafile = $_FILES['gmbr_baru']['name'];
    $namaSementara = $_FILES['gmbr_baru']['tmp_name'];

    $terupload = move_uploaded_file($namaSementara, '../asset/image/' . $namafile);
}

$edit = mysqli_query($con, "UPDATE mobil SET id_mobil='$id_mobil', id_kategori='$id_kategori', nm_mobil='$nm_mobil', harga='$harga', gmbr_mobil='$namafile', deskripsi='$deskripsi' WHERE id_mobil='$id_mobil'");

if ($edit) {
    echo "<script>alert('Data Berhasil Diubah!')
    window.location = 'mobil.php'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah!, Database Error!')
    </script>";
}


?>

<!--/Ubah Proses-->