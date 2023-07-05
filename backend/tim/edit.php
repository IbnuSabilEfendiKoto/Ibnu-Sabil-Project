<?php

include "../layout/header.php";
include "../layout/sidebar.php";

include "../../koneksi.php";

//cek ke database
$id_tim = $_GET['id_tim'];
$edit_tim = mysqli_query($con, "SELECT * FROM tim WHERE id_tim='$id_tim'");

$edit_tim = mysqli_fetch_array($edit_tim);

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5>Form Edit Data Tim</h5>
        </div>
        <div class="card-body">
            <form method="post" action="edit_proses.php" enctype="multipart/form-data">
                <input type="hidden" name="id_tim" value="<?= $edit_tim['id_tim'] ?>">

                <form method="post" action="tambah_proses.php" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Nama tim :</label> <br>
                        <input type="text" name="nm_tim" value="<?= $edit_tim['nm_tim'] ?>" class="form-control" required style="width:50%" ; height=":25px;">
                    </div>

                    <div class="form-group">
                        <label>Gambar Tim :</label> <br>
                        <input type="file" name="gmbr_baru" class="form-control" style="width: 50%;" height=":25px;">
                        <input class="form-control" type="hidden" id="formFile" name="gmbr_tim" value="<?= $edit_tim['gmbr_tim'] ?>">
                        <img src="../asset/image_tim/<?php echo $edit_tim['gmbr_tim'] ?>" alt="">
                    </div>



                    <div class="form-group">
                        <label>Pekerjaan :</label> <br>
                        <input type="text" name="pekerjaan" value="<?= $edit_tim['pekerjaan'] ?>" class="form-control" required style="width:50%" ; height=":25px;">
                    </div>

                    <div class="form-group" style="display: flex; gap: 10px;">
                        <input type="submit" name="edit" value="Simpan" class="btn btn-success"> <br>
                        <a href="tim.php" class="btn btn-warning">Kembali</a>
                    </div>

                </form>
        </div>
    </div>
</div>

<?php include "../layout/footer.php"; ?>