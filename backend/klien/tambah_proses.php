       <!--Tambah Proses-->

       <?php

        include "../../koneksi.php";


        if (isset($_POST['tambah'])) {
            $nm_klien = $_POST['nm_klien'];
            $pekerjaan = $_POST['pekerjaan'];
            $desk_klien = $_POST['desk_klien'];

            // ambil data file
            $namafile = $_FILES['gmbr_klien']['name'];
            $namaSementara = $_FILES['gmbr_klien']['tmp_name'];
            // pindahkan file
            $terupload = move_uploaded_file($namaSementara, '../asset/image_klien/' . $namafile);

            $tambah = mysqli_query($con, "INSERT INTO klien (nm_klien,pekerjaan,gmbr_klien,desk_klien) VALUES('$nm_klien','$pekerjaan','$namafile','$desk_klien')");


            if ($tambah) {
                echo "<script>alert('Data Berhasil Ditambahkan!')
            window.location = 'klien.php'
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