<!DOCTYPE html>
<html lang="en">

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
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Danh sách khuyến mãi</h4>
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
                        $dbname = "qlsthi"; // 

                        // Tạo kết nối đến cơ sở dữ liệu
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Truy vấn SQL để lấy danh sách sản phẩm với tên loại sản phẩm
                        $sql = "select * from khuyenmai";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo '<table class="table table-striped table-hover" id="tableExport" style="width:100%;">';
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th>Mã khuyến mãi</th>';
                            echo '<th>Phần trăm KM</th>';
                            echo '<th>Điều kiện khuyến mãi</th>';
                            echo '<th>Ngày bắt đầu</th>';
                            echo '<th>Ngày kết thúc</th>';
                            echo '<th>Trạng thái</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';

                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>" . $row["MAKM"] . "</td>
                                        <td>" . $row["PHANTRAMKM"] . "</td>
                                        <td>" . $row["DIEUKIENKM"] . "</td>
                                        <td>" . $row["NGAYBD"] . "</td>
                                        <td>" . $row["NGAYKT"] . "</td>
                                        <td>"; 
                                        $endDate = $row["NGAYKT"];
                                        $curDate = date("Y-m-d");
                                        if ($endDate >= $curDate) {
                                
                                            echo '<span class="badge badge-success">Hoạt động</span>';
                                        } else {
                                            echo '<span class="badge badge-danger">Hết hạn</span>';
                                        }
                                echo "</td>
                                    </tr>";
                            }

                            echo '</tbody>';
                            echo '</table>';

                        } else {
                            echo "Không có dữ liệu sản phẩm.";
                        }

                        $conn->close();
                        ?>



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Thêm khuyến mãi</h4>
                                </div>
                                <div class="card-body">
                                    <form action="khuyenmai_them.php" method="get">
                                        <div class="form-group row align-items-center">
                                            <label class="col-3" for="">Mã khuyến mãi</label>    
                                            <input type="text" name="makm" id="" class="form-control col-9">
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-3" for="">Phần trăm</label>    
                                            <input type="text" name="tile" id="" class="form-control col-9">
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-3" for="">Điều kiện</label>    
                                            <input type="text" name="dk" id="" class="form-control col-9">
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-3" for="">Từ</label>    
                                            <input type="date" name="tu" id="" class="form-control col-9">
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-3" for="">Đến</label>    
                                            <input type="date" name="den" id="" class="form-control col-9">
                                        </div>
                                        <button class="btn btn-primary float-right" type="submit">Thêm</button>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Thay đổi khuyến mãi</h4>
                                </div>
                                <div class="card-body">
                                    <form action="khuyenmai_sua.php" method="get">
                                        <div class="form-group row align-items-center">
                                            <label class="col-3" for="">Mã khuyến mãi</label>    
                                            <input type="text" name="makm" id="" class="form-control col-9" placeholder="Nhập mã khuyến mãi cần sửa">
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-3" for="">Phần trăm</label>    
                                            <input type="text" name="tile" id="" class="form-control col-9" placeholder="Tỉ lệ thay đổi">
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-3" for="">Điều kiện</label>    
                                            <input type="text" name="dk" id="" class="form-control col-9" placeholder="Điều kiện thay đổi">
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-3" for="">Từ</label>    
                                            <input type="date" name="tu" id="" class="form-control col-9">
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-3" for="">Đến</label>    
                                            <input type="date" name="den" id="" class="form-control col-9">
                                        </div>
                                        <button class="btn btn-success float-right" type="submit">Sửa</button>
                                    </form>
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