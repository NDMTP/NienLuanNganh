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
            $_SESSION['slsp'] += $product['quant'];
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
        $_SESSION['slsp'] += $product['quant'];
    }
}

$pdid = $_GET['pdid'];
$qty = $_GET['qty12554'];

// Kiểm tra và giảm số lượng kho
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsthi";

// Tạo kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Kiểm tra số lượng kho hiện tại
$sql = "SELECT SOLUONGKHO FROM sanpham WHERE MASP = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $pdid);
$stmt->execute();
$stmt->bind_result($stockQuantity);
$stmt->fetch();
$stmt->close();

// Kiểm tra xem có đủ số lượng không
if ($stockQuantity < $qty) {
    // Nếu số lượng kho không đủ
    header('Location: product-detail.php?id=' . $pdid . '&error=not-enough-stock');
    exit();
}

// Thực hiện giảm số lượng kho
$sql = "UPDATE sanpham SET SOLUONGKHO = SOLUONGKHO - ? WHERE MASP = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('is', $qty, $pdid);

if ($stmt->execute()) {
    // Thêm sản phẩm vào giỏ hàng nếu cập nhật kho thành công
    if (isset($_SESSION["lname"])) {
        addToCart(array(
            'id' => $pdid,
            'quant' => $qty
        ));

        if (isset($_GET["sb_giohang"])) {
            header('Location: product-detail.php?id=' . $pdid . '&added=1'); 
        } 
        if (isset($_GET["sb_cate"])) {
            header('Location: giohang.php?added=1');
        } else {
            header('Location: index.php?added=1');
        }
    } else {
        header('Location: account.php?login=1');
    }
} else {
    echo "Lỗi khi cập nhật số lượng kho: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
