<?php

require "layout/header.php";
require "layout/navbar.php";

// untuk jumlah mobil
$id_mobil = $_GET['id_mobil'];
$data_mobil = mysqli_query($con, "SELECT * FROM mobil LEFT JOIN kategori ON mobil.id_kategori=kategori.id_kategori WHERE id_mobil='$id_mobil'");


$data_mobil = mysqli_fetch_array($data_mobil);
?>

<!-- Detail Produk -->
<div class="container-fluid py-5">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-5">
                <img src="../backend/asset/image/<?= $data_mobil['gmbr_mobil']; ?>" class="w-100" alt="">
            </div>
            <div class="col-lg-6 offset-lg--1">
                <h1><?php echo $data_mobil['nm_mobil']; ?></h1>

                <p class="text-harga">
                Harga : Rp.<?= number_format($data_mobil['harga']); ?></p>
                <p>Kategori : <?= $data_mobil['nm_kategori']; ?></p>

                <p class="fs-5">
                    <?= $data_mobil['deskripsi']; ?>
                </p>
                <a href="mobil.php" class="btn btn-primary py-3 px-5 animated slideInDown">Kembali<i class="fa fa-car-right ms-3"></i></a>
            </div>
        </div>
    </div>
</div>

<?php
include "layout/footer.php";
?>