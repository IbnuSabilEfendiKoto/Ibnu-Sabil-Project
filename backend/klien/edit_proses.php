<!--Ubah Proses-->

<?php

include "../../koneksi.php";

$id_klien = $_POST['id_klien'];
$nm_klien = $_POST['nm_klien'];
$pekerjaan = $_POST['pekerjaan'];
$desk_klien = $_POST['desk_klien'];
if ($_FILES['gmbr_baru']['name'] == '') {
    // jika gambar kosong
    $namafile = $_POST['gmbr_baru'];
} else {
    // jika gambar diganti (gambar baru)
    // pindahkan file
    $namafile = $_FILES['gmbr_baru']['name'];
    $namaSementara = $_FILES['gmbr_baru']['tmp_name'];

    $terupload = move_uploaded_file($namaSementara, '../asset/image_klien/' . $namafile);
}

$edit = mysqli_query($con, "UPDATE klien SET id_klien='$id_klien', nm_klien='$nm_klien', pekerjaan='$pekerjaan', gmbr_klien='$namafile', desk_klien='$desk_klien'  WHERE id_klien='$id_klien'");

if ($edit) {
    echo "<script>alert('Data Berhasil Diubah!')
    window.location = 'klien.php'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah!, Database Error!')
    </script>";
}


?>

<!--/Ubah Proses-->