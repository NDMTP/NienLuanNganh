<?php
    require 'connect.php';

    $_SESSION['cart'] = array();
    $_SESSION['slsp'] = 0;
    function addToCart($product) {
        $_SESSION['cart'][] = array(
            'id' => $product['id'],
            'quant' => $product['quant'],

        );
        $_SESSION['slsp']+=$product['quant'];
    }

    $mahd = $_GET['hoadon'];

    $sql = "select * from chitiethoadon where MAHOADON = $mahd";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $result = $conn->query($sql);
        $result_all = $result -> fetch_all(MYSQLI_ASSOC);
        foreach ($result_all as $row) {
            $pdid = $row['MASP'];
            $qty = $row['SOLUONGSP'];
 

            $productToAdd = array(
                'id' => $pdid,
                'quant' => $qty,

            );

            addToCart($productToAdd);

        }
    }
    header('Location: giohang.php');
?>