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
    
    $id         = $_GET['id'];
    $username   = $_SESSION['session'];
    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user WHERE username = '$username'");
    $tbl_user   = mysqli_fetch_array($sql_user);
      
    $sql_website    = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website    = mysqli_fetch_array($sql_website);
    
    if ($tbl_user['level'] == "Administrator") {
    } else {
      header("Location: ../../../index.php?msg=denied");
    }
#######################################
$nis            = $_POST['nis'];
$sql_kelas      = mysqli_query($db,"SELECT * from tbl_siswa WHERE nis='$nis'");
$siswa          = mysqli_fetch_array($sql_kelas);
$jenis_mutasi 	= $_POST['jenis_mutasi'];
$tanggal_mutasi	= $_POST['tanggal_mutasi'];
$no_surat 		  = $_POST['no_surat'];
$keterangan     = $_POST['keterangan'];
#######################################

$sql = "INSERT INTO `tbl_mutasi` (`no_urut`, `nis`, `nama`, `kelas`, `jenis_mutasi`, `tanggal_mutasi`, `no_surat`, `keterangan`) VALUES (NULL,'$nis', '".$siswa['nama']."', '".$siswa['kelas']."', '$jenis_mutasi', '$tanggal_mutasi', '$no_surat', '$keterangan')";

if (mysqli_query($db, $sql)) {
      header("Location: ../?msg=tambahsukses");
} else {
      header("Location: ../?msg=tambahgagal");
}
mysqli_close($db);

?>
