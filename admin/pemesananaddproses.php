<?php
session_start();
include "cek_login.php";

$id_pemesanan           = $_POST["id_pemesanan"];
$tgl_kegiatan             = date("Y-m-d", strtotime($_POST["tgl_kegiatan"]));
$item_pemesanan         = $_POST["item_pemesanan"];
$harga_pemesanan         = $_POST["harga_pemesanan"];
$qty_peserta_pemesanan  = $_POST["qty_peserta_pemesanan"];
$total_pemesanan         = $_POST["total_pemesanan"];
$id_pengunjung         = $_POST["id_pengunjung"];
$nama_user          = $_POST["nama_user"];

if ($add = mysqli_query($konek, "INSERT INTO tbl_pemesanan  (
                                                         id_pemesanan,
                                                         tgl_kegiatan,
                                                         item_pemesanan,
                                                         harga_pemesanan,
                                                         qty_peserta_pemesanan,
                                                         total_pemesanan,
                                                         id_pengunjung,
                                                         nama_user)
  VALUES('$id_pemesanan',
         '$tgl_kegiatan',
         '$item_pemesanan',
         '$harga_pemesanan',
         '$qty_peserta_pemesanan',
         '$total_pemesanan',
         '$id_pengunjung',
         '$nama_user')")) 
{
  header("Location: pemesanan.php");
  exit();
  
}
die("Terdapat kesalahan : " . mysqli_error($konek));
?>

