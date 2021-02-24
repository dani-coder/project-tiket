<?php
session_start();
include "koneksi.php";

$id_pengunjung      = $_POST["id_pengunjung"];
$nama_pengunjung    = $_POST["nama_pengunjung"];
$email_pengunjung   = $_POST["email_pengunjung"];
$no_hp_pengunjung   = $_POST["no_hp_pengunjung"];
$alamat_pengunjung  = $_POST["alamat_pengunjung"];


if ($add = mysqli_query($konek, "INSERT INTO tbl_pengunjung (
                                                         id_pengunjung,
                                                         nama_pengunjung,
                                                         email_pengunjung,
                                                         no_hp_pengunjung,
                                                         alamat_pengunjung)
  VALUES('$id_pengunjung',
         '$nama_pengunjung',
         '$email_pengunjung',
         '$no_hp_pengunjung',
         '$alamat_pengunjung')")) 
{
  header("Location: produk.php");
  exit();
  
}
die("Terdapat kesalahan : " . mysqli_error($konek));
?>