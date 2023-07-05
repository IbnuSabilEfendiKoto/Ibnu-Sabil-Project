<?php

include "../layout/header.php";
include "../layout/sidebar.php";

include "../../koneksi.php";

//cek ke database
$id_perusahaan = $_GET['id_perusahaan'];
$edit_perusahaan = mysqli_query($con, "SELECT * FROM perusahaan WHERE id_perusahaan='$id_perusahaan'");

$edit_perusahaan = mysqli_fetch_array($edit_perusahaan);

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5>Form Edit Data Perusahaan</h5>
        </div>
        <div class="card-body">
            <form method="post" action="proses_edit.php">
                <input type="hidden" name="id_perusahaan" value="<?= $edit_perusahaan['id_perusahaan'] ?>">
                <div class="form-group">
                    <label>Nama perusahaan :</label> <br>
                    <input type="text" name="nm_perusahaan" value="<?= $edit_perusahaan['nm_perusahaan'] ?>" class="form-control" required style="width:50%" ; height=":25px;">
                </div>

                <div class="form-group">
                    <label>Deskripsi perusahaan :</label> <br>
                    <input type="text" name="desk_perusahaan" value="<?= $edit_perusahaan['desk_perusahaan'] ?>" class="form-control" required style="width:50%" ; height=":25px;">
                </div>

                <div class="form-group" style="display: flex; gap: 10px;" >
                <input type="submit" name="edit" value="Simpan" class="btn btn-success"> <br>
                <a href="perusahaan.php" class="btn btn-warning">Kembali</a>
                </div>

            </form>
        </div>
    </div>
</div>

<?php include "../layout/footer.php"; ?>