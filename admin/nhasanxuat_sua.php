<!DOCTYPE html>
<html lang="en">

<?php
include("connect.php");
include('head.php');

// Lấy mã nhà sản xuất từ GET
$mansx = isset($_GET['mansx']) ? $_GET['mansx'] : '';

// Khởi tạo biến để lưu dữ liệu
$tennsx = '';

// Lấy dữ liệu nhà sản xuất từ cơ sở dữ liệu
if ($mansx) {
    $sql = "SELECT TENNSX FROM nhasanxuat WHERE MANSX = '$mansx'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $tennsx = $row['TENNSX'];
    }
}
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
              <div class="col-lg-3"></div>
              <div class="col-6 col-md-6 col-lg-6">
                <div class="card">
                <form method="POST" action="nhasanxuat_crud.php">
                    <div class="card-header">
                      <h4>Cập nhật nhà sản xuất</h4>
                    </div>
                    <?php
                    if ($mansx) {
                        echo '<input type="hidden" name="mansx" value="' . htmlspecialchars($mansx) . '">';
                    }
                    ?>
                    <div class="card-body">
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Mã nhà sản xuất</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-fullname2" class="input-group-text"></span>
                          <input type="text" value="<?php echo htmlspecialchars($mansx); ?>" name="mansx"
                            class="form-control" id="basic-icon-default-fullname" aria-label="Mã nhà sản xuất"
                            aria-describedby="basic-icon-default-fullname2" readonly />
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Tên nhà sản xuất</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-fullname2" class="input-group-text"></span>
                          <input type="text" name="tennsx" value="<?php echo htmlspecialchars($tennsx); ?>" class="form-control" id="tennsx" aria-label="Tên nhà sản xuất"
                            aria-describedby="basic-icon-default-fullname2" />
                        </div>
                      </div>
                      <button type="submit" name="update" class="btn btn-primary">Cập nhật</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-3"></div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Templateshub</a>
        </div>
        <div class="footer-right"></div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>
