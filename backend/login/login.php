<?php
session_start();
require "../../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../fontawesome/css/fontawesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>

<body>

    <section class="vh-150 gradient-custom">
        <div class="container py-4 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form action="" method="POST">
                                <div class="mb-md-5 mt-md-4">
 
                                    <h2 class="fw-bold mb-2 text-uppercase mb-4">Login</h2>
                                    <p class="text-white-50 mb-5">Please enter your Username and Password!</p>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="username">Username : </label>
                                        <input type="username" id="username" name="username" class="form-control d-inline-block form-control-lg" placeholder="username" />
                                        <i class="bi bi-person"></i>
                                    </div>

                                    <div class="form-outline form-white">
                                        <label class="form-label" for="password">Password : </label>
                                        <input type="password" id="myInput" name="password" class="form-control d-inline-block form-control-lg" placeholder="password" />
                                        <i class="bi bi-eye-slash" onclick="myFunction()"></i>
                                    </div>
                                    <br>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="loginbtn">Login</button>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">Lupa Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="#">Buat Akun Baru!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-3" style="width: 500px">
                <?php
                if (isset($_POST['loginbtn'])) {
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);

                    $query = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
                    $countdata = mysqli_num_rows($query);
                    $data = mysqli_fetch_array($query);

                    if ($countdata > 0) {
                        if (md5($password) == $data['password']) {
                            $_SESSION['username'] = $data['username'];
                            $_SESSION['login'] = true;
                            header('location: ../home/');
                        } else {
                ?>
                            <script>
                                alert('Password Salah')
                            </script>
                        <?php
                        }
                    } else {
                        ?>
                        <script>
                            alert('Akun tidak tersedia')
                        </script>
                <?php
                    }
                }
                ?>
            </div>

        </div>
    </section>

    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

</body>

</html>