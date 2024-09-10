<!DOCTYPE html>
<html lang="en">


<!-- email-inbox.html  21 Nov 2019 03:50:57 GMT -->
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
                            <div class="col-lg-3"></div>
                            <div class="col-6 col-md-6 col-lg-6">
                                <div class="card">
                                <form method="POST" action="nhacungcap_crud.php">
    <div class="card-header">
        <h4>Thêm nhà cung cấp</h4>
    </div>
    <?php
        $sql = "SELECT COUNT(*) AS loai FROM nhacungcap";
        $result = $conn->query($sql);
        $pn = 0;
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $pn = $row["loai"];
        }
        $maloai = ($pn + 1);
    ?>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label" for="basic-icon-default-fullname">Mã nhà cung cấp</label>
            <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"></span>
                <input type="text" value="<?php echo $maloai ?>" name="ma" class="form-control" id="basic-icon-default-fullname" placeholder="ABC" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="basic-icon-default-company">Tên nhà cung cấp</label>
            <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"></span>
                <input type="text" name="ten" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="basic-icon-default-company">Địa chỉ</label>
            <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"></span>
                <input type="text" name="diachi" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
            </div>
        </div>
        <button type="submit" name="add" class="btn btn-primary">Thêm</button>
    </div>
</form>

                                        </div>
                                </div>
                                <div class="col-lg-3"></div>
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