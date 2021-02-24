<?php
session_start();
include "koneksi.php";


$id_pengunjung	= $_GET["id"];

	
if($delete = mysqli_query ($konek, "DELETE FROM tbl_pengunjung WHERE id_pengunjung='$id_pengunjung'")){
    header('Location: datadiri.php?id=');
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));


?>