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
                                                        <th>Sửa</th>
                                                        <th>Xóa</th>
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

                                                    // Phân trang
                                                    $limit = 10; // Số câu hỏi hiển thị trên mỗi trang
                                                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                                                    $offset = ($page - 1) * $limit;

                                                    // Truy vấn SQL để lấy danh sách câu hỏi với phân trang
                                                    $sql = "SELECT id, cauhoi, traloi FROM chatbot LIMIT $limit OFFSET $offset";
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo "<tr>
                                                                <td>" . $row["id"] . "</td>
                                                                <td>" . $row["cauhoi"] . "</td>
                                                                <td>" . $row["traloi"] . "</td>
                                                                <td>
                                                                    <form action='cauhoi_sua.php' method='get'>
                                                                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                                                                        <button class='btn btn-link'><i class='fas fa-edit'></i></button>
                                                                    </form>
                                                                </td>
                                                                <td>
                                                                    <form action='cauhoi_xoa.php' method='get'>
                                                                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                                                                        <button class='btn btn-link'><i class='fas fa-trash-alt'></i></button>
                                                                    </form>
                                                                </td>
                                                            </tr>";
                                                        }
                                                    } else {
                                                        echo "<tr><td colspan='5'>Không có dữ liệu câu hỏi.</td></tr>";
                                                    }

                                                    // Lấy tổng số câu hỏi để tính số trang
                                                    $sqlCount = "SELECT COUNT(*) as count FROM chatbot";
                                                    $countResult = $conn->query($sqlCount);
                                                    $totalQuestions = $countResult->fetch_assoc()['count'];
                                                    $totalPages = ceil($totalQuestions / $limit);

                                                    // Hiển thị phân trang
                                                    echo '</tbody></table>';
                                                    echo '<nav aria-label="Page navigation">';
                                                    echo '<ul class="pagination">';

                                                    // Liên kết đến trang trước
                                                    if ($page > 1) {
                                                        echo '<li class="page-item"><a class="page-link" href="?page=' . ($page - 1) . '">«</a></li>';
                                                    }

                                                    // Liên kết đến các trang
                                                    for ($i = 1; $i <= $totalPages; $i++) {
                                                        $active = ($i == $page) ? ' active' : '';
                                                        echo '<li class="page-item' . $active . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                                                    }

                                                    // Liên kết đến trang sau
                                                    if ($page < $totalPages) {
                                                        echo '<li class="page-item"><a class="page-link" href="?page=' . ($page + 1) . '">»</a></li>';
                                                    }

                                                    echo '</ul>';
                                                    echo '</nav>';

                                                    $conn->close();
                                                    ?>
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
        </div>
    </div>
</body>

</html>
