<?php
session_start();
include "koneksi.php";
  // include "pswd.php";



$user_username = $_POST["user_username"];
$user_password = md5($_POST["user_password"]);


$query = mysqli_query ($konek, "SELECT * FROM tbl_user WHERE 
user_username='$user_username' AND user_password='$user_password'");

// Validasi Login
$val = mysqli_num_rows($query);


if ($val > 0){

	$data = mysqli_fetch_assoc($query);

		if($data['user_level'] == "admin"){

			$_SESSION['user_username']   = $user_username;
			$_SESSION['user_level']  = "admin";
			header("location:admin/index.php");

		}elseif ($data['user_level'] == "petugas") {
			
			$_SESSION['user_username']   = $user_username;
			$_SESSION['user_level']  = "petugas";
			header("location:petugas/index.php");

		}elseif ($data['user_level'] == "owner") {
			
			$_SESSION['user_username']   = $user_username;
			$_SESSION['user_level']  = "owner";
			header("location:owner/index.php");

		}else {
			header("location:login.php?pesan=gagal");
		}

}else{
	header("location:login.php?pesan=gagal");
}


?>