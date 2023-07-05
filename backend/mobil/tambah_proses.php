       <!--Tambah Proses-->

       <?php

        include "../../koneksi.php";


        if (isset($_POST['tambah'])) {
            $id_kategori = $_POST['id_kategori'];
            $nm_mobil = $_POST['nm_mobil'];
            $harga = $_POST['harga'];
            $deskripsi = $_POST['deskripsi'];

            // ambil data file
            $namafile = $_FILES['gmbr_mobil']['name'];
            $namaSementara = $_FILES['gmbr_mobil']['tmp_name'];
            // pindahkan file
            $terupload = move_uploaded_file($namaSementara, '../asset/image/' . $namafile);

            $tambah = mysqli_query($con, "INSERT INTO mobil (id_kategori,nm_mobil,harga,gmbr_mobil,deskripsi) VALUES('$id_kategori','$nm_mobil','$harga','$namafile','$deskripsi')");


            if ($tambah) {
                echo "<script>alert('Data Berhasil Ditambahkan!')
            window.location = 'mobil.php'
            </script>";
            } else {
                echo "<script>
            alert('Data Gagal Ditambahkan!, Database Error!')
            window.location = 'tambah.php'
            </script>";
            }
        }

        ?>

       <!--/Tambah Proses-->