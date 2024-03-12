<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsthi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$maloai = $_GET["loai"];
$tensp = $_GET["tensp"];
$dongiabansp = $_GET["dongiabansp"];

// Assuming $mansx is obtained from the form or another source
$mansx = $_GET["nsx"]; // Adjust this according to your actual input method

$sql = "SELECT max(CAST(SUBSTRING(MASP, 3) AS SIGNED)) AS maxid
FROM sanpham WHERE MALOAI = '$maloai'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$maxid = $row['maxid'] + 1;

$sql = "select max(MASP) as maxid from sanpham where MALOAI = '{$maloai}'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row['maxid'];
preg_match("/([A-Za-z]+)([0-9]+)/", $id, $matches);
$kytu = $matches[1];

$nextid = $kytu . $maxid;

$pdimg = "default.png";
$tardir = "../images/" . $kytu . "/";
// Check if the file is uploaded
if (isset($_FILES["pdimg"]) && !empty($_FILES["pdimg"]["name"])) {
  $file = $_FILES["pdimg"];
  $filename = $file['name'];
  if (move_uploaded_file($file['tmp_name'], $tardir . $filename)) {
    $pdimg = $filename;
  }
}

$motasp = $_GET["mota"];

$sql = "INSERT INTO sanpham (MASP,MANSX,MALOAI,TENSP,DONGIABANSP,MOTA,LINKANH)
VALUES ('$nextid','$mansx', '$maloai', '$tensp','$dongiabansp', '$motasp', '$pdimg')";

$result = $conn->query($sql);

if (!$result) {
  echo "Thêm sản phẩm thất bại: " . $conn->error;
} else {
  echo '<script language="javascript">alert("Thêm thành công!");</script>';
  header('Location: danhsachsanpham.php');
}

// Đóng kết nối
$conn->close();
?>
