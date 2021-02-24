<?php
session_start();
include "cek_login.php";


$id_bayar            = $_POST["id_bayar"];
$id_pemesanan        = $_POST["id_pemesanan"];
$bayar_gambar        = $_FILES['bayar_gambar']['name'];
$bayar_tgl           = date("Y-m-d", strtotime($_POST["bayar_tgl"]));
$bayar_total         = $_POST["bayar_total"];


  if ($edit = mysqli_query($konek, "UPDATE tbl_bayar SET  
                                                          bayar_gambar='$bayar_gambar',
                                                          bayar_tgl='$bayar_tgl',
                                                          bayar_total='$bayar_total'
                                    WHERE id_bayar='$id_bayar'"))
  
  {
    header("Location: pembayaran.php");
    move_uploaded_file($_FILES['bayar_gambar']['tmp_name'],'../image/'.$bayar_gambar);
    exit();
	}
    die ("Terdapat kesalahan : ". mysqli_error($konek));


?>