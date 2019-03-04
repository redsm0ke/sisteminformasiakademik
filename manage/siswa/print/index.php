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
    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user WHERE  username = '$username'");
    $tbl_user   = mysqli_fetch_array($sql_user);

    $sql_pegawai   = mysqli_query($db,"SELECT * FROM tbl_pegawai where nip = '$username' ");
    $tbl_pegawai   = mysqli_fetch_array($sql_pegawai);

    $sql_siswaq = mysqli_query($db,"SELECT * FROM tbl_siswa WHERE no_urut='$id'");
    $data_siswa = mysqli_fetch_array($sql_siswaq);

    $nis = $data_siswa['nis'];
    $sql_nilai_keterampilan  = mysqli_query($db,"SELECT * FROM tbl_nilai_keterampilan WHERE nis = '".$data_siswa['nis']."'");

    $sql_nilai_pengetahuan  = mysqli_query($db,"SELECT * FROM tbl_nilai_pengetahuan WHERE nis = '".$data_siswa['nis']."'");
      
    $sql_website    = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website    = mysqli_fetch_array($sql_website);
    
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
    <title>Print Raport - <?php echo $tbl_website['nama_sekolah']; ?></title></h3>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-7">
      <table>
        <tr>
          <td><br>Nama Sekolah</td>
          <td><br> : </td>
          <td><br><?php echo $tbl_website['nama_sekolah']; ?></td>
        </tr>

        <tr>
          <td>Nama</td>
          <td> : </td>
          <td><?php echo $data_siswa['nama']; ?></td>
        </tr>

        <tr>
          <td>NIS</td>
          <td> : </td>
          <td><?php echo $data_siswa['nis']; ?></td>
        </tr>
      </table>
    </div>
      <div class="col-sm-5">
      <table>
        <tr>
          <td><br>Kelas</td>
          <td><br> : </td>
          <td><br><?php echo $data_siswa['kelas']; ?></td>
        </tr>

        <tr>
          <td>Semester</td>
          <td> : </td>
          <td><?php echo $tbl_website['semester']; ?></td>
        </tr>

        <tr>
          <td>Tahun Ajaran</td>
          <td> : </td>
          <td><?php $TA = explode(" ", $tbl_website['tahun_ajaran']); echo $TA['2']?></td>
        </tr>
      </table>
      </div>
  <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col"><center>No</center></th>
          <th scope="col">Pelajaran</th>
          <th scope="col">Nilai Pengetahuan</th>
          <th scope="col">Nilai Keterampilan</th>
        </tr>
      </thead>
      <tbody>
      <?php
            $tbl_nilai_pengetahuan  = mysqli_fetch_array($sql_nilai_pengetahuan);
            $tbl_nilai_keterampilan = mysqli_fetch_array($sql_nilai_keterampilan);
            #######################################
            $pengetahuan_PAI  = $tbl_nilai_pengetahuan['PAI'];
            $pengetahuan_PKN  = $tbl_nilai_pengetahuan['PKN'];
            $pengetahuan_BI   = $tbl_nilai_pengetahuan['BI'];
            $pengetahuan_MM   = $tbl_nilai_pengetahuan['MM'];
            $pengetahuan_PBO  = $tbl_nilai_pengetahuan['PBO'];
            $pengetahuan_PPL  = $tbl_nilai_pengetahuan['PPL'];
            $pengetahuan_BD   = $tbl_nilai_pengetahuan['BD'];
            $pengetahuan_DESK = $tbl_nilai_pengetahuan['DESK'];
            $pengetahuan_PAK  = $tbl_nilai_pengetahuan['PAK'];
            $pengetahuan_ENG  = $tbl_nilai_pengetahuan['ENG'];
            $pengetahuan_PJOK = $tbl_nilai_pengetahuan['PJOK'];
            $pengetahuan_MDRN = $tbl_nilai_pengetahuan['MDRN'];
            $pengetahuan_KREL = $tbl_nilai_pengetahuan['KREL'];
            $pengetahuan_KWUH = $tbl_nilai_pengetahuan['KWUH'];
            $pengetahuan_OFFL = $tbl_nilai_pengetahuan['OFFL'];
            $pengetahuan_WEBN = $tbl_nilai_pengetahuan['WEBN'];
            #######################################

            #######################################
            $keterampilan_PAI  = $tbl_nilai_keterampilan['PAI'];
            $keterampilan_PKN  = $tbl_nilai_keterampilan['PKN'];
            $keterampilan_BI   = $tbl_nilai_keterampilan['BI'];
            $keterampilan_MM   = $tbl_nilai_keterampilan['MM'];
            $keterampilan_PBO  = $tbl_nilai_keterampilan['PBO'];
            $keterampilan_PPL  = $tbl_nilai_keterampilan['PPL'];
            $keterampilan_BD   = $tbl_nilai_keterampilan['BD'];
            $keterampilan_DESK = $tbl_nilai_keterampilan['DESK'];
            $keterampilan_PAK  = $tbl_nilai_keterampilan['PAK'];
            $keterampilan_ENG  = $tbl_nilai_keterampilan['ENG'];
            $keterampilan_PJOK = $tbl_nilai_keterampilan['PJOK'];
            $keterampilan_MDRN = $tbl_nilai_keterampilan['MDRN'];
            $keterampilan_KREL = $tbl_nilai_keterampilan['KREL'];
            $keterampilan_KWUH = $tbl_nilai_keterampilan['KWUH'];
            $keterampilan_OFFL = $tbl_nilai_keterampilan['OFFL'];
            $keterampilan_WEBN = $tbl_nilai_keterampilan['WEBN'];
            #######################################
            $no = 0;
