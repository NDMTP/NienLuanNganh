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

// Assuming the product ID (MASP) is obtained from the form or another source
$masp = $_GET["masp"]; // Adjust this according to your actual input method

$maloai = $_GET["loai"];
$tensp = $_GET["tensp"];
$dongiabansp = $_GET["dongiabansp"];

// Assuming $mansx is obtained from the form or another source
$mansx = $_GET["nsx"]; // Adjust this according to your actual input method

$pdimg = "default.png";
$tardir = "../images/";

// Check if the file is uploaded
if (isset($_FILES["pdimg"]) && !empty($_FILES["pdimg"]["name"])) {
  $file = $_FILES["pdimg"];
  $filename = $file['name'];
  if (move_uploaded_file($file['tmp_name'], $tardir . $filename)) {
    $pdimg = $filename;
  }
}

$motasp = $_GET["mota"];

// Construct the UPDATE query
$sql = "UPDATE sanpham 
        SET MANSX = '$mansx', MALOAI = '$maloai', TENSP = '$tensp', DONGIABANSP = '$dongiabansp', 
            MOTA = '$motasp', LINKANH = '$pdimg'
        WHERE MASP = '$masp'";

$result = $conn->query($sql);

if (!$result) {
  echo "Cập nhật sản phẩm thất bại: " . $conn->error;
} else {
  echo '<script language="javascript">alert("Cập nhật thành công!");</script>';
  header('Location: danhsachsanpham.php');
}

// Đóng kết nối
$conn->close();
?>
