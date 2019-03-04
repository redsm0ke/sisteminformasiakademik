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
$tahun_ajaran = $tbl_website['tahun_ajaran'];
$semester   = $tbl_website['semester'];
$nis      = $_POST['nis'];
$nama_siswa   = $_POST['nama_siswa'];
$kelas      = $_POST['kelas'];
$tanggal    = date("Y-m-d");
$jenis_pelanggaran = $_POST['jenis_pelanggaran'];
$poin     = $_POST['poin'];
$sanksi     = $_POST['sanksi'];
#######################################

    $id         = $_GET['id'];
    $username   = $_SESSION['session'];
    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user WHERE username = '$username'");
    $tbl_user   = mysqli_fetch_array($sql_user);
      
    $sql_website    = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website    = mysqli_fetch_array($sql_website);
    
    if ($tbl_user['level'] == "Administrator") {
      $sql = "INSERT INTO `tbl_pelanggaran` (`no_urut`, `tahun_ajaran`, `semester`, `nis`, `nama_siswa`, `kelas`, `tanggal`, `jenis_pelanggaran`, `poin`, `sanksi`) VALUES (NULL, '$tahun_ajaran', '$semester', '$nis', '$nama_siswa', '$kelas', '$tanggal', '$jenis_pelanggaran', '$poin', '$sanksi')";

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
