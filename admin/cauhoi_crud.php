<?php
include("connect.php"); // Kết nối với cơ sở dữ liệu

if (isset($_POST['add'])) {
    // Lấy dữ liệu từ form
    $id = $_POST['id']; // ID từ form, đã được tạo sẵn và không thể chỉnh sửa
    $cauhoi = $_POST['cauhoi'];
    $traloi = $_POST['traloi'];

    // Kiểm tra nếu các trường câu hỏi và trả lời không trống
    if (!empty($cauhoi) && !empty($traloi)) {
        // Câu lệnh SQL để thêm câu hỏi mới vào bảng chatbot
        $sql = "INSERT INTO chatbot (id, cauhoi, traloi) VALUES (?, ?, ?)";

        // Chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);

        // Kiểm tra nếu việc chuẩn bị câu lệnh thành công
        if ($stmt) {
            // Gán các giá trị cho câu lệnh SQL
            $stmt->bind_param("iss", $id, $cauhoi, $traloi);

            // Thực thi câu lệnh SQL
            if ($stmt->execute()) {
                // Nếu thêm thành công, chuyển hướng về trang thêm câu hỏi hoặc hiển thị thông báo
                echo "<script>alert('Thêm câu hỏi thành công!'); window.location.href='danhsachcauhoi.php';</script>";
            } else {
                // Nếu thêm thất bại, hiển thị lỗi
                echo "<script>alert('Lỗi khi thêm câu hỏi: " . $stmt->error . "'); window.history.back();</script>";
            }

            // Đóng câu lệnh chuẩn bị
            $stmt->close();
        } else {
            // Nếu việc chuẩn bị câu lệnh thất bại, hiển thị lỗi
            echo "<script>alert('Lỗi khi chuẩn bị câu lệnh: " . $conn->error . "'); window.history.back();</script>";
        }
    } else {
        // Nếu các trường dữ liệu không hợp lệ, hiển thị thông báo
        echo "<script>alert('Vui lòng điền đầy đủ thông tin!'); window.history.back();</script>";
    }
}

// Đóng kết nối cơ sở dữ liệu
$conn->close();
?>
