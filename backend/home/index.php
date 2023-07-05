<?php
 
include "../layout/header.php";
include "../layout/sidebar.php";

include "../../koneksi.php";

$query = mysqli_query($con, "SELECT COUNT(id_kategori)as jumlah_kategori FROM kategori");

$data_kategori = mysqli_fetch_array($query);

$query = mysqli_query($con, "SELECT COUNT(id_mobil)as jumlah_mobil FROM mobil");

$data_mobil = mysqli_fetch_array($query);


?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="../kategori/kategori.php">Kategori Mobil</a></div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_kategori['jumlah_kategori'] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-align-justify fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                <a href="../mobil/mobil.php"> Jenis Mobil </a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_mobil['jumlah_mobil'] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-car fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<!-- /.container-fluid -->


<?php
include "../layout/footer.php";
?>