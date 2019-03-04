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
$kode_pelajaran  = $_POST['kode_pelajaran'];
$nama_pelajaran	 = $_POST['nama_pelajaran'];
$sifat_pelajaran = $_POST['sifat_pelajaran'];
##############################################

$sql = "INSERT INTO `tbl_pelajaran` (`no_urut`, `kode_pelajaran`, `nama_pelajaran`, `sifat_pelajaran`) VALUES (NULL, '$kode_pelajaran', '$nama_pelajaran', '$sifat_pelajaran')";

if (mysqli_query($db, $sql)) {
      header("Location: ../?msg=tambahsukses");
} else {
      header("Location: ../?msg=tambahgagal");
}
mysqli_close($db);
?>
