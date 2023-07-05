<?php
include "../layout/header.php";
include "../layout/sidebar.php";

include "../../koneksi.php";

$data_tim = mysqli_query($con, "SELECT * FROM tim");

?> 

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Tim</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="tambah.php" class="btn btn-success" class="m-0 font-weight-bold text-primary">Tambah Tim</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tim</th>
                            <th>Gambar Tim</th>
                            <th>Pekerjaan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <!-- Array - Key - Value-->
                        <?php foreach ($data_tim as $key => $tim) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?php echo $tim['nm_tim'] ?></td>
                                <td><img src="../asset/image_tim/<?= $tim['gmbr_tim'] ?>" width="250px" alt=""></td>
                                <td><?php echo $tim['pekerjaan'] ?></td>
                                <td>
                                    <a href="edit.php?id_tim=<?= $tim['id_tim'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="hapus.php?id_tim=<?= $tim['id_tim'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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