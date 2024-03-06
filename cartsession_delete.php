<?php
include('connect.php');
if(isset($_POST['check'])){
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
        $ttien = $tong - $_POST['dg']*$_POST['qty12554'];
        echo $ttien;
        if(isset($_SESSION['cart_temp']) && is_array($_SESSION['cart_temp']) && !empty($_SESSION['cart_temp'])) {
            $key = $_POST['ma'];
        
            $_SESSION['cart_temp'] = array_filter($_SESSION['cart_temp'], function($value) use ($key) {
                return !($value['id'] === $key );
            });
        } else {
            echo 'loi';
        }
}
?>