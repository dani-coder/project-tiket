<?php
session_start();
include "koneksi.php";


$id_bayar            = $_POST["id_bayar"];
$id_pemesanan        = $_POST["id_pemesanan"];

$bayar_gambar      = $_FILES['bayar_gambar']['name'];

$bayar_tgl  = date("Y-m-d", strtotime($_POST["bayar_tgl"]));

$bayar_total      = $_POST["bayar_total"];






if ($add = mysqli_query($konek, "INSERT INTO tbl_bayar ( 
                                                          id_bayar,
                                                          id_pemesanan,
                                                          bayar_gambar,
                                                          bayar_tgl, 
                                                          bayar_total)
  VALUES('$id_bayar',
         '$id_pemesanan',
         '$bayar_gambar',
         '$bayar_tgl',
         '$bayar_total')")) 
{
  header("Location: byrsukses.php");
  move_uploaded_file($_FILES['bayar_gambar']['tmp_name'],'image/'.$bayar_gambar);
  exit();
  
}
die("Terdapat kesalahan : " . mysqli_error($konek));
?>