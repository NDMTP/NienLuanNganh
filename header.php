<header>
  <div class="container-fluid">
    <div class="row py-3 border-bottom">

      <div class="col-sm-4 col-lg-2 text-center text-sm-start">
        <div class="main-logo">
          <a href="index.php">
            <img src="images/logo.jpg" alt="logo" class="img-fluid" width="115" height="36">
          </a>
        </div>
      </div>

      <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-6 d-none d-lg-block" style="margin-top: 25px;">
        <div class="search-bar row bg-light p-2 my-2 rounded-4">
          <div class="col-md-4 d-none d-md-block">
            <select class="form-select border-0 bg-transparent">
              <option>Danh mục sản phẩm</option>
              <option>Trái cây</option>
              <option>Hải sản</option>
              <option>Thịt</option>
              <option>Trứng</option>
              <option>Rau</option>
              <option>Đồ cho thú cưng</option>
              <option>Mì</option>
              <option>Vật dụng gia đình</option>
              <option>Nước uống</option>

            </select>
          </div>
          <div class="col-11 col-md-6">
            <form action="sanpham.php" class="form-search" name="text-search" method="get">
              <input type="text" name="search" class="form-control border-0 bg-transparent" value="<?php if (isset($_GET['search']))
                echo $_GET['search'] ?>" placeholder="Bạn đang tìm gì....">
              </form>
              <form action="ai/image-search.php" class="form-upload" name="image-search" method="post"
                enctype="multipart/form-data">
                <input type="file" id="img" name="img" accept="image/*" style="display: none;">
              </form>

            </div>
            <div class="col-1">
              <button type="submit" class="btn-submit" onclick="chooseImage() " >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 15">
                  <path
                    d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z" />
                  <path
                    d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                </svg>
              </button>
            </div>
            <div class="col-1">
              <button type="submit" class="btn-submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path fill="currentColor"
                    d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
                </svg>
              </button>
            </div>
          </div>
        </div>
        <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Lắng nghe sự kiện keydown trên trường nhập văn bản
        document.querySelector('input[name="search"]').addEventListener("keydown", function (event) {
            if (event.key === "Enter") {
                event.preventDefault(); // Ngăn chặn hành động mặc định của Enter (submit form)
                var form = document.querySelector('.form-search');
                form.submit();
            }
        });
    });

    function chooseImage() {
        var imageInput = document.getElementById('img');
        imageInput.click();
    }

    function uploadAndSearch() {
        var form = document.querySelector('.form-upload');
        form.submit();
    }
    
    // Xử lý sự kiện khi tải lên hình ảnh
    document.getElementById('img').addEventListener('change', function() {
        var form = document.querySelector('.form-upload');
        form.submit();
    });
