<?php
    $connect = mysqli_connect("localhost", "root", "", "site");

    if (!$connect){
        die("Error connect");
    }

    $connect->set_charset("utf8mb4");

?>