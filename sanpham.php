<!DOCTYPE html>
<html lang="en">
<?php
require 'head.php';
require 'connect.php';
require 'popup_themthanhcong.php';

?>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <defs>
      <symbol xmlns="http://www.w3.org/2000/svg" id="link" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M12 19a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0-4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm-5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm7-12h-1V2a1 1 0 0 0-2 0v1H8V2a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V6a1 1 0 0 1 1-1h1v1a1 1 0 0 0 2 0V5h8v1a1 1 0 0 0 2 0V5h1a1 1 0 0 1 1 1ZM7 15a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0 4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="category" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 5.5h-6.28l-.32-1a3 3 0 0 0-2.84-2H5a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-10a3 3 0 0 0-3-3Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-13a1 1 0 0 1 1-1h4.56a1 1 0 0 1 .95.68l.54 1.64a1 1 0 0 0 .95.68h7a1 1 0 0 1 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
        <path fill="currentColor" d="M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="check" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M18.71 7.21a1 1 0 0 0-1.42 0l-7.45 7.46l-3.13-3.14A1 1 0 1 0 5.29 13l3.84 3.84a1 1 0 0 0 1.42 0l8.16-8.16a1 1 0 0 0 0-1.47Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="trash" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-outline" viewBox="0 0 15 15">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
          d="M7.5 9.804L5.337 11l.413-2.533L4 6.674l2.418-.37L7.5 4l1.082 2.304l2.418.37l-1.75 1.793L9.663 11L7.5 9.804Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-solid" viewBox="0 0 15 15">
        <path fill="currentColor"
          d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 15 15">
        <path fill="currentColor"
          d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
      </symbol>
    </defs>
  </svg>

  <div class="preloader-wrapper">
    <div class="preloader">
    </div>
  </div>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
    <div class="offcanvas-header justify-content-center">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Giỏ hàng của bạn</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <?php
            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
              foreach ($_SESSION['cart'] as $item) {
                $sql = "SELECT * FROM sanpham WHERE MASP = '{$item['id']}'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $string = $row['MASP'];
                $masp = preg_replace('/[0-9]/', '', $string);
                ?>
                <div>
                  <h6 class="my-0"><a href="#" class="product-name">
                      <?php echo $row['TENSP'] ?>
                    </a></h6>
                  <small class="text-body-secondary">
                    <?php echo $row['MOTA'] ?>
                  </small>
                </div>
                <span class="text-body-secondary">
                  <?php echo number_format($row['DONGIABANSP']) ?>
                </span>
              </li>
              <div class="qty">
                <label for="cart[id123][qty]">Số lượng:</label>
                <input type="number" class="input-qty" name="cart[id123][qty]" id="cart[id123][qty]"
                  value="<?php echo $item['quant'] ?>" disabled>
              </div>
              <!-- <li class="list-group-item d-flex justify-content-between">
              <span>Tổng cộng(VND)</span>
              <strong>114.000đ</strong>
            </li> -->
            </ul>
          <?php
              }
              ?>
          <button class="w-100 btn btn-primary btn-lg" type="submit">Tiếp tục thanh toán</button>
          <?php
            } else {
              echo '<p style="margin-top: 15px; font-size: 18px !important">Không có sản phẩm nào trong giỏ hàng</p>';
            }
            ?>
      </div>

    </div>
  </div>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch"
    aria-labelledby="Search">
    <div class="offcanvas-header justify-content-center">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Search</span>
        </h4>
        <form role="search" action="index.php" method="get" class="d-flex mt-3 gap-0">
          <input class="form-control rounded-start rounded-0 bg-light" type="email"
            placeholder="What are you looking for?" aria-label="What are you looking for?">
          <button class="btn btn-dark rounded-end rounded-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>

  <?php
  include('header.php');
  ?>

  <section class="py-5 mb-5" style="background: url(images/background-pattern.jpg);">
    <div class="container-fluid">
      <div class="d-flex justify-content-between">
        <h1 class="page-title pb-2">Sản phẩm</h1>
        <nav class="breadcrumb fs-6">
          <a class="breadcrumb-item nav-link" href="index.php">Trang chủ</a>
          <a class="breadcrumb-item nav-link" href="sanpham.php">Sản phẩm</a>
          <span class="breadcrumb-item active" aria-current="page">Shop</span>
        </nav>
      </div>
    </div>
  </section>

  <div class="shopify-grid">
    <div class="container-fluid">
      <div class="row g-5">
        <aside class="col-md-2">
          <div class="sidebar">
            <div class="widget-menu">
              <div class="widget-search-bar">
                <form role="search" method="get" class="d-flex position-relative">
                  <form class="d-flex mt-3 gap-0" action="index.php">
                    <input class="form-control form-control-lg rounded-2 bg-light" type="email"
                      placeholder="Bạn đang tìm gì" aria-label="Search here">
                    <button class="btn bg-transparent position-absolute end-0" type="submit"><svg width="24" height="24"
                        viewBox="0 0 24 24">
                        <use xlink:href="#search"></use>
                      </svg></button>
                  </form>
                </form>
              </div>
            </div>
            <div class="widget-product-categories pt-5">
              <h5 class="widget-title">Danh mục sản phẩm</h5>
              <ul class="product-categories sidebar-list list-unstyled">
                <li class="cat-item">
                  <a href="/collections/categories">Tất cả</a>
                </li>
                <li class="cat-item">
                  <a href="#" class="nav-link">Trái cây</a>
                </li>
                <li class="cat-item">
                  <a href="#" class="nav-link">Nước ép</a>
                </li>
                <li class="cat-item">
                  <a href="#" class="nav-link">Rau củ quả</a>
                </li>
                <li class="cat-item">
                  <a href="#" class="nav-link">Sữa chua</a>
                </li>
              </ul>
            </div>
            <div class="widget-product-tags pt-3">
              <h5 class="widget-title">Đồ ăn nhanh</h5>
              <ul class="product-tags sidebar-list list-unstyled">
                <li class="tags-item">
                  <a href="#" class="nav-link">Mỳ ý</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link">Hamberger</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link">Hot Dog</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link">Gà Rán</a>
                </li>
              </ul>
            </div>
            <div class="widget-product-brands pt-3">
              <h5 class="widget-title">Hải sản</h5>
              <ul class="product-tags sidebar-list list-unstyled">
                <li class="tags-item">
                  <a href="#" class="nav-link">Tôm</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link">Cua</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link">Các loại hải sản khác</a>
                </li>
              </ul>
            </div>
            <div class="widget-price-filter pt-3">
              <h5 class="widget-titlewidget-title">Giá</h5>
              <ul class="product-tags sidebar-list list-unstyled">
                <li class="tags-item">
                  <a href="#" class="nav-link">Thấp hơn 10.000đ</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link">10.000đ-20.000đ</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link">20.000đ-50.000đ</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link">50.000đ-100.000đ</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link">Lớn hơn 100.000đ</a>
                </li>
              </ul>
            </div>
          </div>
        </aside>

        <main class="col-md-10">
          <div class="filter-shop d-flex justify-content-between">
            <div class="showing-product">
              <p>Hiển thị 1 trong 155 sản phẩm</p>
            </div>
            <div class="sort-by">
              <select id="input-sort" class="form-control" data-filter-sort="" data-filter-order="">
                <option value="">Sắp xếp theo mặc định</option>
                <option value="">Tên (A - Z)</option>
                <option value="">Tên (Z - A)</option>
                <option value="">Giá (Thấp-Cao)</option>
                <option value="">Giá (Cao-Thấp)</option>
                <option value="">Đánh giá (Cao)</option>
                <option value="">Rating (Lowest)</option>
                <option value="">Model (A - Z)</option>
                <option value="">Model (Z - A)</option>
              </select>
            </div>
          </div>

          <div class="product-grid row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

              <?php

              // Số sản phẩm trên mỗi trang
              $productsPerPage = 12;

              // Xác định trang hiện tại từ biến GET
              $current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;

              // Truy vấn lấy dữ liệu sản phẩm từ cơ sở dữ liệu
              $offset = ($current_page - 1) * $productsPerPage;

              $sql = " WHERE 1";



              if (isset($_GET['loai']) && $_GET['loai'] != "all") {
                $sql = $sql . " AND MALOAI = " . $_GET['loai'];
              }
              if (isset($_GET['gia'])) {
                switch ($_GET['gia']) {
                  case 'loc-gia-1':
                    $sql = $sql . " AND DONGIABANSP BETWEEN 20000 AND 35000";
                    break;
                  case 'loc-gia-2':
                    $sql = $sql . " AND DONGIABANSP BETWEEN 35000 AND 100000";
                    break;
                  case 'loc-gia-3':
                    $sql = $sql . " AND DONGIABANSP BETWEEN 100000 AND 200000";
                    break;
                  case 'loc-gia-4':
                    $sql = $sql . " AND DONGIABANSP >  200000";
                    break;
                  default:
                    break;
                }

              }




              if (isset($_GET['search'])) {
                $s = $_GET['search'];
              } else
                $s = '';
              $sql .= " AND TENSP like '%" . $s . "%'";

              $sql = $sql . " LIMIT $offset, $productsPerPage";

              $query = "SELECT * FROM sanpham" . $sql;

              $result = $conn->query($query);
              if ($result->num_rows > 0) {
                $result = $conn->query($query);
                $result_all = $result->fetch_all(MYSQLI_ASSOC);
                foreach ($result_all as $row) {
                  $string = $row['MASP'];
                  // Loại bỏ các kí tự số khỏi chuỗi
                  $masp = preg_replace('/[0-9]/', '', $string);
                  ?>
                  <div class="product-item">
                    <span class="badge bg-success position-absolute m-3">-30%</span>
                    <a href="#" class="btn-wishlist"><svg width="24" height="24">
                        <use xlink:href="#heart"></use>
                      </svg></a>
                    <figure>
                      <a href="single-product.php?id=<?php echo $row['MASP'] ?>" title="Product Title">
                        <img src="images/<?php echo $masp ?>/<?php echo $row['LINKANH'] ?>" alt="dd" width="270"
                          height="270" class="tab-image">
                      </a>
                    </figure>
                    <h3>
                      <?php echo $row['TENSP'] ?>
                    </h3>

                    <span class="price">
                      <?php echo number_format($row['DONGIABANSP']) ?> đ
                    </span>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="input-group product-qty">
                        <span class="input-group-btn">
                          <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                            <svg width="16" height="16">
                              <use xlink:href="#minus"></use>
                            </svg>
                          </button>
                        </span>
                        <input type="text" name="quantity" class="form-control input-number quantity" value="1">
                        <span class="input-group-btn">
                          <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                            <svg width="16" height="16">
                              <use xlink:href="#plus"></use>
                            </svg>
                          </button>
                        </span>
                      </div>
                      <a href="themvaogiohang.php?sb_cate=&pdid=<?php echo $row['MASP'] ?>&qty12554=1" class="nav-link">Thêm vào giỏ<svg width="18" height="18">
                          <use xlink:href="#cart"></use>
                        </svg></a>
                    </div>
                  </div>
                  <?php
                }
              } else {
                echo "Không tìm thấy sản phẩm phù hợp";
              }
              ?>
            <!-- <div class="col">
            </div> -->

          </div>
          <!-- / product-grid -->

          <nav class="text-center py-4" aria-label="Page navigation">
            <ul class="pagination d-flex justify-content-center">
              <li class="page-item disabled">
                <a class="page-link bg-none border-0" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item active" aria-current="page"><a class="page-link border-0" href="#">1</a></li>
              <li class="page-item"><a class="page-link border-0" href="#">2</a></li>
              <li class="page-item"><a class="page-link border-0" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link border-0" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>

        </main>

      </div>
    </div>
  </div>

  <section class="py-5">
    <div class="container-fluid">

      <div class="bg-secondary py-5 my-5 rounded-5"
        style="background: url('images/bg-leaves-img-pattern.png') no-repeat;">
        <div class="container my-5">
          <div class="row">
            <div class="col-md-6 p-5">
              <div class="section-header">
                <h2 class="section-title display-4">Get <span class="text-primary">25% Discount</span> on your first
                  purchase</h2>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictumst amet, metus, sit massa posuere
                maecenas. At tellus ut nunc amet vel egestas.</p>
            </div>
            <div class="col-md-6 p-5">
              <form>
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="Name">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Email</label>
                  <input type="email" class="form-control form-control-lg" name="email" id="email"
                    placeholder="abc@mail.com">
                </div>
                <div class="form-check form-check-inline mb-3">
                  <label class="form-check-label" for="subscribe">
                    <input class="form-check-input" type="checkbox" id="subscribe" value="subscribe">
                    Subscribe to the newsletter</label>
                </div>
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-dark btn-lg">Submit</button>
                </div>
              </form>

            </div>

          </div>

        </div>
      </div>

    </div>
  </section>

  <?php
  include("footer.php");
  ?>

</html>