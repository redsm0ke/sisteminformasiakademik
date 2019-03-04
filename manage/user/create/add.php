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
    } else {
      header("Location: ../../../index.php?msg=denied");
    }
##############################################
$username  = $_POST['username'];
$password	 = $_POST['password'];
$level     = $_POST['level'];
##############################################

$sql = "INSERT INTO `tbl_user` (`no_urut`, `username`, `password`, `level`) VALUES (NULL, '$username', '$password', '$level')";

if (mysqli_query($db, $sql)) {
      header("Location: ../?msg=tambahsukses");
} else {
      header("Location: ../?msg=tambahgagal");
}
mysqli_close($db);
?>
