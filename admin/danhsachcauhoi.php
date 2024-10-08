<!DOCTYPE html>
<html lang="en">

<?php
include("connect.php");
include('head.php');
?>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <?php
            include('navbar.php');
            if ($_SESSION['PHANQUYEN'] == 'Admin') {
                include('sidebar.php');
            }
            if ($_SESSION['PHANQUYEN'] == 'nhanvien') {
                include('sidebar_nv.php');
            }
            ?>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Danh sách câu hỏi</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Câu hỏi</th>
                                                        <th>Trả lời</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "qlsthi";

                                                    // Tạo kết nối đến cơ sở dữ liệu
                                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    // Truy vấn SQL để lấy danh sách câu hỏi
                                                    $sql = "SELECT id, cauhoi, traloi FROM chatbot";
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo "<tr>
                                                                <td>" . $row["id"] . "</td>
                                                                <td>" . $row["cauhoi"] . "</td>
                                                                <td>" . $row["traloi"] . "</td>
                                                            </tr>";
                                                        }
                                                    } else {
                                                        echo "<tr><td colspan='3'>Không có dữ liệu câu hỏi.</td></tr>";
                                                    }

                                                    $conn->close();
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php
            require 'settingSide.php';
            require 'footer.php';
            ?>
</body>

</html>
