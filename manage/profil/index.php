<?php

##############################################

include '../../assets/includes/configuration.php';
include '../../assets/includes/db.php';

##############################################

    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user");
    $tbl_user   = mysqli_fetch_array($sql_user);
      
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
    <title>Ubah Profil - <?php echo $tbl_website['nama_sekolah']; ?></title></h3>
</head>

<body>

    <div class="wrapper">
        <?php
            include '../sidebar.php';
        ?>

        <!-- Page Content Holder -->
        <div id="content">
          <form action="doEdit.php" method="post">
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
            
            <h2>UBAH PROFIL</h2>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Selamat datang di <strong>Sistem Informasi Akademik</strong> <?php echo $tbl_website['nama_sekolah']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

                        <!----------------------
                            Login message
                        !----------------------->

                        <?php
                        if ($_GET['msg'] == "passwordsukses") {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                        echo 'Password anda telah berhasil di ubah.';
                        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                        echo '<span aria-hidden="true">&times;</span>';
                        echo '</button>';
                        echo '</div>';
                        }

                        if ($_GET['msg'] == "passwordgagal") {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                        echo '<strong>Password anda gagal diubah, silahkan ulangi.</strong>';
                        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                        echo '<span aria-hidden="true">&times;</span>';
                        echo '</button>';
                        echo '</div>';
                        }

                        if ($_GET['msg'] == "passwordfailed") {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                        echo '<strong>Password baru yang anda masukkan tidak cocok, silahkan ulangi</strong>';
                        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                        echo '<span aria-hidden="true">&times;</span>';
                        echo '</button>';
                        echo '</div>';
                        }

                        if ($_GET['msg'] == "passwordlimit") {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                        echo '<strong>Password baru minimal 5 karakter, silahkan ulangi</strong>';
                        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                        echo '<span aria-hidden="true">&times;</span>';
                        echo '</button>';
                        echo '</div>';
                        }

                        if ($_GET['msg'] == "passworddifferent") {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                        echo '<strong>Password lama yang anda masukkan tidak cocok, silahkan ulangi</strong>';
                        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                        echo '<span aria-hidden="true">&times;</span>';
                        echo '</button>';
                        echo '</div>';
                        }
                        ?>

                        <!----------------------
                            Login message
                        !----------------------->

<table class="table table-striped">
  <thead>
    <tr>
      <input type="text" name="session_id" value="<?php echo $_SESSION['session'] ?>" hidden>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Username</td>
      <td>:</td>
      <td>
        <input type="text" name="username" class="form-control" value="<?php echo $tbl_user['username']; ?>" disabled>
      </td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>Password Sekarang</td>
      <td>:</td>
      <td>
        <input type="password" name="password_lama" class="form-control" placeholder="********">
      </td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>Password Baru</td>
      <td>:</td>
      <td>
        <input type="password" name="password_baru" class="form-control" placeholder="********" min="6">
      </td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>Ulangi Password</td>
      <td>:</td>
      <td>
        <input type="password" name="konfirmasi_password" class="form-control" placeholder="********" min="6">
      </td>
    </tr>

    <tr>
      <th></th>
      <td></td>
      <td></td>
      <td>
        <button class="btn btn-primary">Save</button>
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