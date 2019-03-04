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
      
    $sql_website    = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website    = mysqli_fetch_array($sql_website);
    
    if ($tbl_user['level'] == "Administrator") {
      header("Location: ../../pegawai/create");
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
    <title>Tambah Guru - <?php echo $tbl_website['nama_sekolah']; ?></title></h3>
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
            
            <h2>TAMBAH GURU</h2>
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                Silahkan isi data dibawah untuk menambahkan guru
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
      <td>NIP</td>
      <td>:</td>
      <td>
        <input type="text" name="nip" class="form-control" required>
      </td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>Nama</td>
      <td>:</td>
      <td>
        <input type="text" name="nama" class="form-control" required>
      </td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>Pelajaran</td>
      <td>:</td>
      <td>
        <input type="text" name="pelajaran" class="form-control" required>
      </td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>Tempat Lahir</td>
      <td>:</td>
      <td>
        <input type="text" name="tempat_lahir" class="form-control" required>
      </td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>Tanggal Lahir</td>
      <td>:</td>
      <td>
        <input type="text" name="tanggal_lahir" class="form-control" placeholder="<?php echo date('Y-m-d'); ?>" required>
      </td>
    </tr>

    <tr>
      <th scope="row">6</th>
      <td>Agama</td>
      <td>:</td>
      <td>
        <input type="text" name="agama" class="form-control" required>
      </td>
    </tr>

    <tr>
      <th scope="row">7</th>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td>
        <input type="text" name="jenis_kelamin" class="form-control" required>
      </td>
    </tr>
    

    <tr>
      <th scope="row">8</th>
      <td>Alamat</td>
      <td>:</td>
      <td>
        <input type="text" name="alamat" class="form-control" required>
      </td>
    </tr>

    <tr>
      <th scope="row">9</th>
      <td>No. HP</td>
      <td>:</td>
      <td>
        <input type="text" name="no_hp" class="form-control" required>
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
          Save
        </button>
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