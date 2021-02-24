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




if ($edit = mysqli_query($konek, "UPDATE tbl_pemesanan SET
                                                    tgl_kegiatan='$tgl_kegiatan',
                                                    item_pemesanan='$item_pemesanan',
                                                    harga_pemesanan='$harga_pemesanan',
                                                    qty_peserta_pemesanan='$qty_peserta_pemesanan',
                                                    total_pemesanan='$total_pemesanan',
                                                    nama_user='$nama_user ' 
                                WHERE id_pemesanan='$id_pemesanan'")) {

header('Location: pemesanan.php?id=');

exit();
}
die("Terdapat kesalahan : " . mysqli_error($konek));
?>