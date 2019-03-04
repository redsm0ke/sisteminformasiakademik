<?php
error_reporting(0);
session_start();

 if(isset($_SESSION['session'])){
  } else {
  header("Location: /account/login?msg=login");
}

##############################################

include '../../assets/includes/configuration.php';
include '../../assets/includes/db.php';

##############################################

#######################################
$namasekolah  = $_POST['namasekolah'];
$tahun_ajaran   = $_POST['tahun_ajaran'];
$web_sekolah  = $_POST['web_sekolah'];
$semester = $_POST['semester'];
$manage_dir = $_POST['manage_dir'];
#######################################

    $id         = $_GET['id'];
    $username   = $_SESSION['session'];
    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user WHERE username = '$username'");
    $tbl_user   = mysqli_fetch_array($sql_user);
    
    if ($tbl_user['level'] == "Administrator") {
    $sql = "UPDATE `tbl_website` SET `nama_sekolah` = '$namasekolah', `web_sekolah` = '$web_sekolah', `tahun_ajaran` = '$tahun_ajaran', `semester` = '$semester', `manage_dir` = '$manage_dir'";


    if (mysqli_query($db, $sql)) {
          header("Location: ../configuration/?msg=editsukses");
    } else {
          header("Location: ../configuration/?msg=editgagal");
    }
    mysqli_close($db);
    } else {
      header("Location: ../../../index.php?msg=denied");
    }
?>
