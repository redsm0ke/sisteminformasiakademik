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

    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user");
    $tbl_user   = mysqli_fetch_array($sql_user);
      
    $sql_website    = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website    = mysqli_fetch_array($sql_website);
    
    if ($tbl_user['level'] == "Administrator") {
    } else {
      header("Location: ../../../index.php?msg=denied");
    }
#######################################
$no_urut        = $_POST['no_urut'];
$no_tagihan     = rand(00000000,99999999);
$nama_siswa     = $_POST['nama_siswa'];
$jenis_tagihan  = $_POST['jenis_tagihan'];
$tahun_ajaran   = $_POST['tahun_ajaran'];
$semester       = $_POST['semester'];
$jumlah_tagihan = $_POST['jumlah_tagihan'];
$status         = $_POST['status'];
#######################################

$sql = "INSERT INTO `tbl_keuangan` (`no_urut`, `no_tagihan`, `nama_siswa`, `jenis_tagihan`, `tahun_ajaran`, `semester`, `jumlah_tagihan`, `status`) VALUES (NULL, '$no_tagihan', '$nama_siswa', '$jenis_tagihan', '$tahun_ajaran', '$semester', '$jumlah_tagihan', '$status')";


if (mysqli_query($db, $sql)) {
      header("Location: ../?msg=tambahsukses");
} else {
      header("Location: ../?msg=tambahgagal");
}
mysqli_close($db);

?>
