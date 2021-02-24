<?php
     include "koneksi.php";

    $json = array();
    $sqlQuery = "SELECT * FROM tbl_event WHERE user='$_SESSION[fullname]'";

    $result = mysqli_query($konek, $sqlQuery);
    $eventArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($eventArray, $row);
    }
    mysqli_free_result($result);

    mysqli_close($konek);
    echo json_encode($eventArray);
?>