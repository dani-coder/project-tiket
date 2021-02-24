<?php
session_start();
include "cek_login.php";

$id_wahana       = $_POST["id_wahana"];
$wahana_nama     = $_POST["wahana_nama"];
$wahana_harga    = $_POST["wahana_harga"];


if ($edit = mysqli_query($konek, "UPDATE tbl_wahana SET
                                                        wahana_nama='$wahana_nama',
                                                        wahana_harga='$wahana_harga' 
                                WHERE id_wahana='$id_wahana'")) {

header('Location: produk.php?id=');

exit();
}
die("Terdapat kesalahan : " . mysqli_error($konek));
?>