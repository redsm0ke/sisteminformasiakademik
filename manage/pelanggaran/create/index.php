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

    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user");
    $tbl_user   = mysqli_fetch_array($sql_user);
      
    $sql_website    = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website    = mysqli_fetch_array($sql_website);
    
    if ($tbl_user['level'] == "Administrator") {
    } else {
      header("Location: ../../../index.php?msg=denied");
    }
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
    <title>Tambah Pelanggaran - <?php echo $tbl_website['nama_sekolah']; ?></title></h3>
</head>

<body>

    <div class="wrapper">
        <?php
            include '../../sidebar2.php';
        ?>

        <!-- Page Content Holder -->
        <div id="content">
          <form method="post" action="add.php">
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
            
            <h2>TAMBAH PELANGGARAN</h2>
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                Silahkan isi data dibawah untuk menambahkan pelanggaran
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
        <input type="text" name="nis" class="form-control" value="" required="" placeholder="175527">
      </td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>Nama Siswa</td>
      <td>:</td>
      <td>
        <input type="text" name="nama_siswa" class="form-control" value="" required="" placeholder="DEDY SYAHPUTRA RIZKI HARAHAP">
      </td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>Kelas</td>
      <td>:</td>
      <td>
        <input type="text" name="kelas" class="form-control" value="" required="" placeholder="XI - RPL - 2 (Rekayasa Perangkat Lunak)">
      </td>
    </tr>

    <tr>
      <th scope="row">6</th>
      <td>Tanggal</td>
      <td>:</td>
      <td>
        <input type="text" name="tanggal" class="form-control" value="<?php echo date("Y-m-d") ?>" disabled>
      </td>
    </tr>

    <tr>
      <th scope="row">7</th>
      <td>Jenis Pelanggaran</td>
      <td>:</td>
      <td>
        <input type="text" name="jenis_pelanggaran" class="form-control" value="" required="" placeholder="JENIS PELANGGARAN">
      </td>
    </tr>

    <tr>
      <th scope="row">8</th>
      <td>Poin</td>
      <td>:</td>
      <td>
        <input type="text" name="poin" class="form-control" value="" required="" placeholder="POIN">
      </td>
    </tr>

    <tr>
      <th scope="row">9</th>
      <td>Sanksi</td>
      <td>:</td>
      <td>
        <input type="text" name="sanksi" class="form-control" value="" required="" placeholder="SANKSI">
      </td>
    </tr>

    <tr>
      <th></th>
      <td></td>
      <td></td>
      <td>
        <button type="submit" class="btn btn-primary">Save</button>
      </td>
    </tr>

  </tbody>
</table>
</form>
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