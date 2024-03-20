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
        <title>Register ke Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/x-icon" href="assets/img/logo sekolah mts.png">
    </head>
    <body class="bg-info">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="card shadow-lg border-0 rounded-lg mt-4">
                                    <div class="card-header"> <img src="assets/img/logo sekolah mts.png" alt=""  style=" max-width: 40px;" ><h3 class="text-center">Register</h3></div>
                                    <div class="card-body">
                                        <?php
                                            if (isset($_POST['register'])) {
                                                $nama = $_POST['nama'];
                                                $email = $_POST['email'];
                                                $alamat = $_POST['alamat'];
                                                $username = $_POST['username'];
                                                $level = $_POST['level'];
                                                $password = md5($_POST['password']);

                                                $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,username,password,level) VALUES('$nama','$email','$alamat','$username','$password','$level')");

                                                if ($insert) {
                                                    echo '<script>alert("Selamat datang, Register Berhasil"); location.href="login.php";</script>';
                                                }else{
                                                    echo '<script>alert("Register gagal, silahkan ulangi lagi");</script>';
                                                }
                                            }
                                        ?>
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1"></label>
                                                <input class="form-control py-2" type="text" required name="nama" placeholder="Masukan Nama Lengkap">
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1"></label>
                                                <input class="form-control py-2" type="text" required name="email" placeholder="Masukan Email">
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1"></label>
                                                <textarea name="alamat" rows="5" required class="form-control py-2" placeholder="Alamat"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1"></label>
                                                <input class="form-control py-2" type="text" required name="username" placeholder="Masukan Username">
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword"></label>
                                                <input class="form-control py-2" id="inputPassword" required type="password" name= "password" placeholder="Enter Password">
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Level</label>
                                                <select name="level" required class="form-select py-2">
                                                    <option value="peminjam">Peminjam</option>
                                                    <option value="admin">Admin</option>
                                                </select>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="register" value="register">Register</button>
                                                <a class="btn btn-danger" href="login.php">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
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
