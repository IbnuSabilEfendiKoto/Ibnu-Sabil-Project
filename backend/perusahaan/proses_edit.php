<!--Ubah Proses-->

<?php

include "../../koneksi.php";

if (isset($_POST['edit'])) {
    $id_perusahaan = $_POST['id_perusahaan'];
    $nm_perusahaan = $_POST['nm_perusahaan'];
    $desk_perusahaan = $_POST['desk_perusahaan'];

    $edit = mysqli_query($con, "UPDATE perusahaan SET nm_perusahaan='$nm_perusahaan', desk_perusahaan='$desk_perusahaan'  WHERE id_perusahaan='$id_perusahaan' ");

    if ($edit) {
        echo "<script>alert('Data Berhasil Diubah!')
    window.location = 'perusahaan.php'
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Diubah!, Database Error!')
    </script>";
    }
}

?>

<!--/Ubah Proses-->