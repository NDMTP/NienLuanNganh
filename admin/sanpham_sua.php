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
        if ($_SESSION['PHANQUYEN'] == 'Admin') {
          include('sidebar.php');
        }
        if ($_SESSION['PHANQUYEN'] == 'nhanvien') {
          include('sidebar_nv.php');
        }

        $masp = $_GET['spid'];
        $sql = "select * from sanpham where MASP='$masp'";
        $rs = $conn->query($sql);
        $sp = $rs->fetch_assoc();

      ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-6 col-md-6 col-lg-6">
                <div class="card">
                  <form method="GET" action="suasanpham.php">
                    <input type="hidden" name="masp" value="<?php echo $masp ?>">
                    <div class="card-header">
                      <h4>Sửa sản phẩm <?php echo $sp['TENSP'] ?></h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Loại sản phẩm</label>
                        <select name="loai" id="" class="form-control">
                          <?php
                          $sql = "select * from loaisanpham";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                            $result = $conn->query($sql);
                            $result_all = $result->fetch_all(MYSQLI_ASSOC);
                            foreach ($result_all as $l) {
                              if ($l['MALOAI'] == $sp['MALOAI']) $dl="selected";
                              else $dl="";
                              echo '<option '.$dl.' value="' . $l['MALOAI'] . '">' . $l['TENLOAI'] . '</option>';
                            }
                          }
                          ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" class="form-control" id="tensp" name="tensp" value="<?php echo $sp['TENSP'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Size, Giá:</label>

                        <div class="row">
                          <div class="col-1"></div>
                          <?php
                          
                            $M = 0;
                            $L = 0;
                            $XL = 0;
                            $Vừa = 0;
                            $Lớn = 0;
                            $Combo = 0;

                            $sql = "select * from sizecuasanpham where MASP='$masp'";
                            $rs = $conn->query($sql);
                            $gia = $rs->fetch_all(MYSQLI_ASSOC);
                            foreach ($gia as $g) {
                              ${$g['MASIZE']} = $g['DONGIASP'];
                            }
                          
                          ?>
                          <div class="col-5 price">
                            Size M - <input type="number" min="0" step="1000" name="M" id="" value="<?php echo $M ?>"><br>
                            Size L - <input type="number" min="0" step="1000" name="L" id="" value="<?php echo $L ?>"><br>
                            Size XL - <input type="number" min="0" step="1000" name="XL" id="" value="<?php echo $XL ?>"><br>
                          </div>
                          <div class="col-5 price">
                            Size Vừa - <input type="number" min="0" step="1000" name="Vừa" id="" value="<?php echo $Vừa ?>"><br>
                            Size Lớn - <input type="number" min="0" step="1000" name="Lớn" id="" value="<?php echo $Lớn ?>"><br>
                            Size Combo - <input type="number" min="0" step="1000" name="Combo" id="" value="<?php echo $Combo ?>"><br>
                          </div>
                          <div class="col-1"></div>
                          <style>
                            .price {
                              display: flex;
                              flex-direction: column;
                              justify-content: space-between;
                            }

                            .price input {
                              max-width: 8rem;
                            }
                          </style>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Mô tả</label>
                        <input type="text" class="form-control" id="mota" name="mota" value="<?php echo $sp['MOTA'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Ảnh sản phẩm</label><br>
                        <?php  
                         preg_match('/^[A-Za-z]+/', $sp['MASP'], $matches);
                         $spImgDir = $matches[0];
                        ?>
                        <div class="text-center">
                          <img style="height: 15rem;" src="../assets/images/products/<?php echo $spImgDir."/".$sp['LINKANH'] ?>" alt=""><br>
                          <input class="mt-3" type="file" name="pdimg" id="" value="<?php echo $sp['LINKANH'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" class="mt-2">Sửa</button> 
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-3"></div>
            </div>
          </div>
        </section>

      </div>
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