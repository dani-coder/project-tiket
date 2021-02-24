<?php
session_start();
include "cek_login.php";


$id_user	= $_GET["id"];

	
if($delete = mysqli_query ($konek, "DELETE FROM tbl_user WHERE id_user='$id_user'")){
    header('Location: user_akun.php?id=');
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));


?>