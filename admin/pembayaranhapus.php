<?php
session_start();
include "cek_login.php";


    $event_id	= $_GET["id"];
	
    if($delete = mysqli_query ($konek, "DELETE FROM tbl_bayar WHERE id_bayar='$event_id'"))
    {
        header("Location: pembayaran.php");
        move_uploaded_file($_FILES['bayar_gambar']['tmp_name'],'../image/'.$bayar_gambar);
        exit();
 }  
  else{
  
     $hapus= mysqli_query ($konek, "SELECT*FROM tbl_bayar where id_bayar='$event_id'");
      // menghapus gambar yang lama
      $nama_gambar=mysqli_fetch_array($hapus);
      // nama field gambar
      $lokasi=$nama_gambar['bayar_gambar'];
      // alamat tempat foto
      $hapus_gambar="../image/$lokasi";
      // script untuk menghapus gambar dari folder
      unlink($hapus_gambar);
      header('Location: pembayaran.php?id=' . $event_id);
      move_uploaded_file($_FILES['bayar_gambar']['tmp_name'],'../image/'.$bayar_gambar);
  }
  die ("Terdapat kesalahan : ". mysqli_error($konek));


?>



