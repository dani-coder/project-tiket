<?php
session_start();
include "cek_login.php";

$id_outbond       = $_POST["id_outbond"];
$outbond_nama     = $_POST["outbond_nama"];
$outbond_harga    = $_POST["outbond_harga"];


if ($edit = mysqli_query($konek, "UPDATE tbl_outbond SET
                                                        outbond_nama='$outbond_nama',
                                                        outbond_harga='$outbond_harga' 
                                WHERE id_outbond='$id_outbond'")) {

header('Location: produk2.php?id=');

exit();
}
die("Terdapat kesalahan : " . mysqli_error($konek));
?>