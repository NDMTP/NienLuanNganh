<?php
include('connect.php');

// Thêm nhà sản xuất mới
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

// Xóa nhà sản xuất
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

// Cập nhật thông tin nhà sản xuất
if (isset($_POST["update"])) {
  $mansx = $_POST['mansx'];
  $tennsx = $_POST['tennsx'];

  if (!empty($mansx) && !empty($tennsx)) {
      $sql = "UPDATE nhasanxuat SET TENNSX = '$tennsx' WHERE MANSX = '$mansx'";
      $result = $conn->query($sql);
      if ($result) {
          echo '<script>alert("Cập nhật thành công!"); window.location.href = "nhasanxuat.php";</script>';
      } else {
          echo '<script>alert("Lỗi cập nhật!");</script>';
      }
  } else {
      echo '<script>alert("Dữ liệu không hợp lệ!");</script>';
  }
}

?>
