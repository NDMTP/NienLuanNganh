<?php
session_start();
$key = $_POST['key'];
$input_name = 'quantity_' . $key; // Tạo tên input số lượng cụ thể cho sản phẩm
$quantity = $_POST[$input_name]; // Lấy số lượng của sản phẩm từ input tương ứng
$_SESSION['slsp'] -= $quantity; // Giảm số lượng sản phẩm
unset($_SESSION['cart'][$key]); // Xóa sản phẩm khỏi giỏ hàng
header('Location: giohang.php');
?>
