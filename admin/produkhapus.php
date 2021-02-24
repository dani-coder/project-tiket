<?php
session_start();
include "cek_login.php";


$id_wahana	= $_GET["id"];

	
if($delete = mysqli_query ($konek, "DELETE FROM tbl_wahana WHERE id_wahana='$id_wahana'")){
    header('Location: produk.php?id=');
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));


?>