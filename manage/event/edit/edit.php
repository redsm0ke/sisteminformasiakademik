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
$id         = $_POST['id'];
$judul        = $_POST['judul'];
$kategori     = $_POST['kategori'];
$isi        = $_POST['isi'];
$tanggal_mulai    = $_POST['tanggal_mulai'];
$tanggal_selesai  = $_POST['tanggal_selesai'];
$penulis      = $_POST['username'];
#######################################

    $username   = $_SESSION['session'];
    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user WHERE username = '$username'");
    $tbl_user   = mysqli_fetch_array($sql_user);

    $sql_website    = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website    = mysqli_fetch_array($sql_website);

    if ($tbl_user['level'] == "Administrator") {
    $sql = "UPDATE `tbl_event` SET `judul` = '$judul', `kategori_event` = '$kategori', `isi` = '$isi', `tanggal_mulai` = '$tanggal_mulai', `tanggal_selesai` = '$tanggal_selesai', `penulis` = '$penulis' WHERE `tbl_event`.`no_urut` = $id";
    
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
