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
    $username   = $_SESSION['session'];
    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user WHERE username = '$username'");
    $tbl_user   = mysqli_fetch_array($sql_user);
      
    $sql_event   = mysqli_query($db,"SELECT * FROM tbl_event WHERE no_urut = '$id'");
    $tbl_event   = mysqli_fetch_array($sql_event);

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
    <title>Edit Event - <?php echo $tbl_website['nama_sekolah']; ?></title></h3>
</head>

<body>

    <div class="wrapper">
        <?php
            include '../../sidebar2.php';
        ?>

        <!-- Page Content Holder -->
        <div id="content">
          <form action="edit.php" method="post">
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
            
            <h2>EDIT EVENT</h2>
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                Data Berita <strong><?php echo $tbl_event['no_urut']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

<table class="table">
  <thead>
    <tr>
      <input type="text" name="id" value="<?php echo $_GET['id']; ?>" hidden>
      <input type="text" name="username" value="<?php echo $tbl_user['username']; ?>" hidden>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">1</th>
      <td>Judul</td>
      <td>:</td>
      <td>
        <input type="text" name="judul" class="form-control" value="<?php echo $tbl_event['judul']; ?>">
      </td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>Kategori Event</td>
      <td>:</td>
      <td>
        <input type="text" name="kategori" class="form-control" value="<?php echo $tbl_event['kategori_event']; ?>">
      </td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>Isi</td>
      <td>:</td>
      <td>
        <textarea name="isi" class="form-control" rows="11"><?php echo $tbl_event['isi']; ?></textarea>
      </td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>Tanggal Mulai</td>
      <td>:</td>
      <td>
        <input type="text" name="tanggal_mulai" class="form-control" value="<?php echo $tbl_event['tanggal_mulai']; ?>">
      </td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>Tanggal Selesai</td>
      <td>:</td>
      <td>
        <input type="text" name="tanggal_selesai" class="form-control" value="<?php echo $tbl_event['tanggal_selesai']; ?>">
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