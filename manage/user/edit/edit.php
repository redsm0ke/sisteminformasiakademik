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
$id        = $_POST['id'];
$usernames = $_POST['username'];
$password  = $_POST['password'];
$level     = $_POST['level'];
#######################################

    $username   = $_SESSION['session'];
    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user WHERE username = '$username'");
    $tbl_user   = mysqli_fetch_array($sql_user);

    if ($tbl_user['level'] == "Administrator") {
      $sql = "UPDATE `tbl_user` SET `username` = '$usernames', `password` = '$password', `level` = '$level', `password` = '$password' WHERE `no_urut` = '$id'";

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
