<?php
    require 'connect.php';
    $_SESSION['cart'] = array();
    $_SESSION['slsp'] = 0;
    header('Location: giohang.php');
?>