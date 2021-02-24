<?php
session_start();
include "cek_login.php";

$id_outbond        = $_POST["id_outbond"];
$outbond_nama     = $_POST["outbond_nama"];
$outbond_harga    = $_POST["outbond_harga"];


if ($add = mysqli_query($konek, "INSERT INTO tbl_outbond (
                                                          id_outbond,
                                                          outbond_nama,
                                                          outbond_harga)
  VALUES('$id_outbond',
         '$outbond_nama',
         '$outbond_harga')")) 
{
  header("Location: produk2.php");
  exit();
  
}
die("Terdapat kesalahan : " . mysqli_error($konek));
?>