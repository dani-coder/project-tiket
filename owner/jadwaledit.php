<?php
   session_start();
   include "cek_login.php";


$id = $_POST['id'];
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];

$sqlUpdate = "UPDATE tbl_event SET title='" . $title . "',start='" . $start . "',end='" . $end . "' WHERE id=" . $id;
mysqli_query($konek, $sqlUpdate)
//mysqli_close($koneksi);

?>