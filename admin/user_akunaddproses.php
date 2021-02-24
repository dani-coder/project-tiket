<?php
session_start();
include "cek_login.php";

$id_user        = $_POST["id_user"];
$user_username  = $_POST["user_username"];
$password       = md5($_POST["user_password"]);
//$user_password = md5($_POST["user_password"]);
$user_nama      = $_POST["user_nama"];
$user_jns_kel   = $_POST["user_jns_kel"];
$user_telp      = $_POST["user_telp"];
$user_level     = $_POST["user_level"];



if ($add = mysqli_query($konek, "INSERT INTO tbl_user (
                                                          id_user,
                                                          user_username,
                                                          user_password,
                                                          user_nama,
                                                          user_jns_kel,
                                                          user_telp,
                                                          user_level)
  VALUES('$id_user',
         '$user_username',
         '$user_password',
         '$user_nama ',
         '$user_jns_kel',
         '$user_telp',
         '$user_level ')")) 
{
  header("Location: user_akun.php");
  exit();
  
}
die("Terdapat kesalahan : " . mysqli_error($konek));
?>