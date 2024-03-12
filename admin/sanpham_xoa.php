<?php

    require 'connect.php';

    $masp = $_GET['spid'];

    echo $masp;


    $sql = "delete from sanpham where MASP='$masp'";
    $conn->query($sql);

    header('Location: danhsachsanpham.php');

?>