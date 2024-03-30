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
    echo "<script>
            alert('Đánh giá thành công');
            window.location.href='bill.php'; // Thay 'bill.php' bằng URL thực tế của trang hóa đơn của bạn
          </script>";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}


// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>