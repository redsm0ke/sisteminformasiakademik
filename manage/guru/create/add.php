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
$nip           = $_POST['nip'];
$nama          = $_POST['nama'];
$pelajaran     = $_POST['pelajaran'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama         = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat        = $_POST['alamat'];
$no_hp         = $_POST['no_hp'];
##############################################

    $id        = $_GET['id'];
    $username  = $_SESSION['session'];
    $sql_user  = mysqli_query($db,"SELECT * FROM tbl_user WHERE username = '$username'");
    $tbl_user  = mysqli_fetch_array($sql_user);
      
    $sql_website    = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website    = mysqli_fetch_array($sql_website);
    
    if ($tbl_user['level'] == "Administrator") {
    $sql = "INSERT INTO `tbl_guru` (`no_urut`, `nip`, `nama`, `pelajaran`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jenis_kelamin`, `alamat`, `no_hp`) VALUES (NULL, '$nip', '$nama', '$pelajaran', '$tempat_lahir', '$tanggal_lahir', '$agama', '$jenis_kelamin', '$alamat', '$no_hp')";
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
