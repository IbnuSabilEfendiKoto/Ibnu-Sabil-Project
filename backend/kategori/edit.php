<?php

include "../layout/header.php";
include "../layout/sidebar.php";

include "../../koneksi.php";

//cek ke database
$id_kategori = $_GET['id_kategori'];
$edit_kategori = mysqli_query($con, "SELECT * FROM kategori WHERE id_kategori='$id_kategori'");

$edit_kategori = mysqli_fetch_array($edit_kategori);

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5>Form Edit Data Kategori</h5>
        </div>
        <div class="card-body">
            <form method="post" action="proses_edit.php">
                <input type="hidden" name="id_kategori" value="<?= $edit_kategori['id_kategori'] ?>">
                <div class="form-group">
                    <label>Nama Kategori :</label> <br>
                    <input type="text" name="nm_kategori" value="<?= $edit_kategori['nm_kategori'] ?>" class="form-control" required style="width:50%" ; height=":25px;">
                </div>

                <div class="form-group" style="display: flex; gap: 10px;" >
                <input type="submit" name="edit" value="Simpan" class="btn btn-success"> <br>
                <a href="Kategori.php" class="btn btn-warning">Kembali</a>
                </div>

            </form>
        </div>
    </div>
</div>

<?php include "../layout/footer.php"; ?>