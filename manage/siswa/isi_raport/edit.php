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

###########################################
    
    $id         = $_POST['id'];
    $username   = $_SESSION['session'];
    $sql_user   = mysqli_query($db,"SELECT * FROM tbl_user WHERE username = '$username'");
    $tbl_user   = mysqli_fetch_array($sql_user);

    $sql_siswaq = mysqli_query($db,"SELECT * FROM tbl_siswa WHERE no_urut='$id'");
    $data_siswa = mysqli_fetch_array($sql_siswaq);

    $sql_website    = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website    = mysqli_fetch_array($sql_website);

###########################################

#######################################
$pengetahuan_PAI  = $_POST['pengetahuan_PAI'];
$pengetahuan_PAK  = $_POST['pengetahuan_PAK'];
$pengetahuan_PKN  = $_POST['pengetahuan_PKN'];
$pengetahuan_BI   = $_POST['pengetahuan_BI'];
$pengetahuan_MM   = $_POST['pengetahuan_MM'];
$pengetahuan_PBO  = $_POST['pengetahuan_PBO'];
$pengetahuan_PPL  = $_POST['pengetahuan_PPL'];
$pengetahuan_BD   = $_POST['pengetahuan_BD'];
$pengetahuan_DESK = $_POST['pengetahuan_DESK'];
$pengetahuan_ENG  = $_POST['pengetahuan_ENG'];
$pengetahuan_PJOK = $_POST['pengetahuan_PJOK'];
$pengetahuan_MDRN = $_POST['pengetahuan_MDRN'];
$pengetahuan_KREL = $_POST['pengetahuan_KREL'];
$pengetahuan_KWUH = $_POST['pengetahuan_KWUH'];
$pengetahuan_OFFL = $_POST['pengetahuan_OFFL'];
$pengetahuan_WEBN = $_POST['pengetahuan_WEBN'];
#######################################

#######################################
$keterampilan_PAI  = $_POST['keterampilan_PAI'];
$keterampilan_PAK  = $_POST['keterampilan_PAK'];
$keterampilan_PKN  = $_POST['keterampilan_PKN'];
$keterampilan_BI   = $_POST['keterampilan_BI'];
$keterampilan_MM   = $_POST['keterampilan_MM'];
$keterampilan_PBO  = $_POST['keterampilan_PBO'];
$keterampilan_PPL  = $_POST['keterampilan_PPL'];
$keterampilan_BD   = $_POST['keterampilan_BD'];
$keterampilan_DESK = $_POST['keterampilan_DESK'];
$keterampilan_ENG  = $_POST['keterampilan_ENG'];
$keterampilan_PJOK = $_POST['keterampilan_PJOK'];
$keterampilan_MDRN = $_POST['keterampilan_MDRN'];
$keterampilan_KREL = $_POST['keterampilan_KREL'];
$keterampilan_KWUH = $_POST['keterampilan_KWUH'];
$keterampilan_OFFL = $_POST['keterampilan_OFFL'];
$keterampilan_WEBN = $_POST['keterampilan_WEBN'];
#######################################

    $nis = $data_siswa['nis'];

    $sql_keterampilan = "UPDATE `tbl_nilai_keterampilan` SET `PAI` = '$keterampilan_PAI', `PKN` = '$keterampilan_PKN', `BI` = '$keterampilan_BI', `MM` = '$keterampilan_MM', `PBO` = '$keterampilan_PBO', `PPL` = '$keterampilan_PPL', `BD` = '$keterampilan_BD', `DESK` = '$keterampilan_DESK', `PAK` = '$keterampilan_PAK', `ENG` = '$keterampilan_ENG', `PJOK` = '$keterampilan_PJOK', `MDRN` = '$keterampilan_MDRN', `KREL` = '$keterampilan_KREL', `KWUH` = '$keterampilan_KWUH', `OFFL` = '$keterampilan_OFFL', `WEBN` = '$keterampilan_WEBN' WHERE `tbl_nilai_keterampilan`.`nis` = '$nis';";

    $sql_pengetahuan = "UPDATE `tbl_nilai_pengetahuan` SET `PAI` = '$pengetahuan_PAI', `PKN` = '$pengetahuan_PKN', `BI` = '$pengetahuan_BI', `MM` = '$pengetahuan_MM', `PBO` = '$pengetahuan_PBO', `PPL` = '$pengetahuan_PPL', `BD` = '$pengetahuan_BD', `DESK` = '$pengetahuan_DESK', `PAK` = '$pengetahuan_PAK', `ENG` = '$pengetahuan_ENG', `PJOK` = '$pengetahuan_PJOK', `MDRN` = '$pengetahuan_MDRN', `KREL` = '$pengetahuan_KREL', `KWUH` = '$pengetahuan_KWUH', `OFFL` = '$pengetahuan_OFFL', `WEBN` = '$pengetahuan_WEBN' WHERE `tbl_nilai_pengetahuan`.`nis` = '$nis';";


      if (mysqli_query($db, $sql_keterampilan)) {
            if (mysqli_query($db, $sql_pengetahuan)) {
            header("Location: ../?msg=editsukses");
            }
      } else {
            echo $sql_keterampilan;
      }
      mysqli_close($db);
?>
