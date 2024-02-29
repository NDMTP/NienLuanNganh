<?php
session_start();
$key = $_POST['key'];
$_SESSION['slsp'] -= $_SESSION['cart'][$key]['quant'];
unset($_SESSION['cart'][$key]);
header('Location: giohang.php');
?>