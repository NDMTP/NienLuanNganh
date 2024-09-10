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

// Get the product ID (MASP) from the query string or form
$masp = $_GET["masp"]; // Ensure this matches your input method

// Get other fields from the form
$maloai = $_POST["loai"];
$tensp = $_POST["tensp"];
$dongiabansp = $_POST["dongiabansp"];
$mansx = $_POST["nsx"];
$motasp = $_POST["mota"];
$soluongkho = $_POST['soluongkho'];

// Handle file upload
$pdimg = "default.png";
$tardir = "../images/";

// Check if the file is uploaded
if (isset($_FILES["pdimg"]) && !empty($_FILES["pdimg"]["name"])) {
    $file = $_FILES["pdimg"];
    $filename = basename($file['name']);
    $target_file = $tardir . $filename;

    // Move the uploaded file to the target directory
    if (move_uploaded_file($file['tmp_name'], $target_file)) {
        $pdimg = $filename;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Update product details in the database
$sql = "UPDATE sanpham 
        SET MALOAI = '$maloai', TENSP = '$tensp', DONGIABANSP = '$dongiabansp', MANSX = '$mansx', MOTA = '$motasp', SOLUONGKHO = '$soluongkho', LINKANH = '$pdimg' 
        WHERE MASP = '$masp'";

$result = $conn->query($sql);

if (!$result) {
    echo "Cập nhật sản phẩm thất bại: " . $conn->error;
} else {
    echo '<script language="javascript">alert("Cập nhật thành công!");</script>';
    header('Location: danhsachsanpham.php');
    exit();
}

// Close connection
$conn->close();
?>
