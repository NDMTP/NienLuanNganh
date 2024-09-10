<?php
include('connect.php');

// Thêm loại sản phẩm ====================================
if (isset($_GET["add"])) {
    $sql = "INSERT INTO loaisanpham (MALOAI, TENLOAI, LOAITT) VALUES ('" . $_GET['ma'] . "','" . $_GET['ten'] . "', 1)";
    $result = $conn->query($sql);
    if ($result) {
        echo '<script language="javascript">
        alert("Đã thêm loại sản phẩm!");
        history.back();
         </script>';
    } else {
        echo '<script language="javascript">
        alert("Không thể thêm loại sản phẩm!");
        history.back();
         </script>';
    }
}

// Sửa loại sản phẩm ====================================
if (isset($_GET["update"])) {
    $maloai = $_GET['maloai'];
    $tenloai = $_GET['tenloai'];

    $sql_update = "UPDATE loaisanpham SET TENLOAI = '$tenloai' WHERE MALOAI = '$maloai'";
    $result_update = $conn->query($sql_update);

    if ($result_update) {
        echo '<script language="javascript">
        alert("Đã cập nhật loại sản phẩm thành công!");
        window.location.href = "loaisp.php";
        </script>';
    } else {
        echo '<script language="javascript">
        alert("Cập nhật không thành công!");
        history.back();
         </script>';
    }
}

// Xóa loại sản phẩm ====================================
if (isset($_GET["tt"])) {
    $loai1 = $_GET['maloai'];
    $sql2 = "UPDATE loaisanpham SET LOAITT=0 WHERE MALOAI= '$loai1'";
    $result2 = $conn->query($sql2);
    if ($result2) {
        echo '<script language="javascript">
        alert("Đã xóa loại sản phẩm!");
         </script>';
        header('Location: loaisp.php');
    } else {
        echo 'Lỗi';
    }
}
?>
