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
$id         = $_POST['id'];
$nis            = $_POST['nis'];
$sql_kelas      = mysqli_query($db,"SELECT * from tbl_siswa WHERE nis='$nis'");
$siswa          = mysqli_fetch_array($sql_kelas);
$jenis_mutasi 	= $_POST['jenis_mutasi'];
$tanggal_mutasi	= $_POST['tanggal_mutasi'];
$no_surat 		  = $_POST['no_surat'];
$keterangan     = $_POST['keterangan'];
#######################################


    $username   = $_SESSION['session'];
    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user WHERE username = '$username'");
    $tbl_user    = mysqli_fetch_array($sql_user);

    $sql_website    = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website    = mysqli_fetch_array($sql_website);

    if ($tbl_user['level'] == "Administrator") {
		$sql = "UPDATE `tbl_mutasi` SET `nis` = '$nis', `nama` = '".$siswa['nama']."', `kelas` = '".$siswa['kelas']."', `jenis_mutasi` = '$jenis_mutasi', `tanggal_mutasi` = '$tanggal_mutasi', `no_surat` = '$no_surat', `keterangan` = '$keterangan' WHERE `tbl_mutasi`.`no_urut` = $id";

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
