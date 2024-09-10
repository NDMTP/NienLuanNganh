<!DOCTYPE html>
<html lang="en">


<!-- chat.html  21 Nov 2019 03:50:11 GMT -->
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
                                        <h4>Danh sách sản phẩm</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="tableExport"
                                                style="width:100%;">
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

                                                    // Xác định số sản phẩm mỗi trang và trang hiện tại
                                                    $productsPerPage = 20;
                                                    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                                                    $start = ($page - 1) * $productsPerPage;

                                                    // Truy vấn SQL để lấy tổng số sản phẩm
                                                    $sqlTotal = "SELECT COUNT(*) AS total FROM sanpham";
                                                    $resultTotal = $conn->query($sqlTotal);
                                                    $rowTotal = $resultTotal->fetch_assoc();
                                                    $totalProducts = $rowTotal['total'];

                                                    // Truy vấn SQL để lấy danh sách sản phẩm cho trang hiện tại
                                                    $sql = "SELECT sanpham.masp, loaisanpham.tenloai, sanpham.tensp, sanpham.mota, sanpham.linkanh
        FROM sanpham 
        INNER JOIN loaisanpham ON sanpham.maloai = loaisanpham.maloai
        LIMIT $start, $productsPerPage";
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                        echo '<table class="table table-striped table-hover" id="tableExport" style="width:100%;">';
                                                        echo '<thead>';
                                                        echo '<tr>';
                                                        echo '<th>Hình ảnh</th>';
                                                        echo '<th>Mã sản phẩm</th>';
                                                        echo '<th>Tên loại</th>';
                                                        echo '<th>Tên sản phẩm</th>';
                                                        echo '<th>Mô tả</th>';
                                                        echo '<th></th>';
                                                        echo '<th></th>';
                                                        echo '</tr>';
                                                        echo '</thead>';
                                                        echo '<tbody>';

                                                        while ($row = $result->fetch_assoc()) {
                                                            preg_match('/^[A-Za-z]+/', $row['masp'], $matches);
                                                            $spImgDir = $matches[0];
                                                            echo "<tr>
            <td><img style='width: 4rem;' src='../images/" . $spImgDir . "/" . $row["linkanh"] . "'/></td>
            <td>" . $row["masp"] . "</td>
            <td>" . $row["tenloai"] . "</td>
            <td>" . $row["tensp"] . "</td>
            <td>" . $row["mota"] . "</td>
            <td>";
                                                            ?>
                                                            <form action="sanpham_sua.php" method="get">
                                                                <input type="hidden" name="spid"
                                                                    value="<?php echo $row["masp"] ?>">
                                                                <button class="btn btn-link"><i
                                                                        class="fas fa-edit"></i></button>
                                                            </form>
                                                            <?php
                                                            echo "</td>
            <td>";
                                                            ?>
                                                            <form action="sanpham_xoa.php" method="get">
                                                                <input type="hidden" name="spid"
                                                                    value="<?php echo $row["masp"] ?>">
                                                                <button class="btn btn-link"><i
                                                                        class="fas fa-trash-alt"></i></button>
                                                            </form>
                                                            <?php
                                                            echo "</td>
        </tr>";
                                                        }

                                                        echo '</tbody>';
                                                        echo '</table>';
                                                    } else {
                                                        echo "Không có dữ liệu sản phẩm.";
                                                    }

                                                    // Hiển thị tổng số sản phẩm
                                                    echo "<p>Tổng số sản phẩm: $totalProducts</p>";

                                                    // Tính số trang
                                                    $totalPages = ceil($totalProducts / $productsPerPage);

                                                    // Hiển thị các liên kết phân trang
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



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="settingSidebar">
                    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                    </a>
                    <div class="settingSidebar-body ps-container ps-theme-default">
                        <div class=" fade show active">
                            <div class="setting-panel-header">Setting Panel
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Select Layout</h6>
                                <div class="selectgroup layout-color w-50">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="1"
                                            class="selectgroup-input-radio select-layout" checked>
                                        <span class="selectgroup-button">Light</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="2"
                                            class="selectgroup-input-radio select-layout">
                                        <span class="selectgroup-button">Dark</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                                <div class="selectgroup selectgroup-pills sidebar-color">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="1"
                                            class="selectgroup-input select-sidebar">
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="2"
                                            class="selectgroup-input select-sidebar" checked>
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Color Theme</h6>
                                <div class="theme-setting-options">
                                    <ul class="choose-theme list-unstyled mb-0">
                                        <li title="white" class="active">
                                            <div class="white"></div>
                                        </li>
                                        <li title="cyan">
                                            <div class="cyan"></div>
                                        </li>
                                        <li title="black">
                                            <div class="black"></div>
                                        </li>
                                        <li title="purple">
                                            <div class="purple"></div>
                                        </li>
                                        <li title="orange">
                                            <div class="orange"></div>
                                        </li>
                                        <li title="green">
                                            <div class="green"></div>
                                        </li>
                                        <li title="red">
                                            <div class="red"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                            id="mini_sidebar_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Mini Sidebar</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                            id="sticky_header_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Sticky Header</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                    <i class="fas fa-undo"></i> Restore Default
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            require 'settingSide.php';
            require 'footer.php';
            ?>