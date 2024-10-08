<?php
include("connect.php");

// Kiểm tra xem id đã được gửi từ phương thức GET chưa
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Lấy giá trị id từ GET và chuyển đổi thành số nguyên

    // Tạo kết nối đến cơ sở dữ liệu
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Truy vấn SQL để xóa câu hỏi
    $sql = "DELETE FROM chatbot WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Câu hỏi đã được xóa thành công.'); window.location.href='danhsachcauhoi.php';</script>";
    } else {
        echo "<script>alert('Lỗi khi xóa câu hỏi: " . $conn->error . "'); window.location.href='danhsachcauhoi.php';</script>";
    }

    $conn->close();
} else {
    echo "<script>alert('Không tìm thấy ID câu hỏi.'); window.location.href='danhsachcauhoi.php';</script>";
}
?>
