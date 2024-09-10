<?php
include('connect.php');

// Add a new supplier
// Add a new supplier
if (isset($_POST["add"])) {
    $ma = $_POST['ma'];
    $ten = $_POST['ten'];
    $diachi = $_POST['diachi'];

    $sql = "INSERT INTO nhacungcap (MANCC, TENNCC, DIACHI) VALUES ('$ma', '$ten', '$diachi')";
    $result = $conn->query($sql);
    if ($result) {
        echo '<script language="javascript">
        alert("Đã thêm nhà cung cấp!");
        window.location.href = "nhacungcap.php";
        </script>';
    } else {
        echo '<script language="javascript">
        alert("Không thể thêm nhà cung cấp!");
        window.location.href = "nhacungcap_them.php";
        </script>';
    }
}


// Delete a supplier
if (isset($_GET["tt"])) {
    $loai1 = $_GET['mancc'];
    $sql2 = "UPDATE nhacungcap SET LOAITT = 0 WHERE MANCC = '$loai1'";
    $result2 = $conn->query($sql2);
    if ($result2) {
        echo '<script language="javascript">
        alert("Đã xóa nhà cung cấp!");
        </script>';
        header('Location: nhacungcap.php');
    } else {
        echo 'Lỗi';
    }
}

// Update supplier details
if (isset($_POST["update"])) {
    $mancc = $_POST['mancc'];
    $ten = $_POST['ten'];
    $diachi = $_POST['diachi'];
    
    $sql4 = "UPDATE nhacungcap SET TENNCC = '$ten', DIACHI = '$diachi' WHERE MANCC = '$mancc'";
    $result4 = $conn->query($sql4);
    if ($result4) {
        header('Location: nhacungcap.php');
        exit();
    } else {
        echo 'Lỗi cập nhật';
    }
}

// Fetch supplier details for editing
if (isset($_GET["edit"])) {
    $mancc = $_GET['mancc'];
    $sql3 = "SELECT * FROM nhacungcap WHERE MANCC = '$mancc'";
    $result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        $row = $result3->fetch_assoc();
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("tenncc").value = "'.$row['TENNCC'].'";
                document.getElementById("diachi").value = "'.$row['DIACHI'].'";
            });
            </script>';
    }
}
?>
