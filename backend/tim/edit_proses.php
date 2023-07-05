<!--Ubah Proses-->

<?php

include "../../koneksi.php";

$id_tim = $_POST['id_tim'];
$nm_tim = $_POST['nm_tim'];
$pekerjaan = $_POST['pekerjaan'];
if ($_FILES['gmbr_baru']['name'] == '') {
    // jika gambar kosong
    $namafile = $_POST['gmbr_baru'];
} else {
    // jika gambar diganti (gambar baru)
    // pindahkan file
    $namafile = $_FILES['gmbr_baru']['name'];
    $namaSementara = $_FILES['gmbr_baru']['tmp_name'];

    $terupload = move_uploaded_file($namaSementara, '../asset/image_tim/' . $namafile);
}

$edit = mysqli_query($con, "UPDATE tim SET id_tim='$id_tim', nm_tim='$nm_tim', gmbr_tim='$namafile', pekerjaan='$pekerjaan' WHERE id_tim='$id_tim'");

if ($edit) {
    echo "<script>alert('Data Berhasil Diubah!')
    window.location = 'tim.php'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah!, Database Error!')
    </script>";
}


?>

<!--/Ubah Proses-->