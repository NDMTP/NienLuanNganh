<?php
    require 'connect.php'; // Kết nối cơ sở dữ liệu

    if (isset($_GET['makm'])) {
        $makm = $_GET['makm'];

        // Câu lệnh SQL để xóa khuyến mãi theo mã khuyến mãi
        $sql = "DELETE FROM khuyenmai WHERE MAKM = '$makm'";

        if ($conn->query($sql) === TRUE) {
            // Chuyển hướng lại trang danh sách khuyến mãi
            header("Location: khuyenmai_ds.php");
            exit();
        } else {
            echo "Lỗi khi xóa khuyến mãi: " . $conn->error;
        }

    } else {
        echo "Mã khuyến mãi không hợp lệ!";
    }

    $conn->close();
?>
