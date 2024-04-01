<?php
// Kết nối đến cơ sở dữ liệu
require 'connect.php';

// Lấy dữ liệu từ form
$masp = $_POST['masp'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];
$email = $_SESSION['email'];

// Thực hiện insert vào bảng danhgiapham
$sql = "INSERT INTO danhgiasp (EMAIL, MASP ,NOIDUNGDG, TGDANHGIA) VALUES ('$email', '$masp', '$comment', NOW())";

if ($conn->query($sql) === TRUE) {
    // Nếu insert thành công, bạn có thể hiển thị thông báo đánh giá thành công
    echo "<script>alert('Đánh giá thành công');</script>";
    // Sau đó, bạn có thể chuyển hướng người dùng về trang sản phẩm hoặc trang chính
    header("Location: bill.php?id=$masp");
} else {
    // Nếu có lỗi xảy ra, bạn có thể hiển thị thông báo lỗi
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>