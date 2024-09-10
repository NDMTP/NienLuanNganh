<?php
include('connect.php');

// Add a new supplier
if (isset($_POST["add"])) {
    $ma = $_POST['ma'];
    $ten = $_POST['ten'];
    $diachi = $_POST['diachi'];

    $stmt = $conn->prepare("INSERT INTO nhacungcap (MANCC, TENNCC, DIACHI) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $ma, $ten, $diachi);
    $result = $stmt->execute();

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
    $stmt->close();
}

// Delete a supplier
if (isset($_POST["delete"])) {
    $mancc = $_POST['mancc'];

    $stmt = $conn->prepare("DELETE FROM nhacungcap WHERE MANCC = ?");
    $stmt->bind_param("s", $mancc);
    $result = $stmt->execute();

    if ($result) {
        echo '<script language="javascript">
        alert("Đã xóa nhà cung cấp!");
        window.location.href = "nhacungcap.php";
        </script>';
    } else {
        echo '<script language="javascript">
        alert("Không thể xóa nhà cung cấp!");
        window.location.href = "nhacungcap.php";
        </script>';
    }
    $stmt->close();
}

// Update supplier details
if (isset($_POST["update"])) {
    $mancc = $_POST['mancc'];
    $ten = $_POST['ten'];
    $diachi = $_POST['diachi'];

    $stmt = $conn->prepare("UPDATE nhacungcap SET TENNCC = ?, DIACHI = ? WHERE MANCC = ?");
    $stmt->bind_param("sss", $ten, $diachi, $mancc);
    $result = $stmt->execute();

    if ($result) {
        header('Location: nhacungcap.php');
        exit();
    } else {
        echo 'Lỗi cập nhật';
    }
    $stmt->close();
}

// Fetch supplier details for editing
if (isset($_GET["edit"])) {
    $mancc = $_GET['mancc'];

    $stmt = $conn->prepare("SELECT * FROM nhacungcap WHERE MANCC = ?");
    $stmt->bind_param("s", $mancc);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("tenncc").value = "'.$row['TENNCC'].'";
                document.getElementById("diachi").value = "'.$row['DIACHI'].'";
            });
            </script>';
    }
    $stmt->close();
}

$conn->close();
?>
