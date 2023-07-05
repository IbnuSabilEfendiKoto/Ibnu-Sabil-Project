<?php
include "../layout/header.php";
include "../layout/sidebar.php";
 
include "../../koneksi.php";

$data_kontak = mysqli_query($con, "SELECT * FROM kontak");
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kontak</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengirim</th>
                            <th>Email</th>
                            <th>Pesan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <!-- Array - Key - Value-->
                        <?php foreach ($data_kontak as $key => $kontak) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?php echo $kontak['nama']; ?></td>
                                <td><?php echo $kontak['email']; ?></td>
                                <td><?php echo $kontak['pesan']; ?></td>
                                <td>
                                    <a href="hapus.php?id_kontak=<?= $kontak['id_kontak'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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