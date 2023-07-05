<?php

include "../layout/header.php";
include "../layout/sidebar.php";

include "../../koneksi.php";

//cek ke database
$id_klien = $_GET['id_klien'];
$edit_klien = mysqli_query($con, "SELECT * FROM klien WHERE id_klien='$id_klien'");

$edit_klien = mysqli_fetch_array($edit_klien);

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5>Form Edit Data Klien</h5>
        </div>
        <div class="card-body">
            <form method="post" action="edit_proses.php" enctype="multipart/form-data">
                <input type="hidden" name="id_klien" value="<?= $edit_klien['id_klien'] ?>">

                <form method="post" action="tambah_proses.php" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Nama Klien :</label> <br>
                        <input type="text" name="nm_klien" value="<?= $edit_klien['nm_klien'] ?>" class="form-control" required style="width:50%" ; height=":25px;">
                    </div>

                    <div class="form-group">
                        <label>Pekerjaan :</label> <br>
                        <input type="text" name="pekerjaan" value="<?= $edit_klien['pekerjaan'] ?>" class="form-control" required style="width:50%" ; height=":25px;">
                    </div>

                    <div class="form-group">
                        <label>Gambar Klien :</label> <br>
                        <input type="file" name="gmbr_baru" class="form-control" style="width: 50%;" height=":25px;">
                        <input class="form-control" type="hidden" id="formFile" name="gmbr_klien" value="<?= $edit_klien['gmbr_klien'] ?>">
                        <img src="../asset/image_klien/<?php echo $edit_klien['gmbr_klien'] ?>" alt="">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Klien :</label> <br>
                        <input type="text" name="desk_klien" value="<?= $edit_klien['desk_klien'] ?>" class="form-control" required style="width:50%" ; height=":25px;">
                    </div>

                    <div class="form-group" style="display: flex; gap: 10px;">
                        <input type="submit" name="edit" value="Simpan" class="btn btn-success"> <br>
                        <a href="klien.php" class="btn btn-warning">Kembali</a>
                    </div>

                </form>
        </div>
    </div>
</div>

<?php include "../layout/footer.php"; ?>