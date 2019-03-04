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

    if ($tbl_user['level'] == "Administrator") {
    $id  = $_GET['id'];
    $sql = "DELETE FROM `tbl_event` WHERE no_urut = '$id'";

    if (mysqli_query($db, $sql)) {
          header("Location: ../?msg=hapussukses");
    } else {
          header("Location: ../?msg=hapusgagal");
    }
    mysqli_close($db);
    } else {
      header("Location: ../../../index.php?msg=denied");
    }
#######################################
?>
