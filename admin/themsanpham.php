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

$maloai = $_POST["loai"];
$tensp = $_POST["tensp"];
$dongiabansp = $_POST["dongiabansp"];
$mansx = $_POST["nsx"];
$motasp = $_POST["mota"];

// Generate the next product ID
$sql = "SELECT max(CAST(SUBSTRING(MASP, 3) AS SIGNED)) AS maxid FROM sanpham WHERE MALOAI = '$maloai'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$maxid = $row['maxid'] + 1;

$sql = "SELECT max(MASP) as maxid FROM sanpham WHERE MALOAI = '{$maloai}'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row['maxid'];
preg_match("/([A-Za-z]+)([0-9]+)/", $id, $matches);
$kytu = $matches[1];
$nextid = $kytu . $maxid;

// Handle file upload
$pdimg = "default.png";
$tardir = "../images/" . $kytu . "/";

// Create the directory if it does not exist
if (!is_dir($tardir)) {
    mkdir($tardir, 0777, true);
}

// Check if the file is uploaded
if (isset($_FILES["pdimg"]) && $_FILES["pdimg"]["error"] == 0) {
    $file = $_FILES["pdimg"];
    $filename = basename($file['name']);
    $target_file = $tardir . $filename;

    // Check if file is an image
    $check = getimagesize($file["tmp_name"]);
    if ($check !== false) {
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            $pdimg = $filename;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not an image.";
    }
} else {
    echo "No file was uploaded or there was an upload error.";
}

$sql = "INSERT INTO sanpham (MASP, MANSX, MALOAI, TENSP, DONGIABANSP, MOTA, LINKANH)
VALUES ('$nextid', '$mansx', '$maloai', '$tensp', '$dongiabansp', '$motasp', '$pdimg')";

if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">alert("Thêm thành công!");</script>';
    header('Location: danhsachsanpham.php');
    exit();
} else {
    echo "Thêm sản phẩm thất bại: " . $conn->error;
}

$conn->close();
?>
