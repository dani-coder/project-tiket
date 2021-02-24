<?php
session_start();
include "cek_login.php";


$id_outbond	= $_GET["id"];

	
if($delete = mysqli_query ($konek, "DELETE FROM tbl_outbond WHERE id_outbond='$id_outbond'")){
    header('Location: produk2.php?id=');
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));


?>