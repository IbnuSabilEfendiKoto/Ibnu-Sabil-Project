<?php

include "../layout/header.php";
include "../layout/sidebar.php";

include "../../koneksi.php";

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5>Form Tambah Data Perusahaan</h5>
        </div>
        <div class="card-body">
            <form method="post" action="proses_tambah.php">
                <div class="form-group">
                    <label>Nama Perusahaan :</label> <br>
                    <input type="text" name="nm_perusahaan" class="form-control"required style="width:50%" ; height=":25px;">
                </div>

                <div class="form-group">
                    <label>Deskripsi Perusahaan :</label> <br>
                    <input type="text" name="desk_perusahaan" class="form-control"required style="width:50%" ; height=":25px;">
                </div>

                <div class="form-group" style="display: flex; gap: 10px;" >
                <input type="submit" name="tambah" value="Tambah" class="btn btn-success"> <br>
                <a href="perusahaan.php" class="btn btn-warning">Kembali</a>
                </div>

            </form>
        </div>
    </div>
</div>

<?php include "../layout/footer.php"; ?>