<?php
session_start();
include "cek_login.php";

$id_wahana       = $_POST["id_wahana"];
$wahana_nama     = $_POST["wahana_nama"];
$wahana_harga    = $_POST["wahana_harga"];


if ($add = mysqli_query($konek, "INSERT INTO tbl_wahana (
                                                          id_wahana,
                                                          wahana_nama,
                                                          wahana_harga)
  VALUES('$id_wahana',
         '$wahana_nama',
         '$wahana_harga')")) 
{
  header("Location: produk.php");
  exit();
  
}
die("Terdapat kesalahan : " . mysqli_error($konek));
?>