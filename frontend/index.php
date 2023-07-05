<?php

require "layout/header.php";
require "layout/navbar.php";

// untuk mengambil data mobil dari database dan menampilkan pada frontend 
$data_mobil = mysqli_query($con, "SELECT * FROM mobil LEFT JOIN kategori ON mobil.id_kategori=kategori.id_kategori LIMIT 4");

// untuk perusahaan
$data_perusahaan = mysqli_query($con, "SELECT * FROM perusahaan LIMIT 3");

//untuk klien
$data_klien = mysqli_query($con, "SELECT * FROM klien LIMIT 4");
?>


<!-- Page Header-->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="asset/img/rooftop_bg.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown">// RoofTop //</h6>
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">DAPATKAN MOBIL MENARIK SESUAI PILIHAN ANDA</h1>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                <img class="img-fluid" src="asset/img/buggati_bg.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="asset/img/rooftop_bg.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car //</h6>
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">YUK LANGSUNG CEK KE MOBIL STORE</h1>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                <img class="img-fluid" src="asset/img/ferrari_bg.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- End Page Header -->


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
<!-- End Keterangan-->


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

<!-- Produk -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Produk //</h6>
            <h1 class="mb-5">Otomotif</h1>
        </div>
        <div class="row g-4">
            <?php foreach ($data_mobil as $key => $mobil) : ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="" style="width: 100%; height: 200px; object-fit: cover;" src="../backend/asset/image/<?= $mobil['gmbr_mobil'] ?>" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn" href="mobil_detail.php?id_mobil=<?php echo $mobil['id_mobil']; ?>">LIHAT DETAIL</a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0"><?php echo $mobil['nm_mobil'] ?></h5>
                            <small><?php echo $mobil['nm_kategori'] ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End Produk -->

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