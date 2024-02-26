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
          <div class="col-11 col-md-7">
            <form id="search-form" class="text-center" action="index.php" method="post">
              <input type="text" class="form-control border-0 bg-transparent" placeholder="Bạn đang tìm gì vậy ?" />
            </form>
          </div>
          <div class="col-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path fill="currentColor"
                d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
            </svg>
          </div>
        </div>
      </div>

      <div
        class="col-sm-8 col-lg-4 d-flex justify-content-end gap-6 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">
        <div class="support-box text-end d-none d-xl-block">
          <span class="fs-6 text-muted">Liên hệ hỗ trợ</span>
          <h5 class="mb-0">+84 939 826 024</h5>
        </div>

        <ul class="d-flex justify-content-end list-unstyled m-0">
          <li>
            <a href="account.php" class="rounded-circle bg-light p-2 mx-1">
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
            <span class="fs-6 text-muted dropdown-toggle">Giỏ hàng</span>
            <span class="cart-total fs-5 fw-bold">129.000đ</span>
          </button>
          <div>
            <?php

            $is_logged_in = isset($_SESSION["email"]);

            if ($is_logged_in) {
              ?>
              <div class="hidden-sm hidden-xs m-2">
                <div class="primary-menu">
                  <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu"
                    data-menuname="main menu">
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
                data-menuname="main menu">
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