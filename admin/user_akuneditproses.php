<?php
session_start();
include "cek_login.php";

$id_user        = $_POST["id_user"];
$username       = $_POST["user_username"];
$password       = md5($_POST["user_password"]);
$user_nama      = $_POST["user_nama"];
$user_jns_kel   = $_POST["user_jns_kel"];
$user_telp      = $_POST["user_telp"];
$lvl_login      = $_POST["user_level"];




if ($edit = mysqli_query($konek, "UPDATE tbl_user SET
                                                    user_username='$username',
                                                    user_password='$password',
                                                    user_nama='$user_nama',
                                                    user_jns_kel='$user_jns_kel',
                                                    user_telp='$user_telp',
                                                    user_level='$lvl_login' 
                                WHERE id_user='$id_user'")) {

header('Location: user_akun.php?id=');

exit();
}
die("Terdapat kesalahan : " . mysqli_error($konek));
?>