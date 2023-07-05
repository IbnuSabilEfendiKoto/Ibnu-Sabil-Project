<?php

require "layout/header.php";
require "layout/navbar.php";

// untuk tim
$data_tim = mysqli_query($con, "SELECT * FROM tim");

// untuk keterangan perusahaan
$data_perusahaan = mysqli_query($con, "SELECT * FROM perusahaan");
?>


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(asset/img/rooftop1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Tentang Kami</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Tentang</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Keterangan -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($data_perusahaan as $key => $perusahaan) : ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex bg-light py-5 px-4" style="height: 300px;">
                        <i class="fa fa-car fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3"><?php echo $perusahaan['nm_perusahaan'] ?></h5>
                            <p><?php echo $perusahaan['desk_perusahaan'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End Keterangan -->

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

<!-- Tentang -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pt-4" style="min-height: 400px;">
                <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                    <img class="position-absolute img-fluid w-100 h-100" src="asset/img/rooftop1.jpg" style="object-fit: cover;" alt="">
                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                        <h1 class="display-4 text-white mb-0">5 <span class="fs-4">Tahun</span></h1>
                        <h4 class="text-white">Pengalaman</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h6 class="text-primary text-uppercase">// Tentang Kami //</h6>
                <h1 class="mb-4"><span class="text-primary">RoofTop Car</span> Adalah Pilihan Yang Tepat Untuk Memilih Mobil Anda</h1>
                <p class="mb-4">Sebagai Perusahaan yang bergerak dalam bidang otomotif, PT. RoofTop Car yang mempunyai komitmen tinggi dalam memberikan pelayanan terbaik kepada setiap pelanggannya. Untuk mengukuhkan komitmen tersebut manajemen telah mencanangkan adanya mutu dalam penyediaan dan pelayanan produk otomotif/ jasa yang dihasilkan dan dilaksanakan serta terpelihara disemua tingkatan sehingga dapat memberikan jaminan yang pasti terhadap setiap bentuk produk otomotif yang diberikan dalam semua kegiatan operasinya.</p>
                <div class="row g-4 mb-3 pb-3">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">01</span>
                            </div>
                            <div class="ps-3">
                                <h6>Penghargaan Dibidang Otomoif</h6>
                                <span>Mendapatkan Penghargaan Melalui Lebih Banyak Kendaraan Yang Sesuai Dengan Pasaran Otomotif</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">02</span>
                            </div>
                            <div class="ps-3">
                                <h6>Penghargaan Dibidang Jasa Serta Pelayanan</h6>
                                <span>Mendapatkan Penghargaan Melalui Pelayanan Serta Jasa Yang Mampu Memuaskan Para Konsumen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Tentang -->

<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Tim Kami //</h6>
            <h1 class="mb-5">Anggota Tim Kami</h1>
        </div>
        <div class="row g-4">
            <?php foreach ($data_tim as $key => $tim) : ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="../backend/asset/image_tim/<?= $tim['gmbr_tim'] ?>" alt="" style="width: 100%; height: 400px; object-fit: cover;">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0"><?php echo $tim['nm_tim'] ?></h5>
                            <small><?php echo $tim['pekerjaan'] ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Team End -->

<?php require "layout/footer.php"; ?>