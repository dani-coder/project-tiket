<?php
session_start();
include "cek_login.php";


$id_pemesanan	= $_GET["id"];

	
if($delete = mysqli_query ($konek, "DELETE FROM tbl_pemesanan WHERE id_pemesanan='$id_pemesanan'")){
    header('Location: pemesanan.php?id=');
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));


?>