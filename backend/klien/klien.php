<?php
include "../layout/header.php";
include "../layout/sidebar.php";

include "../../koneksi.php";

$data_klien = mysqli_query($con, "SELECT * FROM klien");

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Klien</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="tambah.php" class="btn btn-success" class="m-0 font-weight-bold text-primary">Tambah Klien</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr> 
                            <th>No</th>
                            <th>Nama Klien</th>
                            <th>Pekerjaan</th>
                            <th>Gambar Klien</th>
                            <th>Deskripsi Klien</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <!-- Array - Key - Value-->
                        <?php foreach ($data_klien as $key => $klien) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?php echo $klien['nm_klien'] ?></td>
                                <td><?php echo $klien['pekerjaan'] ?></td>
                                <td><img src="../asset/image_klien/<?= $klien['gmbr_klien'] ?>" width="250px" alt=""></td>
                                <td><?php echo $klien['desk_klien'] ?></td>
                                <td>
                                    <a href="edit.php?id_klien=<?= $klien['id_klien'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="hapus.php?id_klien=<?= $klien['id_klien'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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