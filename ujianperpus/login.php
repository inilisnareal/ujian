<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login ke Perpustakaan Digital</title>
        <link rel="icon" type="image/x-icon" href="asset/img/logo sekolah mts.png">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><img src="assets/img/logo sekolah mts.png" alt=""  style=" max-width: 40px;" ><h3 class="text-center font-weight-light my-3">Silahkan Login</div></h3>
                                    <div class="card-body">
                                        <?php
                                            if (isset($_POST['login'])) {
                                                $username = $_POST['username'];
                                                $password = md5($_POST['password']);

                                                $data = mysqli_query($koneksi, "SELECT*FROM user where username='$username' and password='$password'");
                                                $cek = mysqli_num_rows($data);
                                                if($cek > 0){
                                                    $_SESSION['user'] = mysqli_fetch_array($data);
                                                    echo '<script>alert("Selamat datang, Login Berhasil"); location.href="index.php";</script>';
                                                }else {
                                                    echo '<script>alert("Maaf, Username/Password salah")</script>';
                                                }
                                            }
                                        ?>
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmail"></label>
                                                <input class="form-control py-2" id="inputEmail" type="text" name="username" placeholder="Enter Username">
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword"></label>
                                                <input class="form-control py-2" id="inputPassword" type="password" name= "password" placeholder="Enter Password">
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="login" value="login">Login</button>
                                                <a class="btn btn-danger" href="register.php">Register</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-4">
                                        <div class="small">
                                            &copy; SMK MTS
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
