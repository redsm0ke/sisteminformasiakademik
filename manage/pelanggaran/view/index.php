<?php
error_reporting(0);
session_start();

 if(isset($_SESSION['session'])){
  } else {
  header("Location: /account/login?msg=login");
}

##############################################

include '../../../assets/includes/configuration.php';
include '../../../assets/includes/db.php';

##############################################
    
    $id         = $_GET['id'];
    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user");
    $tbl_user   = mysqli_fetch_array($sql_user);
      
    $sql_pelanggaran   = mysqli_query($db,"SELECT * FROM tbl_pelanggaran WHERE no_urut = '$id'");
    $tbl_pelanggaran   = mysqli_fetch_array($sql_pelanggaran);

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
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/solid.js"></script>
    <script src="/assets/js/fontawesome.js"></script>
    <title>Lihat Pelanggaran - <?php echo $tbl_website['nama_sekolah']; ?></title></h3>
</head>

<body>

    <div class="wrapper">
        <?php
            include '../../sidebar2.php';
        ?>

        <!-- Page Content Holder -->
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
            
            <h2>LIHAT PELANGGARAN</h2>
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                Data Pelanggaran <strong><?php echo $tbl_pelanggaran['nama_siswa']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

<table class="table">
  <thead>
    <tr>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Tahun Ajaran</td>
      <td>:</td>
      <td>
        <input type="text" name="tahun_ajaran" class="form-control" value="<?php echo $tbl_website['tahun_ajaran']; ?>" disabled>
      </td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>Semester</td>
      <td>:</td>
      <td>
        <input type="text" name="semester" class="form-control" value="<?php echo $tbl_website['semester']; ?>" disabled>
      </td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>NIS</td>
      <td>:</td>
      <td>
        <input type="text" name="nis" class="form-control" value="<?php echo $tbl_pelanggaran['nis']; ?>" disabled>
      </td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>Nama Siswa</td>
      <td>:</td>
      <td>
        <input type="text" name="nama_siswa" class="form-control" value="<?php echo $tbl_pelanggaran['nama_siswa']; ?>" disabled>
      </td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>Kelas</td>
      <td>:</td>
      <td>
        <input type="text" name="kelas" class="form-control" value="<?php echo $tbl_pelanggaran['kelas']; ?>" disabled>
      </td>
    </tr>

    <tr>
      <th scope="row">6</th>
      <td>Tanggal</td>
      <td>:</td>
      <td>
        <input type="text" name="tanggal" class="form-control" value="<?php echo $tbl_pelanggaran['tanggal']; ?>" disabled>
      </td>
    </tr>

    <tr>
      <th scope="row">7</th>
      <td>Jenis Pelanggaran</td>
      <td>:</td>
      <td>
        <input type="text" name="jenis_pelanggaran" class="form-control" value="<?php echo $tbl_pelanggaran['jenis_pelanggaran']; ?>"disabled>
      </td>
    </tr>

    <tr>
      <th scope="row">8</th>
      <td>Poin</td>
      <td>:</td>
      <td>
        <input type="text" name="poin" class="form-control" value="<?php echo $tbl_pelanggaran['poin']; ?>" disabled>
      </td>
    </tr>

    <tr>
      <th scope="row">9</th>
      <td>Sanksi</td>
      <td>:</td>
      <td>
        <input type="text" name="sanksi" class="form-control" value="<?php echo $tbl_pelanggaran['sanksi']; ?>" disabled>
      </td>
    </tr>

    <tr>
      <th></th>
      <td></td>
      <td></td>
      <td>
        <a href="../" class="btn btn-primary">
          <i class="fas fa-arrow-left"></i> Kembali
        </a>
      </td>
    </tr>

  </tbody>
</table>
        </div>
    </div>

    <script src="/assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

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