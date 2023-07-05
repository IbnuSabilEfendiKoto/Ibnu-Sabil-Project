       <!--Tambah Proses-->

       <?php

        include "../../koneksi.php";


        if (isset($_POST['tambah'])) {
            $nm_perusahaan = $_POST['nm_perusahaan'];
            $desk_perusahaan = $_POST['desk_perusahaan'];

            $tambah = mysqli_query($con, "INSERT INTO perusahaan(nm_perusahaan,desk_perusahaan) VALUES('$nm_perusahaan','$desk_perusahaan')");

            if ($tambah) {
                echo "<script>alert('Data Berhasil Ditambahkan!')
    window.location = 'perusahaan.php'
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