if ($data_siswa['agama'] == "Islam") {
    echo '
      <tr>
      <th scope="row"><center>1</center></th>
      <td>Pendidikan Agama Islam dan Budi Pekerti</td>
      <td>'.$pengetahuan_PAI.'';
      if ($pengetahuan_PAI >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo'</td>
      <td>'.$keterampilan_PAI.'';
      if ($keterampilan_PAI >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo'</td>
    </tr>';
        }

if ($data_siswa['agama'] == "Kristen") {
    echo '
      <tr>
      <th scope="row"><center>1</center></th>
      <td>Pendidikan Agama Kristen dan Budi Pekerti</td>
      <td>'.$pengetahuan_PAK.'';
      if ($pengetahuan_PAK <= 75) {
        echo " ( Tidak Lulus )";
      } else {
        echo " ( Lulus )";
      }
      echo'</td>
      <td>'.$keterampilan_PAK.'';
      if ($keterampilan_PAK >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo'</td>
    </tr>';
        }

      echo'
      <tr>
      <th scope="row"><center>2</center></th>
      <td>Pendidikan Pancasila dan Kewarganegaraan</td>
      <td>'.$pengetahuan_PKN.'';
      if ($pengetahuan_PKN >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo '</td>
      <td>'.$keterampilan_PKN.'';
      if ($keterampilan_PKN >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo'</td>
    </tr>';

      echo'
      <tr>
      <th scope="row"><center>3</center></th>
      <td>Bahasa Indonesia</td>
      <td>'.$pengetahuan_BI.'';
      if ($pengetahuan_BI >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo '</td>
      <td>'.$keterampilan_BI.'';
      if ($keterampilan_BI >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo'</td>
    </tr>';

      echo'
      <tr>
      <th scope="row"><center>4</center></th>
      <td>Matematika</td>
      <td>'.$pengetahuan_MM.'';
      if ($pengetahuan_MM >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo '</td>
      <td>'.$keterampilan_MM.'';
      if ($keterampilan_MM >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo'</td>
    </tr>';
    
      echo'
      <tr>
      <th scope="row"><center>5</center></th>
      <td>Pemrograman Berbasis Objek</td>
      <td>'.$pengetahuan_PBO.'';
      if ($pengetahuan_PBO >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo '</td>
      <td>'.$keterampilan_PBO.'';
      if ($keterampilan_PBO >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo'</td>
    </tr>';

      echo'
      <tr>
      <th scope="row"><center>6</center></th>
      <td>Pemodelan Perangkat Lunak</td>
      <td>'.$pengetahuan_PPL.'';
      if ($pengetahuan_PPL >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo '</td>
      <td>'.$keterampilan_PPL.'';
      if ($keterampilan_PPL >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo'</td>
    </tr>';

      echo'
      <tr>
      <th scope="row"><center>7</center></th>
      <td>Basis Data</td>
      <td>'.$pengetahuan_BD.'';
      if ($pengetahuan_BD >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo '</td>
      <td>'.$keterampilan_BD.'';
      if ($keterampilan_BD >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo'</td>
    </tr>';

      echo'
      <tr>
      <th scope="row"><center>8</center></th>
      <td>Pemrograman Desktop</td>
      <td>'.$pengetahuan_DESK.'';
      if ($pengetahuan_DESK >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo '</td>
      <td>'.$keterampilan_DESK.'';
      if ($keterampilan_DESK >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo'</td>
    </tr>';

      echo'
      <tr>
      <th scope="row"><center>9</center></th>
      <td>English</td>
      <td>'.$pengetahuan_ENG.'';
      if ($pengetahuan_ENG >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo '</td>
      <td>'.$keterampilan_ENG.'';
      if ($keterampilan_ENG >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo'</td>
    </tr>';

      echo'
      <tr>
      <th scope="row"><center>10</center></th>
      <td>Pendidikan Jasmani Olahraga dan Kesehatan</td>
      <td>'.$pengetahuan_PJOK.'';
      if ($pengetahuan_PJOK >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo '</td>
      <td>'.$keterampilan_PJOK.'';
      if ($keterampilan_PJOK >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo'</td>
    </tr>';

      echo'
      <tr>
      <th scope="row"><center>11</center></th>
      <td>Bahasa Mandarin</td>
      <td>'.$pengetahuan_MDRN.'';
      if ($pengetahuan_MDRN >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo '</td>
      <td>'.$keterampilan_MDRN.'';
      if ($keterampilan_MDRN >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo'</td>
    </tr>';

      echo'
      <tr>
      <th scope="row"><center>12</center></th>
      <td>Produk Kreatif RPL</td>
      <td>'.$pengetahuan_KREL.'';
      if ($pengetahuan_KREL >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo '</td>
      <td>'.$keterampilan_KREL.'';
      if ($keterampilan_KREL >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo'</td>
    </tr>';

      echo'
      <tr>
      <th scope="row"><center>13</center></th>
      <td>Kewirausahaan RPL</td>
      <td>'.$pengetahuan_KWUH.'';
      if ($pengetahuan_KWUH >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo '</td>
      <td>'.$keterampilan_KWUH.'';
      if ($keterampilan_KWUH >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo'</td>
    </tr>';

      echo'
      <tr>
      <th scope="row"><center>14</center></th>
      <td>Microsoft Office</td>
      <td>'.$pengetahuan_OFFL.'';
      if ($pengetahuan_OFFL >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo '</td>
      <td>'.$keterampilan_OFFL.'';
      if ($keterampilan_OFFL >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo'</td>
    </tr>';

      echo'
      <tr>
      <th scope="row"><center>15</center></th>
      <td>Pemrograman Web</td>
      <td>'.$pengetahuan_WEBN.'';
      if ($pengetahuan_WEBN >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo '</td>
      <td>'.$keterampilan_WEBN.'';
      if ($keterampilan_WEBN >= 75) {
        echo " ( Lulus )";
      } else {
        echo " ( Tidak Lulus )";
      }
      echo'</td>
    </tr>';

      ?>
      </tbody>
    </table>
    <table class="table" style="white-space: nowrap;">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>
          <td>
          <td>
          <td style="text-align: right;">Wali kelas</td>
        </tr>

        <tr>
          <td>
          <td>
          <td>
          <td>
        </tr>

        <tr>
          <td>
          <td>
          <td>
          <td>
        </tr>

        <tr>
          <td>
          <td>
          <td>
          <td style="text-align: right;"><?php echo $tbl_pegawai['nama']; ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<script>
  window.print();
</script>
</body>
</html>