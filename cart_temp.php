<?php

include('connect.php');
function addToCart($product) {
    if (!isset($_SESSION['cart_temp'])) {
        $_SESSION['cart_temp'] = array();
    }
    $found = false;
    foreach ($_SESSION['cart_temp'] as &$item) {
        if ($item['id'] === $product['id']) {
            $found = true;
            break;  
        }
    }
    if (!$found) {
        $_SESSION['cart_temp'][] = array(
            'id' => $product['id'],
            'quant' => $product['quant'],
           
        );
    }
}

$pdid = $_POST['pdid'];
$qty = $_POST['qty12554'];
$productToAdd = array(
    'id' => $pdid,
    'quant' => $qty,

);

if (isset($_SESSION["lname"])){
    addToCart($productToAdd);
    

} else {
    header('Location: account.php?login=1');
}
$tong = 0;
foreach ($_SESSION['cart_temp'] as $item) {
    $ma = $item['id'];

    $sql = "select * from sanpham where MASP = '{$item['id']}'";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $tong = $tong + ($item['quant'] * $row['DONGIABANSP']);
    } 
}
$_SESSION['temptotal'] = $tong;
//  echo $tong;
 echo $item['id'];
?>