<?php
include('connect.php');

// Add a new manufacturer
if (isset($_POST["add"])) {
  $mansx = $_POST['mansx'];
  $tennsx = $_POST['tennsx'];

  $sql = "INSERT INTO nhasanxuat (MANSX, TENNSX) VALUES ('$mansx', '$tennsx')";
  $result = $conn->query($sql);
  if ($result) {
    echo '<script language="javascript">
        alert("Đã thêm nhà sản xuất!");
        window.location.href = "nhasanxuat.php";
        </script>';
  } else {
    echo '<script language="javascript">
        alert("Không thể thêm nhà sản xuất!");
        window.location.href = "nhasanxuat_them.php";
        </script>';
  }
}

// Delete a manufacturer
if (isset($_GET["delete"])) {
  $mansx = $_GET['mansx'];
  $sql = "DELETE FROM nhasanxuat WHERE MANSX = '$mansx'";
  $result = $conn->query($sql);
  if ($result) {
    echo '<script language="javascript">
        alert("Đã xóa nhà sản xuất!");
        window.location.href = "nhasanxuat.php";
        </script>';
  } else {
    echo 'Lỗi xóa nhà sản xuất';
  }
}

// Update manufacturer details
if (isset($_POST["update"])) {
  $mansx = $_POST['mansx'];
  $tennsx = $_POST['tennsx'];

  $sql = "UPDATE nhasanxuat SET TENNSX = '$tennsx' WHERE MANSX = '$mansx'";
  $result = $conn->query($sql);
  if ($result) {
    header('Location: nhasanxuat.php');
    exit();
  } else {
    echo 'Lỗi cập nhật';
  }
}
?>