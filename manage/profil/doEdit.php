<?php
session_start();

 if(isset($_SESSION['session'])){
  } else {
  header("Location: /account/login?msg=login");
}

##############################################

include '../../assets/includes/configuration.php';
include '../../assets/includes/db.php';

##############################################
	
    $sql_website    = mysqli_query($db,"SELECT * FROM tbl_website");
    $tbl_website    = mysqli_fetch_array($sql_website);

##############################################
	
	$password_lama			= $_POST['password_lama'];
	$password_baru			= $_POST['password_baru'];
	$konfirmasi_password	= $_POST['konfirmasi_password'];
	$cek 					= $db->query("SELECT password FROM tbl_user WHERE password='$password_lama'");

##############################################
		if($cek->num_rows){
			if(strlen($password_baru) >= 5){
				if($password_baru == $konfirmasi_password){
					$id_user 		= $_POST['session_id'];
					$update 		= $db->query("UPDATE tbl_user SET password='$password_baru' WHERE username='$id_user'");
					if($update){
						header("Location: /manage/profil/?msg=passwordsukses");
					}else{
						header("Location: /manage/profil/?msg=passwordgagal");
					}					
				}else{
						header("Location: /manage/profil/?msg=passwordfailed");
				}
			}else{
						header("Location: /manage/profil/?msg=passwordlimit");
			}
		}else{
						header("Location: /manage/profil/?msg=passworddifferent");
		}
	?>
