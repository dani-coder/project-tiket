<?php 
// koneksi database
include 'pemesanan.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_pemesan'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from pemesanan where id='$id_pemesan'");
 
// mengalihkan halaman kembali ke index.php
header("location:pemesanan.php");
 
?>