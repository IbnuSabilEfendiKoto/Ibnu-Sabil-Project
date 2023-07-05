       <!--Tambah Proses-->

       <?php

        include "../../koneksi.php";


        if (isset($_POST['tambah'])) {
            $nm_kategori = $_POST['nm_kategori'];

            $tambah = mysqli_query($con, "INSERT INTO kategori(nm_kategori) VALUES('$nm_kategori')");

            if ($tambah) {
                echo "<script>alert('Data Berhasil Ditambahkan!')
    window.location = 'kategori.php'
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