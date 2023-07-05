       <!--Tambah Proses-->

       <?php

        include "../../koneksi.php";


        if (isset($_POST['tambah'])) {
            $nm_tim = $_POST['nm_tim'];
            $pekerjaan = $_POST['pekerjaan'];

            // ambil data file
            $namafile = $_FILES['gmbr_tim']['name'];
            $namaSementara = $_FILES['gmbr_tim']['tmp_name'];
            // pindahkan file
            $terupload = move_uploaded_file($namaSementara, '../asset/image_tim/' . $namafile);

            $tambah = mysqli_query($con, "INSERT INTO tim (nm_tim,gmbr_tim,pekerjaan) VALUES('$nm_tim','$namafile','$pekerjaan')");


            if ($tambah) {
                echo "<script>alert('Data Berhasil Ditambahkan!')
            window.location = 'tim.php'
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