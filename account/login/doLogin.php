<?php 
session_start();

include '../../assets/includes/db.php';

$username = mysqli_real_escape_string($db,$_POST['username']);
$password = mysqli_real_escape_string($db,$_POST['password']); 
$sql 	    = "SELECT no_urut, username FROM tbl_user WHERE username = '$username' and password = '$password' LIMIT 1";
	  
      $result = mysqli_query($db,$sql);
      $row 		= mysqli_fetch_array($result);
      $user 	= $row['username'];
      $count 	= mysqli_num_rows($result);
	 
      if($count == 1) {
		    session_start();
        $_SESSION['session'] = $user;
		    header("location:../../index.php");
      } else {
      	header("Location:index.php?msg=gagal");
      }
?>