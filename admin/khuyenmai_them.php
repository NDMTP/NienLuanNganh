<?php
    require 'connect.php';
    
    $makm = $_GET['makm'];
    $tile = $_GET['tile'];
    $dk = $_GET['dk'];
    $tu = $_GET['tu'];
    $den = $_GET['den'];

    $sql= "insert into khuyenmai values ('$makm',$tile,$dk,'$tu','$den')";

    $conn->query($sql);

    header("Location: khuyenmai_ds.php");

?>