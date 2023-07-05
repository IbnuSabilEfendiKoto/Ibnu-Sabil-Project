<?php
include "../layout/header.php";
include "../layout/sidebar.php";

include "../../koneksi.php";

$data_mobil = mysqli_query($con, "SELECT * FROM mobil JOIN kategori ON mobil.id_kategori=kategori.id_kategori");

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Mobil</h1>
 
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="tambah.php" class="btn btn-success" class="m-0 font-weight-bold text-primary">Tambah Mobil</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Nama Mobil</th>
                            <th>Harga Mobil</th>
                            <th>Gambar Mobil</th>
                            <th>Deskripsi Mobil</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <!-- Array - Key - Value-->
                        <?php foreach ($data_mobil as $key => $mobil) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?php echo $mobil['nm_kategori'] ?></td>
                                <td><?php echo $mobil['nm_mobil'] ?></td>
                                <td>Rp. <?php echo number_format($mobil['harga']) ?></td>
                                <td><img src="../asset/image/<?= $mobil['gmbr_mobil'] ?>" width="250px" alt=""></td>
                                <td><?php echo $mobil['deskripsi'] ?></td>
                                <td>
                                    <a href="edit.php?id_mobil=<?= $mobil['id_mobil'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="hapus.php?id_mobil=<?= $mobil['id_mobil'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php
include "../layout/footer.php";
?>