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
$id 		  = $_POST['id'];
$tahun_ajaran = $tbl_website['tahun_ajaran'];
$semester	  = $tbl_website['semester'];
$nis 		  = $_POST['nis'];
$nama_siswa	  = $_POST['nama_siswa'];
$kelas 		  = $_POST['kelas'];
$tanggal	  = date("Y-m-d");
$jenis_pelanggaran = $_POST['jenis_pelanggaran'];
$poin		  = $_POST['poin'];
$sanksi 	  = $_POST['sanksi'];
#######################################

$sql = "UPDATE `tbl_pelanggaran` SET 
		`tahun_ajaran` = '$tahun_ajaran',
		`semester` = '$semester',
		`nis` = '$nis',
		`nama_siswa` = '$nama_siswa',
		`kelas` = '$kelas',
		`tanggal` = '$tanggal',
		`jenis_pelanggaran` = '$jenis_pelanggaran',
		`poin` = '$poin',
		`sanksi` = '$sanksi'
		WHERE `tbl_pelanggaran`.`no_urut` = $id";



echo $sql;

if (mysqli_query($db, $sql)) {
      header("Location: ../?msg=editsukses");
} else {
      header("Location: ../?msg=editgagal");
}
mysqli_close($db);


?>
