<?php

include "../layout/header.php";
include "../layout/sidebar.php";

include "../../koneksi.php";

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5>Form Tambah Data</h5>
        </div>
        <div class="card-body">
            <form method="post" action="tambah_proses.php" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Nama Klien :</label> <br>
                    <input type="text" name="nm_klien" class="form-control" required style="width:50%" ; height=":25px;">
                </div>

                <div class="form-group">
                    <label>Pekerjaan :</label> <br>
                    <input type="text" name="pekerjaan" class="form-control" required style="width:50%" ; height=":25px;">
                </div>

                <div class="form-group">
                    <label for="formFile" class="form-label">Gambar Klien :</label>
                    <input class="form-control" type="file" id="formFile" name="gmbr_klien" style="width: 50%;">
                </div>

                <div class="form-group">
                    <label>Deskripsi Klien :</label> <br>
                    <input type="text" name="desk_klien" class="form-control" required style="width:50%" ; height=":25px;">
                </div>

                <div class="form-group" style="display: flex; gap: 10px;" >
                    <input type="submit" name="tambah" value="Simpan" class="btn btn-success"> <br>
                    <a href="klien.php" class="btn btn-warning">Kembali</a>
                </div>

            </form>
        </div>
    </div>
</div>

<?php include "../layout/footer.php"; ?>