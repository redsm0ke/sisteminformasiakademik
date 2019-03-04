<?php
error_reporting(0);
session_start();

 if(isset($_SESSION['session'])){
  } else {
  header("Location: /account/login?msg=login");
}

##############################################

include '../../assets/includes/configuration.php';
include '../../assets/includes/db.php';

##############################################

    $id         = $_GET['id'];
    $username   = $_SESSION['session'];
    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user WHERE username = '$username'");
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
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/solid.js"></script>
    <script src="../../assets/js/fontawesome.js"></script>
    <title>Web Configuration - <?php echo $tbl_website['nama_sekolah']; ?></title>
</head>

<body>

    <div class="wrapper">
        <?php
            include '../sidebar.php';
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
            
            <h2>PENGATURAN WEBSITE</h2>
            <form method="post" action="../../manage/configuration/edit.php">
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Selamat datang di <strong>Sistem Informasi Akademik</strong> <?php echo $tbl_website['nama_sekolah']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

            <?php
            if ($_GET['msg'] == "tambahsukses") {
              echo '
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data anda telah berhasil dibuat</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }

            if ($_GET['msg'] == "tambahgagal") {
              echo '
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data anda gagal dibuat</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }

            if ($_GET['msg'] == "editsukses") {
              echo '
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data anda telah berhasil di ubah</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }

            if ($_GET['msg'] == "editgagal") {
              echo '
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data anda gagal diubah</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }
            ?>
<table class="table table-striped">
  <thead>
    <tr><hr>

              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Hati-hati dalam mengubah pengaturan website</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Nama Sekolah</td>
      <td>:</td>
      <td>
        <input type="text" name="namasekolah" class="form-control" value="<?php echo $tbl_website['nama_sekolah']; ?>">
      </td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>Website Sekolah</td>
      <td>:</td>
      <td>
        <input type="text" name="web_sekolah" class="form-control" value="<?php echo $tbl_website['web_sekolah']; ?>">
      </td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>Hari</td>
      <td>:</td>
      <td>
        <input type="text" name="today" class="form-control" value="<?php echo $today; ?>" disabled>
      </td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>Tanggal</td>
      <td>:</td>
      <td>
        <input type="text" name="tanggal" class="form-control" value="<?php echo $tanggal; ?>" disabled>
      </td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>Tahun Ajaran</td>
      <td>:</td>
      <td>
        <input type="text" name="tahun_ajaran" class="form-control" value="<?php echo $tbl_website['tahun_ajaran']; ?>">
      </td>
    </tr>

    <tr>
      <th scope="row">6</th>
      <td>Semester</td>
      <td>:</td>
      <td>
        <input type="text" name="semester" class="form-control" value="<?php echo $tbl_website['semester']; ?>">
      </td>
    </tr>

    <tr>
      <th scope="row">7</th>
      <td>DIR Manage</td>
      <td>:</td>
      <td>
        <input type="text" name="manage_dir" class="form-control" value="<?php echo $tbl_website['manage_dir']; ?>">
      </td>
    </tr>

    <tr>
      <th></th>
      <td></td>
      <td></td>
      <td>
        <a href="../../index.php" class="btn btn-primary">
          <i class="fas fa-arrow-left"></i> Kembali
        </a>
        <button type="submit" class="btn btn-success">
          Ubah Data
        </button>
      </td>
    </tr>

  </tbody>
</table>

        </div>
        </form>
    </div>

    <script src="../../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../assets//js/bootstrap.min.js"></script>

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