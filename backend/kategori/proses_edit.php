<!--Ubah Proses-->

<?php

include "../../koneksi.php";

if (isset($_POST['edit'])) {
    $id_kategori = $_POST['id_kategori'];
    $nm_kategori = $_POST['nm_kategori'];

    $edit = mysqli_query($con, "UPDATE kategori SET nm_kategori='$nm_kategori' WHERE id_kategori='$id_kategori' ");

    if ($edit) {
        echo "<script>alert('Data Berhasil Diubah!')
    window.location = 'kategori.php'
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Diubah!, Database Error!')
    </script>";
    }
}

?>

<!--/Ubah Proses-->