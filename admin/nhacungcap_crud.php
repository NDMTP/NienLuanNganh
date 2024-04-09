<?php
include('connect.php');
// insert===================================
if(isset($_GET["add"])){
    $sql = "INSERT INTO nhacungcap  
VALUES ('".$_GET['ma']."','".$_GET['ten']."',1)";
$result = $conn->query($sql);
if($result){
    echo '<script language="javascript">
    alert("Đã thêm nhà cung cấp!");
    history.back();
     </script>';
}
else{
    echo '<script language="javascript">
    alert("Không thể thêm nhà cung cấp!");
    history.back();
     </script>';
}
}
// delete ===================================
if(isset($_GET["tt"])){
    $loai1= $_GET['mancc'];
    $sql2 ="UPDATE nhacungcap ";
$result2 = $conn->query($sql2);
if($result2){
    echo '<script language="javascript">
    alert("Đã xóa nhà cung cấp!");
     </script>';
     header('Location: nhacungcap.php');
}
else{
    echo 'Lỗi';
}
}

?>