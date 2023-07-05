<?php

include "../layout/header.php";
include "../layout/sidebar.php";

include "../../koneksi.php";

//cek ke database
$id_mobil = $_GET['id_mobil'];
$edit_mobil = mysqli_query($con, "SELECT * FROM mobil WHERE id_mobil='$id_mobil'");

$edit_mobil = mysqli_fetch_array($edit_mobil);

$kategori = mysqli_query($con, 'SELECT * FROM kategori');

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5>Form Edit Data Mobil</h5>
        </div>
        <div class="card-body">
            <form method="post" action="edit_proses.php" enctype="multipart/form-data">
                <input type="hidden" name="id_mobil" value="<?= $edit_mobil['id_mobil'] ?>">

                <form method="post" action="tambah_proses.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Kategori :</label> <br>
                        <select name="id_kategori" id="" class="form-control" style="width: 50%;">
                            <option value="">--Pilih Kategori--</option>
                            <?php foreach ($kategori as $value) { ?>
                                <option <?php if ($value['id_kategori'] == $edit_mobil['id_kategori']) echo "selected"; ?> value="<?= $value['id_kategori']; ?>"><?= $value['nm_kategori']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nama Mobil :</label> <br>
                        <input type="text" name="nm_mobil" value="<?= $edit_mobil['nm_mobil'] ?>" class="form-control" required style="width:50%" ; height=":25px;">
                    </div>

                    <div class="form-group">
                        <label>Harga Mobil :</label> <br>
                        <input type="number" name="harga" value="<?= $edit_mobil['harga'] ?>" class="form-control" required style="width:50%" ; height=":25px;">
                    </div>

                    <div class="form-group">
                        <label>Gambar Mobil :</label> <br>
                        <input type="file" name="gmbr_baru" class="form-control" style="width: 50%;" height=":25px;">
                        <input class="form-control" type="hidden" id="formFile" name="gmbr_mobil" value="<?= $edit_mobil['gmbr_mobil'] ?>">
                        <img src="../asset/image/<?php echo $edit_mobil['gmbr_mobil'] ?>" alt="">
                    </div>



                    <div class="form-group">
                        <label>Deskripsi :</label> <br>
                        <input type="text" name="deskripsi" value="<?= $edit_mobil['deskripsi'] ?>" class="form-control" required style="width:50%" ; height=":25px;">
                    </div>

                    <div class="form-group" style="display: flex; gap: 10px;">
                        <input type="submit" name="edit" value="Simpan" class="btn btn-success"> <br>
                        <a href="mobil.php" class="btn btn-warning">Kembali</a>
                    </div>

                </form>
        </div>
    </div>
</div>

<?php include "../layout/footer.php"; ?>