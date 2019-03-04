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
	
    $sql_website    = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website    = mysqli_fetch_array($sql_website);

    if ($tbl_user['level'] == "Administrator") {
    } else {
      header("Location: ../../../index.php?msg=denied");
    }
#######################################
$id 				= $_POST['id'];
$no_tagihan 				= $_POST['no_tagihan'];
$nama_siswa 				= $_POST['nama_siswa'];
$jenis_tagihan 		= $_POST['jenis_tagihan'];
$tahun_ajaran 		= $_POST['tahun_ajaran'];
$semester 				= $_POST['semester'];
$jumlah_tagihan 		= $_POST['jumlah_tagihan'];
$status 			= $_POST['status'];
#######################################

$sql = "UPDATE `tbl_keuangan` SET `jenis_tagihan` = '$jenis_tagihan', `semester` = '$semester', `jumlah_tagihan` = '$jumlah_tagihan', `status` = '$status' WHERE `tbl_keuangan`.`no_urut` = $id";

if (mysqli_query($db, $sql)) {
      header("Location: ../?msg=editsukses");
} else {
      header("Location: ../?msg=editgagal");
}
mysqli_close($db);

?>
