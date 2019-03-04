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


    $username   = $_SESSION['session'];
    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user WHERE username = '$username'");
    $tbl_user   = mysqli_fetch_array($sql_user);
      
    $sql_website    = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website    = mysqli_fetch_array($sql_website);
    
    if ($tbl_user['level'] == "Administrator") {
      
#######################################
$id             = $_POST['id'];
$judul          = $_POST['judul'];
$kategori_event   = $_POST['kategori_event'];
$isi          = $_POST['isi'];
$tanggal_mulai      = $_POST['tanggal_mulai'];
$tanggal_selesai  = $_POST['tanggal_selesai'];
$penulis        = $_SESSION['session'];
#######################################
      $sql = "INSERT INTO `tbl_event` (`no_urut`, `judul`, `kategori_event`, `isi`, `tanggal_mulai`, `tanggal_selesai`, `penulis`) VALUES (NULL, '$judul', '$kategori_event', '$isi', '$tanggal_mulai', '$tanggal_selesai', '$penulis')";
      
      if (mysqli_query($db, $sql)) {
            header("Location: ../?msg=tambahsukses");
      } else {
            header("Location: ../?msg=tambahgagal");
      }
      mysqli_close($db);
    } else {
      header("Location: ../../../index.php?msg=denied");
    }
?>
