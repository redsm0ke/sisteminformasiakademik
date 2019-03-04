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

##############################################
$id   = $_POST['id'];
$judul  = $_POST['judul'];
$isi  = $_POST['isi'];
##############################################

    $id         = $_GET['id'];
    $username   = $_SESSION['session'];
    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user WHERE username = '$username'");
    $tbl_user   = mysqli_fetch_array($sql_user);
      
    $sql_website    = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website    = mysqli_fetch_array($sql_website);
    
    if ($tbl_user['level'] == "Administrator") {
      $sql = "UPDATE `tbl_berita` SET `judul` = '$judul', `isi`   = '$isi' WHERE `tbl_berita`.`no_urut` = '$id'";

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
