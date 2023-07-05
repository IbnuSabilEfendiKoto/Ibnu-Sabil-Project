<?php

require "layout/header.php";
require "layout/navbar.php";

// get produk by nama produk 
if (!isset($_GET['kategori']) || $_GET['kategori'] == 'all') {
    $data_mobil = mysqli_query($con, "SELECT * FROM mobil LEFT JOIN kategori ON mobil.id_kategori=kategori.id_kategori");
    $countData = mysqli_num_rows($data_mobil);
}
//get produk by kategori
else if (isset($_GET['kategori'])) {
    $id_kategori = $_GET['kategori'];
    $data_mobil = mysqli_query($con, "SELECT * FROM mobil LEFT JOIN kategori ON mobil.id_kategori=kategori.id_kategori WHERE mobil.id_kategori='$id_kategori'");
    $countData = mysqli_num_rows($data_mobil);
} else {
    $countData = 0;
}

// untuk kategori
$data_kategori = mysqli_query($con, "SELECT * FROM kategori");

//untuk klien
$data_klien = mysqli_query($con, "SELECT * FROM klien");
?>


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(asset/img/rooftop1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Halaman Mobil</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Mobil</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Produk-->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Produk //</h6>
            <h1 class="mb-5">Otomotif</h1>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h3>Kategori</h3>
                <ul class="list-group">
                    <a class="no-decoration" href="mobil.php?kategori=all">
                        <li class="list-group-item">||Semua||</li>
                    </a>
                    <?php while ($kategori = mysqli_fetch_array($data_kategori)) { ?>
                        <a class="no-decoration" href="mobil.php?kategori=<?php echo $kategori['id_kategori']; ?>">
                            <li class="list-group-item"><?php echo $kategori['nm_kategori']; ?></li>
                        </a>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-md-10">
                <div class="row g-4">
                    <?php
                    if ($countData <= 0) {
                    ?>
                        <h4 class="text-center my-5">Mobil Tidak Tersedia</h4>
                    <?php
                    } else { ?>
                        <?php foreach ($data_mobil as $key => $mobil) : ?>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="team-item">
                                    <div class="position-relative overflow-hidden">
                                        <img class="" style="width: 100%; height: 200px; object-fit: cover;" src="../backend/asset/image/<?= $mobil['gmbr_mobil'] ?>" alt="">
                                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                            <a class="btn" href="mobil_detail.php?id_mobil=<?php echo $mobil['id_mobil']; ?>">LIHAT DETAIL</a>
                                        </div>
                                        <div class="bg-light text-center p-4">
                                            <h5 class="fw-bold mb-0"><?php echo $mobil['nm_mobil'] ?></h5>
                                            <small><?php echo $mobil['nm_kategori'] ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Produk -->

<!-- Jumlah Mobil -->
<div class="container-fluid fact bg-dark my-5 py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-car fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up"><?= $jmlh_kategori['jumlah_kategori'] ?></h2>
                <p class="text-white mb-0">Kategori Mobil</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-car fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up"><?= $jmlh_mobil['jumlah_mobil'] ?></h2>
                <p class="text-white mb-0">Jenis Mobil</p>
            </div>
        </div>
    </div>
</div>
<!-- End Jumlah Mobil -->

<!-- Testimoni -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="text-primary text-uppercase">// Testimoni //</h6>
            <h1 class="mb-5">Klien Kami</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <?php foreach ($data_klien as $key => $klien) : ?>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="../backend/asset/image_klien/<?= $klien['gmbr_klien'] ?>" style="width: 80px; height: 80px;">
                    <h5 class="mb-0"><?php echo $klien['nm_klien'] ?></h5>
                    <p><?php echo $klien['pekerjaan'] ?></p>
                    <div class="tesklienonial-text bg-light text-center p-4">
                        <p class="mb-0">"<?php echo $klien['desk_klien'] ?>"</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End Testimoni -->




<?php require "layout/footer.php"; ?>