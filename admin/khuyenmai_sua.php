<?php
    require 'connect.php';
    
    $makm = $_GET['makm'];
    $tile = $_GET['tile'];
    $dk = $_GET['dk'];
    $tu = $_GET['tu'];
    $den = $_GET['den'];

    $sql= "update khuyenmai set PHANTRAMKM=$tile, DIEUKIENKM=$dk, NGAYBD='$tu', NGAYKT='$den' where MAKM='$makm'";

    $conn->query($sql);

    header("Location: khuyenmai_ds.php");

?>