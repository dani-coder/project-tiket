<?php
session_start();
include "koneksi.php"; 

$id_pemesanan = $_GET["id_pemesanan"];

$result = mysqli_query($konek, "SELECT * FROM tbl_pengunjung INNER JOIN tbl_pemesanan ON 
tbl_pengunjung.id_pengunjung=tbl_pemesanan.id_pengunjung WHERE tbl_pemesanan.id_pemesanan = '$id_pemesanan' ");
$ambilpengunjung = mysqli_fetch_array($result) ;
$data= array(
        'nama_pengunjung'     => $ambilpengunjung['nama_pengunjung'],
        'email_pengunjung'    => $ambilpengunjung['email_pengunjung'],
        'no_hp_pengunjung'    => $ambilpengunjung['no_hp_pengunjung'],
        'alamat_pengunjung'    => $ambilpengunjung['alamat_pengunjung'],

        'id_pemesanan'    => $ambilpengunjung['id_pemesanan'],
        'item_pemesanan'    => $ambilpengunjung['item_pemesanan'],
        'tgl_kegiatan'    => $ambilpengunjung['tgl_kegiatan'],
        'harga_pemesanan'    => $ambilpengunjung['harga_pemesanan'],
        'qty_peserta_pemesanan'    => $ambilpengunjung['qty_peserta_pemesanan'],
        'total_pemesanan'    => $ambilpengunjung['total_pemesanan'],        
);
echo json_encode($data);
?>