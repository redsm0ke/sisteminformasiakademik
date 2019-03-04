<?php
session_start();

 if(isset($_SESSION['session'])){
  } else {
  header("Location:account/login?msg=login");
}

##############################################

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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/solid.js"></script>
    <script src="assets/js/fontawesome.js"></script>
    <title>Beranda - <?php echo $tbl_website['nama_sekolah']; ?></title>
</head>

<body>

    <div class="wrapper">
        <?php
            include 'sidebar.php';
        ?>
        <!-- INI TEMPAT HEADER -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-sign-out-alt" style="font-size:30px"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <h2>Beranda</h2>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              Selamat datang di <strong>Sistem Informasi Akademik</strong> <?php echo $tbl_website['nama_sekolah']; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <!--------------------------------------------
                               PESAN
            !-------------------------------------------->

            <?php
            if ($_GET['msg'] == "denied") {
                echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Anda tidak memiliki hak akses untuk ke halaman tersebut</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
            }
            ?>

            <!--------------------------------------------
                               PESAN
            !-------------------------------------------->

<!--
Berita Terbaru
!-->
<div class="card bg-light mb-3" style="max-width: 40rem;">
  <div class="card-header">Berita Terbaru</div>
  <div class="card-body">

        <?php
        include 'assets/includes/db.php';
        $sql_user     = mysqli_query($db,"SELECT * FROM tbl_berita LIMIT 4");
        $no=0;
        while ($data  = mysqli_fetch_array($sql_user)) {
            $no_urut  = $data['no_urut'];
            $judul    = $data['judul'];
            $isi      = $data['isi'];
            $tanggal  = $data['tanggal'];
            $penulis  = $data['penulis'];
            $no++;
 
            echo '
    <a href="manage/berita/view?id='.$no_urut.'">'.$judul.'</a><br>
        <small>'.$tanggal.' • '.$penulis.'</small>
        <hr>
';
}
?>

  </div>
</div>

<!--
Jumlah siswa
!-->
<div class="card bg-light mb-3" style="max-width: 28rem;">
  <div class="card-header">Jumlah Siswa</div>
  <div class="card-body">

    Kelas 10
    <div class="progress">
        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 24%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    Kelas 11
    <div class="progress">
        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 64%" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    Kelas 12
    <div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br>   
    <button type="button" class="btn btn-primary btn-sm" style="width:35px; height: 18px"></button>
    Kelas 10: 24 Siswa<br>
    <button type="button" class="btn btn-success btn-sm" style="width:35px; height: 18px"></button>
    Kelas 11: 64 Siswa<br>
    <button type="button" class="btn btn-warning btn-sm" style="width:35px; height: 18px"></button>
    Kelas 12: 12 Siswa

    <hr>

    Total Siswa: 100 Siswa
  </div>
</div>
        </div>
    </div>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>