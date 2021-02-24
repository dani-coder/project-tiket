<?php
    include "../koneksi.php";
    if ($_SESSION['user_level'] == "") {
        header("location:../login.php?pesan=belum_login");
    }

    $session_lvl_login = $_SESSION['user_level'];
    $session_username = $_SESSION['user_username'];
    

?>