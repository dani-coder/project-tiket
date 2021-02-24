<?php
session_start();
include "koneksi.php";

$id_pengunjung      = $_POST["id_pengunjung"];
$nama_pengunjung    = $_POST["nama_pengunjung"];
$email_pengunjung   = $_POST["email_pengunjung"];
$no_hp_pengunjung   = $_POST["no_hp_pengunjung"];
$alamat_pengunjung  = $_POST["alamat_pengunjung"];


if ($edit = mysqli_query($konek, "UPDATE tbl_pengunjung SET
                                                        nama_pengunjung='$nama_pengunjung',
                                                        email_pengunjung='$email_pengunjung ',
                                                        no_hp_pengunjung='$no_hp_pengunjung',
                                                        alamat_pengunjung='$alamat_pengunjung' 
                                WHERE id_pengunjung='$id_pengunjung'")) {

header('Location: datadiriedit.php?id=');

exit();
}
die("Terdapat kesalahan : " . mysqli_error($konek));
?>