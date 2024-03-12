<?php
include('connect.php');
// insert===================================
if(isset($_GET["add"])){
    $sql = "INSERT INTO loaisanpham  
VALUES ('".$_GET['ma']."','".$_GET['ten']."',1)";
$result = $conn->query($sql);
if($result){
    echo '<script language="javascript">
    alert("Đã thêm loại sản phẩm!");
    history.back();
     </script>';
}
else{
    echo '<script language="javascript">
    alert("Không thể thêm loại sản phẩm!");
    history.back();
     </script>';
}
}
// delete ===================================
if(isset($_GET["tt"])){
    $loai1= $_GET['maloai'];
    $sql2 ="UPDATE loaisanpham SET LOAITT=0 WHERE MALOAI= '$loai1'";
$result2 = $conn->query($sql2);
if($result2){
    echo '<script language="javascript">
    alert("Đã xóa loại sản phẩm!");
     </script>';
     header('Location: loaisp.php');
}
else{
    echo 'Lỗi';
}
}

?>