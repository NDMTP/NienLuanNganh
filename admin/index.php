<!DOCTYPE html>
<html lang="en">
<?php
  include("connect.php");
  include('head.php');
?>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <?php 
        if(isset($_SESSION['PHANQUYEN'])){
            include('navbar.php');
            if($_SESSION['PHANQUYEN']=='Admin'){
                include('sidebar.php');
                include('body.php');
            }
            if($_SESSION['PHANQUYEN']=='nhanvien'){
                include('sidebar_nv.php');
                include('body_nv.php');
                
            }
            require 'settingSide.php';
        }
        else{
            include('dangnhap.php');
        }
        
        require 'footer.php';
      ?>