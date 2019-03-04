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

#######################################
$id             = $_POST['id'];
$nip            = $_POST['nip'];
$nama           = $_POST['nama'];
$pelajaran      = $_POST['pelajaran'];
$tempat_lahir   = $_POST['tempat_lahir'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$agama          = $_POST['agama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat         = $_POST['alamat'];
$no_hp          = $_POST['no_hp'];
#######################################

    $username   = $_SESSION['session'];
    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user WHERE username = '$username'");
    $tbl_user    = mysqli_fetch_array($sql_user);

    $sql_website    = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website    = mysqli_fetch_array($sql_website);

    if ($tbl_user['level'] == "Administrator") {
      $sql = "UPDATE `tbl_pegawai` SET `nip` = '$nip', `nama` = '$nama', `pelajaran` = '$pelajaran', `tempat_lahir` = '$tempat_lahir', `tanggal_lahir` = '$tanggal_lahir', `agama` = '$agama', `jenis_kelamin` = '$jenis_kelamin', `alamat` = '$alamat', `no_hp` = '$no_hp' WHERE `tbl_pegawai`.`no_urut` = $id";

      if (mysqli_query($db, $sql)) {
            header("Location: ../?msg=editsukses");
      } else {
            header("Location: ../?msg=editgagal");
      }
      mysqli_close($db);

    } else {
      header("Location: ../../../index.php?msg=denied");
    }
?>
