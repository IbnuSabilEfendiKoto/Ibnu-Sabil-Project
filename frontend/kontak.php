<?php

require "layout/header.php";
require "layout/navbar.php";

?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(asset/img/rooftop1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Kontak Kami</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Kontak</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Kontak -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Kontak Kami //</h6>
            <h1 class="mb-5">Kirim Permintaan Anda</h1>
        </div>
        <div class="row g-4">
            <div class="col-12">
                <div class="row gy-4">
                    <div class="col-md-4">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase">// Pemesanan //</h5>
                            <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>rooftopcar@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase">// IT Web //</h5>
                            <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>rooftop_carweb@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase">// Teknis //</h5>
                            <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>ibnusabil@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.3166890548821!2d100.38842056951886!3d-0.9527173590201065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b9714cab5b13%3A0xf4e698cfe9b3abe7!2sJl.%20Dr.%20Sutomo%20No.151b%2C%20Kubu%20Marapalam%2C%20Kec.%20Padang%20Tim.%2C%20Kota%20Padang%2C%20Sumatera%20Barat%2025221!5e0!3m2!1sid!2sid!4v1687260157871!5m2!1sid!2sid" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6" >
                <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
               
                    <h1 class="text-white mb-4">Kirim Kontak Tim Kami</h1>
                    <form method="post" action="../backend/kontak/proses_tambah.php">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input name='nama' type="text" class="form-control border-0" placeholder="Nama" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input name='email' type="email" class="form-control border-0" placeholder="Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea name='pesan' class="form-control border-0" placeholder="Permintaan"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" name='tambah' type="submit">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Kontak -->


<?php require "layout/footer.php"; ?>