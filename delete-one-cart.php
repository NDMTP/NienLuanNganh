<?php
session_start();

// Kiểm tra xem key có được gửi qua POST và tồn tại trong giỏ hàng không
if (isset($_POST['key']) && array_key_exists($_POST['key'], $_SESSION['cart'])) {
    $key = $_POST['key'];
    $quantity = $_SESSION['cart'][$key]['quant'];  // Lấy số lượng sản phẩm từ giỏ hàng
    $_SESSION['slsp'] -= $quantity;  // Giảm số lượng sản phẩm trong tổng số sản phẩm
    unset($_SESSION['cart'][$key]);  // Xóa sản phẩm khỏi giỏ hàng
} else {
    // Nếu không tìm thấy key hoặc sản phẩm không tồn tại, gửi thông báo lỗi
    $_SESSION['error'] = "Không tìm thấy sản phẩm cần xóa hoặc key không hợp lệ: {$_POST['key']}";
}

header('Location: giohang.php');  // Chuyển hướng người dùng trở lại trang giỏ hàng
?>
