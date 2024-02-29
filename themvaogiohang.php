<?php

session_start();
// Hàm thêm sản phẩm vào giỏ hàng
function addToCart($product) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] === $product['id']) {
            $item['quant'] += $product['quant'];
            $_SESSION['slsp']+=$product['quant'];
            $found = true;
            break;  
        }
    }

    // Nếu chưa tồn tại, thêm sản phẩm mới vào giỏ hàng
    if (!$found) {
        $_SESSION['cart'][] = array(
            'id' => $product['id'],
            'quant' => $product['quant']
        );
        $_SESSION['slsp']+=$product['quant'];
    }
}

$pdid = $_GET['pdid'];
$qty = $_GET['qty12554'];

// Thêm sản phẩm vào giỏ hàng

$productToAdd = array(
    'id' => $pdid,
    'quant' => $qty
);

echo $pdid;

if (isset($_SESSION["lname"])){
    addToCart($productToAdd);
    if (isset($_GET["sb_giohang"])){
        header('Location: product-detail.php?id='.$pdid.'&added=1'); 
    } 
    if (isset($_GET["sb_cate"])){
        header('Location: category-grid.php?added=1');
    }
    else {
        header('Location: index.php?added=1');
    }

} else {
    header('Location: account.php?login=1');
}



?>