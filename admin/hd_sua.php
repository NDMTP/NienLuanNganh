<!DOCTYPE html>
<html lang="en">


<!-- email-inbox.html  21 Nov 2019 03:50:57 GMT -->
<?php
  include("connect.php");
  include('head.php');
?>

<body>
    <!-- <div class="loader"></div> -->
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <?php 
        include('navbar.php');
        if($_SESSION['PHANQUYEN']=='Admin'){
            include('sidebar.php');
        }
        if($_SESSION['PHANQUYEN']=='nhanvien'){
            include('sidebar_nv.php');
            
        }
      ?>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div class="row">

                            <div class="col-10 col-md-10 col-lg-10">
                                <div class="card">
                                    <?php
                                        $hd="SELECT * FROM hoadon,nguoidung WHERE hoadon.EMAIL = nguoidung.EMAIL
                                        AND MAHOADON ='".$_GET['mahd']."'";
                                        $result_hd = $conn->query($hd);
                                         $row_hd = $result_hd->fetch_assoc()
                                    ?>
                                    <form method="GET" action="hd_capnhat.php">
                                        <div class="card-header">
                                            <h4>Thông tin hóa đơn</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6 price">
                                                    <label>Mã hóa đơn</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row_hd['MAHOADON'] ?>" name="mahd">
                                                </div>
                                                <div class="col-6 price">
                                                    <label>Tổng tiền</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row_hd['TONGTIEN'] ?>" name="tensp">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-6 price">
                                                    <label>Họ tên</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row_hd['TEN'] ?>" name="tensp">
                                                </div>
                                                <div class="col-6 price">
                                                    <label>Số điện thoại</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row_hd['SDT'] ?>" name="tensp">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 price">
                                                    <label>địa chỉ</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row_hd['DIACHI'] ?>" name="tensp">
                                                </div>

                                            </div>
                                            <div class="form-group mt-2">
                                                <label>Trạng thái đơn hàng</label>
                                                <select name="tt" id="" class="form-control">
                                                    <option value="0">Đang duyệt</option>
                                                    <option value="1">Đang giao</option>
                                                    <option value="2">Đã giao hàng</option>
                                                    <option value="-1">Đã hủy</option>
                                                </select>
                                            </div>
                                            <div class="card-footer text-right">
                                                
                                                <button class="btn btn-primary" name="dangduyet" type="submit" class="mt-2">Cập
                                                    nhật</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="col-10 col-md-10 col-lg-10">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                        <tbody>
                                            <?php
                           

                            $sql = "SELECT * FROM chitiethoadon,sanpham WHERE chitiethoadon.MASP = sanpham.MASP
                                    AND chitiethoadon.MAHOADON='".$_GET['mahd']."'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                echo '<table class="table table-striped table-hover" id="tableExport" style="width:100%;">';
                                echo '<thead>';
                                echo '<tr>';
                                echo '<th>Sản phẩm</th>';
                                echo '<th>Giá</th>';
                                echo '<th>Số lượng</th>';
                                echo '<th>Tổng</th>';
                                echo '</tr>';
                                echo '</thead>';
                                echo '<tbody>';
                                
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                            <td>" . $row["TENSP"] . "</td>
                                            <td>" . number_format($row["DONGIABANSP"]). "</td>
                                            <td>" . $row["SOLUONGSP"] . "</td>
                                            <td>" . number_format($row["TONGTIEN"]* $row["SOLUONGSP"])  . "</td>"
                                           
                                          ?>


                                            <?php
                                          "</tr>";
                                }

                                echo '</tbody>';
                                echo '</table>';
                                
                                $totalEmployees = $result->num_rows; // Đếm tổng số nhân viên
                                echo "<h5>Tổng số món: $totalEmployees</h5>"; // Hiển thị tổng số nhân viên
                            } else {
                                echo "Không có đơn hàng.";
                            }

                            $conn->close();
                            ?>
                                        </tbody>
                                    </table>
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
            <footer class="main-footer">
                <div class="footer-left">
                    <a href="templateshub.net">Templateshub</a></a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
</body>


<!-- email-inbox.html  21 Nov 2019 03:50:58 GMT -->

</html>