<?php
session_start();
include "cek_login.php";

$id_fieldtrip       = $_POST["id_fieldtrip"];
$fieldtrip_nama     = $_POST["fieldtrip_nama"];
$fieldtrip_harga    = $_POST["fieldtrip_harga"];


if ($add = mysqli_query($konek, "INSERT INTO tbl_fieldtrip (
                                                          id_fieldtrip,
                                                          fieldtrip_nama,
                                                          fieldtrip_harga)
  VALUES('$id_fieldtrip',
         '$fieldtrip_nama',
         '$fieldtrip_harga')")) 
{
  header("Location: produk3.php");
  exit();
  
}
die("Terdapat kesalahan : " . mysqli_error($konek));
?>