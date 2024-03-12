<?php
include('connect.php');
if(isset($_GET['dangduyet'])){
    $trangthai = " UPDATE HOADON SET TRANGTHAIHOADON = '".$_GET['tt']."' WHERE MAHOADON='".$_GET['mahd']."'"; 
    $result_tt = $conn->query($trangthai);
    echo '<script language="javascript">
    alert("Đã cập nhật đơn hàng!");
    history.back();
    </script>';
}
if(isset($_GET['danggiao'])){
    $trangthai = " UPDATE HOADON SET TRANGTHAIHOADON = '".$_GET['tt']."' WHERE MAHOADON='".$_GET['mahd']."'"; 
    $result_tt = $conn->query($trangthai);
    echo '<script language="javascript">
    alert("Đã cập nhật đơn hàng!");
    history.back();
    </script>';
}
?>