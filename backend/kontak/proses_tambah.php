       <!--Tambah Proses-->

       <?php

        include "../../koneksi.php";


        if (isset($_POST['tambah'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $pesan = $_POST['pesan'];

            $tambah = mysqli_query($con, "INSERT INTO kontak (nama,email,pesan) VALUES ('$nama','$email','$pesan')");

            if ($tambah) {
                echo "<script>alert('Pesan Berhasil Dikirim')
    window.location = '../../frontend/kontak.php'
    </script>";
            } else {
                echo "<script>
    alert('Pesan Gagal Dikirim')
    window.location = '../../frontend/kontak.php'
    </script>";
            }
        }

        ?>

       <!--/Tambah Proses-->