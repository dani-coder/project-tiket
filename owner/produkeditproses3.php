<?php
session_start();
include "cek_login.php";

$id_fieldtrip       = $_POST["id_fieldtrip"];
$fieldtrip_nama     = $_POST["fieldtrip_nama"];
$fieldtrip_harga    = $_POST["fieldtrip_harga"];


if ($edit = mysqli_query($konek, "UPDATE tbl_fieldtrip SET
                                                        fieldtrip_nama='$fieldtrip_nama',
                                                        fieldtrip_harga='$fieldtrip_harga' 
                                WHERE id_fieldtrip='$id_fieldtrip'")) {

header('Location: produk3.php?id=');

exit();
}
die("Terdapat kesalahan : " . mysqli_error($konek));
?>