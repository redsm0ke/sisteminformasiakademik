<?php
error_reporting(0);
session_start();

 if(isset($_SESSION['session'])){
  header("location:../../index.php");
 }

include 'assets/includes/configuration.php';
include 'assets/includes/db.php';

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
    <title>Daftar - <?php echo $tbl_website['nama_sekolah']; ?></title>
</head>


<body>
    <div class="container py-5">
    <div class="row justify-content-center align-items-center" style="height:80vh">
        <div class="col-md-12">
            <h1 class="text-center text-black mb-2">Page Not Found</h1><br>
            <div class="row">
                <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="/index.php" autocomplete="off">
                            <div class="form-group">
                            <div class="text-center m-b-md">
                                <i class="fas fa-question-circle" style="font-size: 100px"></i>
                                <br><br>
                                <h2></h2>
                                <hr>
                                <small>Halaman yang anda buka tidak ditemukan<br>
                                Silakan kembali ke halaman sebelumnya</small>
                            </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-flat btn-block">Kembali</button>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                    <br>
                    - Sistem Informasi Akademik Sekolah -<br>
                    <strong><?php echo $tahun; ?> © Kelompok 1</strong><br><hr>
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

