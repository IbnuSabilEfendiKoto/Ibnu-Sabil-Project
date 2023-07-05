<?php

include "../layout/header.php";
include "../layout/sidebar.php";

include "../../koneksi.php";

$kategori = mysqli_query($con, 'SELECT * FROM kategori');

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
                    <label>Kategori :</label> <br>
                    <select name="id_kategori" id="" class="form-control" style="width: 50%;">
                        <option value="">--Pilih Kategori--</option>
                        <?php foreach ($kategori as $value) { ?>
                            <option value="<?= $value['id_kategori']; ?>"><?= $value['nm_kategori']; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nama Mobil :</label> <br>
                    <input type="text" name="nm_mobil" class="form-control" required style="width:50%" ; height=":25px;">
                </div>

                <div class="form-group">
                    <label>Harga Mobil :</label> <br>
                    <input type="number" name="harga" class="form-control" required style="width:50%" ; height=":25px;">
                </div>

                <div class="form-group">
                    <label for="formFile" class="form-label">Gambar Mobil :</label>
                    <input class="form-control" type="file" id="formFile" name="gmbr_mobil" style="width: 50%;">
                </div>

                <div class="form-group">
                    <label>Deskripsi :</label> <br>
                    <input type="text" name="deskripsi" class="form-control" required style="width:50%" ; height=":25px;">
                </div>

                <div class="form-group" style="display: flex; gap: 10px;" >
                    <input type="submit" name="tambah" value="Simpan" class="btn btn-success"> <br>
                    <a href="mobil.php" class="btn btn-warning">Kembali</a>
                </div>

            </form>
        </div>
    </div>
</div>

<?php include "../layout/footer.php"; ?>