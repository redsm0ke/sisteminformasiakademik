<?php
error_reporting(0);
session_start();

 if(isset($_SESSION['session'])){
  header("location:../../index.php");
 }

include '../../assets/includes/configuration.php';
include '../../assets/includes/db.php';

##############################################

    $result   = mysqli_query($db,"SELECT * FROM tbl_user");
    $row      = mysqli_fetch_array($result);
    $level    = $row['level'];
      
    $sql_website    = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website    = mysqli_fetch_array($sql_website);
##############################################
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/solid.js"></script>
    <script src="../../assets/js/fontawesome.js"></script>
    <script src="../../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <title>Masuk - <?php echo $tbl_website['nama_sekolah']; ?></title>
</head>


<body>
    <div class="container py-5">
    <div class="row justify-content-center align-items-center" style="height:80vh">
        <div class="col-md-12">
            <h3 class="text-center text-black mb-2"><?php echo $tbl_website['nama_sekolah']; ?></h3>
            <small>
                <div class="text-center text-black mb-4">Silahkan login menggunakan akun anda</div>
            </small>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <form action="doLogin.php" method="POST">
                        <?php
                        if ($_GET['msg'] == "gagal") {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Username atau password anda salah
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>';
                        }

                        if ($_GET['msg'] == "login") {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Silakan login terlebih dahulu
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>';
                        }

                        if ($_GET['msg'] == "logout") {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Anda telah logout
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>';
                        }
                        ?>
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username" required>
                            </div>
                        
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-flat btn-block">Masuk</button>
                    
                            <div class="text-center m-b-md">
                            <br>
                                <small>Belum punya akun ? Daftar
                                    <a href="../daftar" style="color: #0068FF">Klik Disini</a>
                                </small>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="col-md-12 mx-auto text-center">
                    <br>
                    - Sistem Informasi Akademik Sekolah -<br>
                    <strong><?php echo $tahun; ?> © Kelompok 1</strong><br>
                    <div class="col-md-6 mx-auto text-center"><hr>
                    <label class="control-label">
                        Coded with <i class="fas fa-heart" style="color: red"></i> by Kelompok 1
                    </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>