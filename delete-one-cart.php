<?php
session_start();


$key = $_POST['key'];
$quantity = $_SESSION['cart'][$key]['quant'];  // Lấy số lượng sản phẩm từ giỏ hàng
$_SESSION['slsp'] -= $quantity;  // Giảm số lượng sản phẩm trong tổng số sản phẩm
unset($_SESSION['cart'][$key]);  // Xóa sản phẩm khỏi giỏ hàng

// Cập nhật lại giỏ hàng sau khi xóa
if (empty($_SESSION['cart'])) {
    unset($_SESSION['cart']);
    $_SESSION['slsp'] = 0;
}
$response = [
    'status' => 'success',
    'cart' => $_SESSION['cart'],
    'totalQuantity' => $_SESSION['slsp']
];

echo json_encode($response);
?>