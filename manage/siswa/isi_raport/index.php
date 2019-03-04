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

    $sql_website  = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website  = mysqli_fetch_array($sql_website);

    $sql_siswax  = mysqli_query($db,"SELECT * FROM tbl_siswa WHERE no_urut = '$id'");
    $tbl_siswax  = mysqli_fetch_array($sql_siswax);
    
    if ($tbl_user['level'] == "Guru") {
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
    <title>Isi Nilai - <?php echo $tbl_website['nama_sekolah']; ?></title></h3>
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
            
            <h2>ISI NILAI SISWA <strong><?php echo $tbl_siswax['nama']; ?></strong></h2>
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                Nilai Siswa <strong><?php echo $tbl_siswax['nama']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
<table class="table table-bordered">
  <thead>
    <tr>
      <input type="text" name="id" value="<?php echo $_GET['id']; ?>" hidden>
      <th><center>#</center></th>
      <th class="col-2">Nama Pelajaran</th>
      <th class="col-2">Nilai Pengetahuan</th>
      <th class="col-2">Nilai Keterampilan</th>
    </tr>
  </thead>
  <tbody>
<?php

    $sql_siswaq = mysqli_query($db,"SELECT * FROM tbl_siswa WHERE no_urut='$id'");
    $data_siswa = mysqli_fetch_array($sql_siswaq);

    $sql_nilai_keterampilan  = mysqli_query($db,"SELECT * FROM tbl_nilai_keterampilan WHERE nis = '".$data_siswa['nis']."'");
    $tbl_nilai_keterampilan  = mysqli_fetch_array($sql_nilai_keterampilan);

    $sql_nilai_pengetahuan  = mysqli_query($db,"SELECT * FROM tbl_nilai_pengetahuan WHERE nis = '".$data_siswa['nis']."'");
    $tbl_nilai_pengetahuan  = mysqli_fetch_array($sql_nilai_pengetahuan);

?>
<?php
if ($tbl_siswax['agama'] == "Islam") {
    echo '
      <tr>
      <th scope="row"><center>1</center></th>
      <td>Pendidikan Agama Islam dan Budi Pekerti</td>
      <td><center><input type="text" class="form-control col-6" name="pengetahuan_PAI" value="'.$tbl_nilai_pengetahuan["PAI"].'"</center></td>
      <td><center><input type="text" class="form-control col-6" name="keterampilan_PAI" value="'.$tbl_nilai_keterampilan["PAI"].'"></center></td>
      <input type="text" class="form-control col-6" name="pengetahuan_PAK" value="0" hidden>
      <input type="text" class="form-control col-6" name="keterampilan_PAK" value="0" hidden>
    </tr>';
} else {
    echo '
      <tr>
      <th scope="row"><center>1</center></th>
      <td>Pendidikan Agama Kristen dan Budi Pekerti</td>
      <td><center><input type="text" class="form-control col-6" name="pengetahuan_PAK" value="'.$tbl_nilai_pengetahuan["PAK"].'"></center></td>
      <td><center><input type="text" class="form-control col-6" name="keterampilan_PAK" value="'.$tbl_nilai_keterampilan["PAK"].'"></center></td>
      <input type="text" class="form-control col-6" name="pengetahuan_PAI" value="0" hidden>
      <input type="text" class="form-control col-6" name="keterampilan_PAI" value="0" hidden>
    </tr>';
}

?>
    <tr>
      <th scope="row"><center>2</center></th>
      <td>Pendidikan Pancasila dan Kewarganegaraan</td>
      <td><center><input type="text" class="form-control col-6" name="pengetahuan_PKN" value="<?php echo $tbl_nilai_pengetahuan['PKN']; ?>"></center></td>
      <td><center><input type="text" class="form-control col-6" name="keterampilan_PKN" value="<?php echo $tbl_nilai_keterampilan['PKN']; ?>"></center></td>
    </tr>

    <tr>
      <th scope="row"><center>3</center></th>
      <td>Bahasa Indonesia</td>
      <td><center><input type="text" class="form-control col-6" name="pengetahuan_BI" value="<?php echo $tbl_nilai_pengetahuan['BI']; ?>"></center></td>
      <td><center><input type="text" class="form-control col-6" name="keterampilan_BI" value="<?php echo $tbl_nilai_keterampilan['BI']; ?>"></center></td>
    </tr>

    <tr>
      <th scope="row"><center>4</center></th>
      <td>Matematika</td>
      <td><center><input type="text" class="form-control col-6" name="pengetahuan_MM" value="<?php echo $tbl_nilai_pengetahuan['MM']; ?>"></center></td>
      <td><center><input type="text" class="form-control col-6" name="keterampilan_MM" value="<?php echo $tbl_nilai_keterampilan['MM']; ?>"></center></td>
    </tr>

    <tr>
      <th scope="row"><center>5</center></th>
      <td>Pemrograman Berbasis Objek</td>
      <td><center><input type="text" class="form-control col-6" name="pengetahuan_PBO" value="<?php echo $tbl_nilai_pengetahuan['PBO']; ?>"></center></td>
      <td><center><input type="text" class="form-control col-6" name="keterampilan_PBO" value="<?php echo $tbl_nilai_keterampilan['PBO']; ?>"></center></td>
    </tr>

    <tr>
      <th scope="row"><center>6</center></th>
      <td>Pemodelan Perangkat Lunak</td>
      <td><center><input type="text" class="form-control col-6" name="pengetahuan_PPL" value="<?php echo $tbl_nilai_pengetahuan['PPL']; ?>"></center></td>
      <td><center><input type="text" class="form-control col-6" name="keterampilan_PPL" value="<?php echo $tbl_nilai_keterampilan['PPL']; ?>"></center></td>
    </tr>

    <tr>
      <th scope="row"><center>7</center></th>
      <td>Basis Data</td>
      <td><center><input type="text" class="form-control col-6" name="pengetahuan_BD" value="<?php echo $tbl_nilai_pengetahuan['BD']; ?>"></center></td>
      <td><center><input type="text" class="form-control col-6" name="keterampilan_BD" value="<?php echo $tbl_nilai_keterampilan['BD']; ?>"></center></td>
    </tr>

    <tr>
      <th scope="row"><center>8</center></th>
      <td>Pemrograman Desktop</td>
      <td><center><input type="text" class="form-control col-6" name="pengetahuan_DESK" value="<?php echo $tbl_nilai_pengetahuan['DESK']; ?>"></center></td>
      <td><center><input type="text" class="form-control col-6" name="keterampilan_DESK" value="<?php echo $tbl_nilai_keterampilan['DESK']; ?>"></center></td>
    </tr>

    <tr>
      <th scope="row"><center>9</center></th>
      <td>English</td>
      <td><center><input type="text" class="form-control col-6" name="pengetahuan_ENG" value="<?php echo $tbl_nilai_pengetahuan['ENG']; ?>"></center></td>
      <td><center><input type="text" class="form-control col-6" name="keterampilan_ENG" value="<?php echo $tbl_nilai_keterampilan['ENG']; ?>"></center></td>
    </tr>

    <tr>
      <th scope="row"><center>10</center></th>
      <td>Pendidikan Jasmani Olahraga dan Kesehatan</td>
      <td><center><input type="text" class="form-control col-6" name="pengetahuan_PJOK" value="<?php echo $tbl_nilai_pengetahuan['PJOK']; ?>"></center></td>
      <td><center><input type="text" class="form-control col-6" name="keterampilan_PJOK" value="<?php echo $tbl_nilai_keterampilan['PJOK']; ?>"></center></td>
    </tr>

    <tr>
      <th scope="row"><center>11</center></th>
      <td>Bahasa Mandarin</td>
      <td><center><input type="text" class="form-control col-6" name="pengetahuan_MDRN" value="<?php echo $tbl_nilai_pengetahuan['MDRN']; ?>"></center></td>
      <td><center><input type="text" class="form-control col-6" name="keterampilan_MDRN" value="<?php echo $tbl_nilai_keterampilan['MDRN']; ?>"></center></td>
    </tr>

    <tr>
      <th scope="row"><center>12</center></th>
      <td>Produk Kreatif RPL</td>
      <td><center><input type="text" class="form-control col-6" name="pengetahuan_KREL" value="<?php echo $tbl_nilai_pengetahuan['KREL']; ?>"></center></td>
      <td><center><input type="text" class="form-control col-6" name="keterampilan_KREL" value="<?php echo $tbl_nilai_keterampilan['KREL']; ?>"></center></td>
    </tr>

    <tr>
      <th scope="row"><center>13</center></th>
      <td>Kewirausahaan RPL</td>
      <td><center><input type="text" class="form-control col-6" name="pengetahuan_KWUH" value="<?php echo $tbl_nilai_pengetahuan['KREL']; ?>"></center></td>
      <td><center><input type="text" class="form-control col-6" name="keterampilan_KWUH" value="<?php echo $tbl_nilai_keterampilan['KWUH']; ?>"></center></td>
    </tr>

    <tr>
      <th scope="row"><center>14</center></th>
      <td>Microsoft Office</td>
      <td><center><input type="text" class="form-control col-6" name="pengetahuan_OFFL" value="<?php echo $tbl_nilai_pengetahuan['OFFL']; ?>"></center></td>
      <td><center><input type="text" class="form-control col-6" name="keterampilan_OFFL" value="<?php echo $tbl_nilai_keterampilan['OFFL']; ?>"></center></td>
    </tr>

    <tr>
      <th scope="row"><center>15</center></th>
      <td>Pemrograman Web</td>
      <td><center><input type="text" class="form-control col-6" name="pengetahuan_WEBN" value="<?php echo $tbl_nilai_pengetahuan['WEBN']; ?>"></center></td>
      <td><center><input type="text" class="form-control col-6" name="keterampilan_WEBN" value="<?php echo $tbl_nilai_keterampilan['WEBN']; ?>"></center></td>
    </tr>
  </tbody>
</table>
<table class="table">
    <tbody>
        <tr>
            <td>
                <td style="text-align: center;">
                <a href="../" class="btn btn-primary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                <button type="submit" class="btn btn-success">Save</button>
                </td>
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