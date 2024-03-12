<?php

require 'connect.php';

$email = $_POST["email"];
$sql = "SELECT * FROM nguoidung WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows === 0) {
    echo '<script language="javascript">
    alert("Email không tồn tại!");
    history.back();
     </script>';
    echo $email;
    exit();
}

// Cập nhật thông tin người dùng
$hoTen = $_POST["ho_ten"];
$diaChi = $_POST["dia_chi"];
$soDienThoai = $_POST["so_dien_thoai"];
$phanQuyen = $_POST["phanquyen"];

$sql = "UPDATE nguoidung SET TEN = '$hoTen', DIACHI = '$diaChi', SDT = '$soDienThoai', PHANQUYEN = '$phanQuyen' WHERE EMAIL = '$email'";

if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">
    alert("Cập nhật thành công!");
    </script>';
    header('Location: thongtinnhanvien.php');
} else {
    echo "Cập nhật người dùng thất bại: " . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
