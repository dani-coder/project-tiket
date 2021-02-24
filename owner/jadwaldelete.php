<?php
   session_start();
   include "cek_login.php";

$id = $_POST['id'];

$sqlDelete = "DELETE from tbl_event WHERE id=".$id;

mysqli_query($konek, $sqlDelete);
echo mysqli_affected_rows($konek);

mysqli_close($konek);
?>