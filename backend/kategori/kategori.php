<?php
include "../layout/header.php";
include "../layout/sidebar.php";

include "../../koneksi.php";
 
$data_kategori = mysqli_query($con, "SELECT * FROM kategori");
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kategori</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="tambah.php" class="btn btn-success" class="m-0 font-weight-bold text-primary">Tambah Kategori</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kendaraan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <!-- Array - Key - Value-->
                        <?php foreach ($data_kategori as $key => $kategori) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?php echo $kategori['nm_kategori'] ?></td>
                                <td>
                                    <a href="edit.php?id_kategori=<?= $kategori['id_kategori'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="hapus.php?id_kategori=<?= $kategori['id_kategori'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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