</script>

        <div
          class="col-sm-8 col-lg-4 d-flex justify-content-end gap-6 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">
          <div class="support-box text-end d-none d-xl-block">
            <span class="fs-6 text-muted">
            <a  href="bot.php">
            Liên hệ hỗ trợ</a></span>
            <h5 class="mb-0">+84 939 826 024</h5>
          </div>

          <ul class="d-flex justify-content-end list-unstyled m-0">
            <li>
              <a href="user.php" class="rounded-circle bg-light p-2 mx-1">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#user"></use>
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="rounded-circle bg-light p-2 mx-1">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
            </li>
            <li class="d-lg-none">
              <a href="#" class="rounded-circle bg-light p-2 mx-1" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#cart"></use>
                </svg>
              </a>
            </li>
            <li class="d-lg-none">
              <a href="#" class="rounded-circle bg-light p-2 mx-1" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#search"></use>
                </svg>
              </a>
            </li>
          </ul>

          <div class="cart text-end d-none d-lg-block dropdown">
            <button class="border-0 bg-transparent d-flex flex-column gap-2 lh-1" type="button" data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
              <span class="fs-6 text-muted dropdown-toggle">GIỎ HÀNG</span>
              
            </button>
            <div>
              <?php

              $is_logged_in = isset($_SESSION["email"]);

              if ($is_logged_in) {
                ?>
              <div class="hidden-sm hidden-xs m-2">
                <div class="primary-menu">
                  <ul class="menu biolife-menu clone-main-menu clone-primary-menu" style="list-style-type: none; "
                    id="primary-menu" data-menuname="main menu">
                    <li class="menu-item menu-item-has-children has-megamenu">
                      <a href="#" class="menu-name" data-title="Shop"><span>Chào mừng,
                          <?php echo $_SESSION["lname"] ?>
                        </span></a>
                      <div class="wrap-megamenu" style="right: 0 !important;">
                        <div class="mega-content">
                    <li class="menu-item"><a href="dangxuat.php">Đăng xuất</a></li>
                </div>
              </div>
              </li>
              </ul>
            </div>
          </div>

          <?php
              } else {
                ?>
          <div class="hidden-sm hidden-xs m-2">
            <div class="primary-menu">
              <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu"
                style="list-style-type: none; " data-menuname="main menu">
                <li class="menu-item">
                  <a href="account.php" class="menu-name"><span>Đăng nhập </span></a>
                </li>
              </ul>
            </div>
          </div>
          <?php
              }
              ?>
      </div>
    </div>

  </div>
  </div>
  <div class="container-fluid">
    <div class="row py-3">
      <div class="d-flex  justify-content-center justify-content-sm-between align-items-center">
        <nav class="main-menu d-flex navbar navbar-expand-lg">

          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-header justify-content-center">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">

              <select class="filter-categories border-0 mb-0 me-5">
                <option>Danh mục sản phẩm</option>
                <?php
                $sql = "SELECT * FROM loaisanpham";

                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $result = $conn->query($sql);
                  $result_all = $result->fetch_all(MYSQLI_ASSOC);
                  foreach ($result_all as $row) {
                    ?>
                    <option value="<?php echo $row['MALOAI'] ?>">
                      <?php echo $row['TENLOAI'] ?>
                    </option>
                  <?php }
                } ?>
              </select>

              <ul class="navbar-nav justify-content-end menu-list list-unstyled d-flex gap-md-3 mb-0">
                <li class="nav-item active">
                  <a href="index.php" class="nav-link">Trang chủ</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="sanpham.php" class="nav-link">Sản phẩm</a>
                </li>
                <li class="nav-item">
                  <a href="bill.php" class="nav-link">Hóa đơn</a>
                </li>
                <li class="nav-item">
                  <a href="contact.php" class="nav-link">Liên hệ</a>
                </li>
                <li class="nav-item">
                  <a href="#blog" class="nav-link">Blog</a>
                </li>
                <!-- <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" role="button" id="pages" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                      <ul class="dropdown-menu" aria-labelledby="pages">
                        <li><a href="about.php" class="dropdown-item">About Us <span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                        <li><a href="shop.php" class="dropdown-item">Shop <span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                        <li><a href="single-product.php" class="dropdown-item">Single Product <span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                        <li><a href="cart.php" class="dropdown-item">Cart <span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                        <li><a href="checkout.php" class="dropdown-item">Checkout <span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                        <li><a href="blog.php" class="dropdown-item">Blog <span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                        <li><a href="single-post.php" class="dropdown-item">Single Post <span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                        <li><a href="styles.php" class="dropdown-item">Styles <span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                        <li><a href="contact.php" class="dropdown-item">Contact <span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                        <li><a href="thank-you.php" class="dropdown-item">Thank You <span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                        <li><a href="account.php" class="dropdown-item">My Account <span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                        <li><a href="404.php" class="dropdown-item">404 Error <span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                      </ul>
                    </li> -->


              </ul>

            </div>

          </div>

        </nav>
        <div class="d-none d-lg-block">
          <a href="account.php" target="_blank" class="nav-link btn-coupon-code">
            <img src="images/gift.svg" alt="gift icon">
            <strong class="ms-2 text-dark">Nhận ưu đãi ngay</strong>
          </a>
        </div>
      </div>
    </div>
  </div>
</header>