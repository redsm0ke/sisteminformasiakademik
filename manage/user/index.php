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
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/jquery.dataTables.css">
    <script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../assets/js/solid.js"></script>
    <script type="text/javascript" src="../../assets/js/fontawesome.js"></script>
    <title>Daftar User - <?php echo $tbl_website['nama_sekolah']; ?></title></h3>
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
            
            <h2>Daftar User</h2>

              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Berikut adalah daftar user</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

        <?php
        if ($tbl_user['level'] == "Administrator") {
          echo '
            <a href="create" class="btn btn-success float-right">
              <i class="fas fa-plus"></i> Tambah
            </a>
            <br><br>';
        } else {
        }
        ?>
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

            if ($_GET['msg'] == "hapussukses") {
              echo '
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data anda telah berhasil dihapus</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }

            if ($_GET['msg'] == "hapusgagal") {
              echo '
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data anda gagal dihapus</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }
            ?>

<table id="search" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col"><center>#</center></th>
      <th scope="col">Username</th>
      <th scope="col">Level</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
        <?php
        include '../../assets/includes/db.php';
        $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user");
        $no=0;
        while ($data = mysqli_fetch_array($sql_user)) {
            $no_urut   = $data['no_urut'];  // dr tabel
            $username  = $data['username'];
            $level     = $data['level'];
            $no++;
 
            echo '
    <tr>
      <th scope="row"><center>'.$no.'</center></th>
      <td>'.$username.'</td>
      <td>'.$level.'</td>
      <td style="text-align: center;">
        <a href="view?id='.$no_urut.'" class="btn btn-sm btn-primary" style="color: #FFF">
            <i class="fas fa-eye"></i>
        </a> ';
            if ($tbl_user['level'] == "Administrator") {
        echo '<a href="edit?id='.$no_urut.'" class="btn btn-sm btn-warning" style="color: #FFF"">
            <i class="fas fa-pencil-alt"></i>
        </a>
        <a href="delete?id='.$no_urut.'" class="btn btn-sm btn-danger" style="color: #FFF">
            <i class="fas fa-trash-alt"></i>
        </a>
        </td>
    </tr>
';
}
}
?>

  </tbody>
</table>

    <script src="../../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
        $('#search').DataTable();
        });
    </script>
</body>

</html>