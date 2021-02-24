<?php
session_start();
include "cek_login.php";


$id_fieldtrip	= $_GET["id"];

	
if($delete = mysqli_query ($konek, "DELETE FROM tbl_fieldtrip WHERE id_fieldtrip='$id_fieldtrip'")){
    header('Location: produk3.php?id=');
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));


?>