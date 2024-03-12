<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanmicay";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$masp = $_GET["masp"];
$maloai = $_GET["loai"];
$tensp = $_GET["tensp"];
$motasp = $_GET["mota"];

$sql = "update sanpham set TENSP = '$tensp', MOTA='$motasp', MALOAI='$maloai' where MASP = '$masp'";
$conn->query($sql);

if ($_GET["M"] != 0) {
    $giaM = $_GET["M"];
    if ($giaM != 0) {
        $sql = "update sizecuasanpham set DONGIASP = $giaM where MASP='$masp' and MASIZE='M'";
        echo $sql;
        $conn->query($sql);
    }
}
if ($_GET["L"] != 0) {
    $giaL = $_GET["L"];
    if ($giaL != 0) {
        $sql = "update sizecuasanpham set DONGIASP = $giaL where MASP='$masp' and MASIZE='L'";
        echo $sql;
        $conn->query($sql);
    }
}
if ($_GET["XL"] != 0) {
    $giaXL = $_GET["XL"];
    if ($giaXL != 0) {
        $sql = "update sizecuasanpham set DONGIASP = $giaXL where MASP='$masp' and MASIZE='XL'";
        echo $sql;
        $conn->query($sql);
    }
}
if ($_GET["Vừa"] != 0) {
    $giaVua = $_GET["Vừa"];
    if ($giaVua != 0) {
        $sql = "update sizecuasanpham set DONGIASP = $giaVua where MASP='$masp' and MASIZE='Vừa'";
        echo $sql;
        $conn->query($sql);
    }
}
if ($_GET["Lớn"] != 0) {
    $giaLon = $_GET["Lớn"];
    if ($giaLon != 0) {
        $sql = "update sizecuasanpham set DONGIASP = $giaLon where MASP='$masp' and MASIZE='Lớn'";
        echo $sql;
        $conn->query($sql);
    }
}
if ($_GET["Combo"] != 0) {
    $giaCombo = $_GET["Combo"];
    if ($giaCombo != 0) {
        $sql = "update sizecuasanpham set DONGIASP = $giaCombo where MASP='$masp' and MASIZE='Combo'";
        echo $sql;
        $conn->query($sql);
    }
}

header('Location: danhsachsanpham.php');

// Đóng kết nối
$conn->close();
?>