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
$id               = $_POST['id'];
$kode_pelajaran   = $_POST['kode_pelajaran'];
$nama_pelajaran   = $_POST['nama_pelajaran'];
$sifat_pelajaran  = $_POST['sifat_pelajaran'];
#######################################

    $username   = $_SESSION['session'];
    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user WHERE username = '$username'");
    $tbl_user   = mysqli_fetch_array($sql_user);

    if ($tbl_user['level'] == "Administrator") {
      $sql = "UPDATE `tbl_pelajaran` SET `kode_pelajaran` = '$kode_pelajaran', `nama_pelajaran` = '$nama_pelajaran', `sifat_pelajaran` = '$sifat_pelajaran' WHERE `tbl_pelajaran`.`no_urut` = '$id'";

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
