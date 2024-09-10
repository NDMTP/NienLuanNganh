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
          <span class="badge bg-primary rounded-pill">
            <?php echo $_SESSION['slsp'] ?>
          </span>
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
              <?php
              }
              ?>
            <button class="w-100 btn btn-primary btn-lg" id="checkoutButton" type="button">Tiếp tục thanh toán</button>
            <?php
            } else {
              echo '<p style="margin-top: 15px; font-size: 18px !important">Không có sản phẩm nào trong giỏ hàng</p>';
            }
            ?>
      </div>
    </div>
  </div>
  <script>
    document.getElementById("checkoutButton").addEventListener("click", function () {
      window.location.href = "giohang.php";
    });
  </script>
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
  include 'header.php';
  ?>


  <section id="selling-product" class="single-product mt-0 mt-md-5">
    <div class="container-fluid">
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="index.php">Home</a>
        <a class="breadcrumb-item" href="sanpham.php">Sản phẩm</a>
        <span class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</span>
      </nav>
      <div class="row g-5">
        <div class="col-lg-7">

          <?php
          $spid = $_GET['id'];
          $query = "SELECT sanpham.*, loaisanpham.TENLOAI, nhasanxuat.TENNSX
          FROM sanpham
          LEFT JOIN loaisanpham ON sanpham.MALOAI = loaisanpham.MALOAI
          LEFT JOIN nhasanxuat ON sanpham.MANSX = nhasanxuat.MANSX
          WHERE sanpham.MASP = '" . $spid . "'";
          $result = $conn->query($query);
          $row = $result->fetch_assoc();
          $string = $row['MASP'];
          // Loại bỏ các kí tự số khỏi chuỗi
          $masp = preg_replace('/[0-9]/', '', $string);
          ?>
          <div class="row flex-column-reverse flex-lg-row">
            <div class="col-md-12 col-lg-2">
              <!-- product-thumbnail-slider -->
              <div class="swiper product-thumbnail-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="images/<?php echo $masp ?>/<?php echo $row['LINKANH'] ?>" alt=""
                      class="thumb-image img-fluid">
                  </div>

                </div>
              </div>
              <!-- / product-thumbnail-slider -->
            </div>
            <div class="col-md-12 col-lg-10">
              <!-- product-large-slider -->
              <div class="swiper product-large-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="image-zoom" data-scale="2.5" data-image="images/T"><img
                        src="images/<?php echo $masp ?>/<?php echo $row['LINKANH'] ?>" alt="product-large"
                        class="img-fluid" width="800" height="800"></div>
                  </div>

                </div>
                <div class="swiper-pagination"></div>
              </div>
              <!-- / product-large-slider -->
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="product-info">
            <div class="element-header">

              <h2 itemprop="name" class="display-6">
                <?php echo $row['TENSP'] ?>
              </h2>

            </div>
            <div class="product-price pt-3 pb-3">
              <strong class="text-primary display-6 fw-bold">
                <?php echo number_format($row['DONGIABANSP']) ?>
              </strong><del class="ms-2">
                <?php echo number_format($row['DONGIABANSP'] + 100000) ?>
              </del>
            </div>
            <p>
              <?php echo $row['MOTA'] ?>
            </p>
            <div class="cart-wrap py-5">

              <div class="product-quantity pt-3">
                <div class="stock-button-wrap">

                  <div class="input-group product-qty" style="max-width: 150px;">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#minus"></use>
                        </svg>
                      </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number text-center"
                      value="1" min="1" max="100">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#plus"></use>
                        </svg>
                      </button>
                    </span>
                  </div>
                  <div class="qty-button d-flex flex-wrap pt-3">
                    <button type="submit" name="sb_dathang"
                      class="btn btn-primary py-3 px-4 text-uppercase me-3 mt-3">Mua ngay</button>
                    <button type="submit" name="sb_giohang" value="1269"
                      class="btn btn-dark py-3 px-4 text-uppercase mt-3">Thêm vào giỏ hàng</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="meta-product py-2">
              <div class="meta-item d-flex align-items-baseline">
                <h6 class="item-title no-margin pe-2">Kho:</h6>
                <ul class="select-list list-unstyled d-flex">
                  <li data-value="S" class="select-item">
                    <?php echo $row['SOLUONGKHO'] ?>
                  </li>
                </ul>
              </div>
            <div class="meta-product py-2">
              <div class="meta-item d-flex align-items-baseline">
                <h6 class="item-title no-margin pe-2">Mã hàng:</h6>
                <ul class="select-list list-unstyled d-flex">
                  <li data-value="S" class="select-item">
                    <?php echo $row['MASP'] ?>
                  </li>
                </ul>
              </div>
              <div class="meta-item d-flex align-items-baseline">
                <h6 class="item-title no-margin pe-2">Danh mục sản phẩm:</h6>
                <ul class="select-list list-unstyled d-flex">
                  <li data-value="S" class="select-item">
                    <a href="#">
                      <?php echo $row['TENLOAI']; ?>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="meta-item d-flex align-items-baseline">
                <h6 class="item-title no-margin pe-2">Nhà Sản Xuất:</h6>
                <ul class="select-list list-unstyled d-flex">
                  <li data-value="S" class="select-item">
                    <?php echo $row['TENNSX']; ?>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="product-info-tabs py-5">
    <div class="container-fluid">
      <div class="row">
        <div class="d-flex flex-column flex-md-row align-items-start gap-5">
          <div class="nav flex-row flex-wrap flex-md-column nav-pills me-3 col-lg-3" id="v-pills-tab" role="tablist"
            aria-orientation="vertical">
            <button class="nav-link text-start active" id="v-pills-description-tab" data-bs-toggle="pill"
              data-bs-target="#v-pills-description" type="button" role="tab" aria-controls="v-pills-description"
              aria-selected="true">Miêu tả</button>
            <button class="nav-link text-start" id="v-pills-additional-tab" data-bs-toggle="pill"
              data-bs-target="#v-pills-additional" type="button" role="tab" aria-controls="v-pills-additional"
              aria-selected="false">Thông tin thêm</button>
            <button class="nav-link text-start" id="v-pills-reviews-tab" data-bs-toggle="pill"
              data-bs-target="#v-pills-reviews" type="button" role="tab" aria-controls="v-pills-reviews"
              aria-selected="false">Đánh giá của khách hàng</button>
          </div>
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-description" role="tabpanel"
              aria-labelledby="v-pills-description-tab" tabindex="0">
              <?php echo $row['MOTA'] ?>
            </div>
            <div class="tab-pane fade" id="v-pills-additional" role="tabpanel" aria-labelledby="v-pills-additional-tab"
              tabindex="0">
              <!-- Phần thông tin thêm -->
            </div>
            <div class="tab-pane fade" id="v-pills-reviews" role="tabpanel" aria-labelledby="v-pills-reviews-tab"
              tabindex="0">
              <!-- Phần đánh giá của khách hàng -->
              <?php
              // Lấy MASP từ URL
              $spid = $_GET['id'];

              // Truy vấn để lấy thông tin sản phẩm
              $querySanPham = "SELECT * FROM sanpham WHERE MASP = '" . $spid . "'";
              $resultSanPham = $conn->query($querySanPham);

              if ($resultSanPham->num_rows > 0) {
                $rowSanPham = $resultSanPham->fetch_assoc();

                // Truy vấn để lấy đánh giá của sản phẩm kết hợp với thông tin người dùng
                $queryDanhGia = "SELECT danhgiasp.*, nguoidung.ten AS ten_nguoidung
                                            FROM danhgiasp
                                            LEFT JOIN nguoidung ON danhgiasp.email = nguoidung.email
                                            WHERE danhgiasp.masp = '" . $spid . "'";
                $resultDanhGia = $conn->query($queryDanhGia);

                echo "<div class='product-reviews'>";
                if ($resultDanhGia->num_rows > 0) {
                  // Hiển thị các đánh giá nếu có
                  echo "<div class='row'>";
                  while ($rowDanhGia = $resultDanhGia->fetch_assoc()) {
                    ?>
                    <div class="col-lg-4">
                      <div class="review-box d-flex flex-wrap">
                        <div class="col-md-2">
                          <div class="image-holder">
                            <img src="./images/usericon.png" alt="review" class="img-fluid rounded-circle">
                          </div>
                        </div>
                        <div class="col-md-10">
                          <div class="review-content">
                            <div class="rating-container d-flex align-items-center">
                              <div class="rating" data-rating="1">
                                <svg width="24" height="24" class="text-primary">
                                  <use xlink:href="#star-solid"></use>
                                </svg>
                              </div>
                              <div class="rating" data-rating="2">
                                <svg width="24" height="24" class="text-primary">
                                  <use xlink:href="#star-solid"></use>
                                </svg>
                              </div>
                              <div class="rating" data-rating="3">
                                <svg width="24" height="24" class="text-primary">
                                  <use xlink:href="#star-solid"></use>
                                </svg>
                              </div>
                              <div class="rating" data-rating="4">
                                <svg width="24" height="24" class="text-secondary">
                                  <use xlink:href="#star-solid"></use>
                                </svg>
                              </div>
                              <div class="rating" data-rating="5">
                                <svg width="24" height="24" class="text-secondary">
                                  <use xlink:href="#star-solid"></use>
                                </svg>
                              </div>
                            </div>
                            <div class="review-header">
                              <span class="author-name">
                                <?php echo "<strong>Tên người dùng: </strong>" . $rowDanhGia['ten_nguoidung']; ?>
                              </span>

                              <span class="review-date">
                                <?php echo "<strong>Thời gian đánh giá: </strong>" . $rowDanhGia['TGDANHGIA']; ?>
                              </span>
                            </div>
                            <p>
                              <?php echo "<strong>Nội dung đánh giá: </strong>" . $rowDanhGia['NOIDUNGDG']; ?>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
                  }
                  echo "</div>"; // Đóng row
                } else {
                  echo "<p>Không có đánh giá nào cho sản phẩm này.</p>";
                }
                echo "</div>"; // Đóng product-reviews
              } else {
                echo "<p>Sản phẩm không tồn tại.</p>";
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="related-products" class="product-store position-relative py-5">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">

          <div class="section-header d-flex justify-content-between my-5">

            <h2 class="section-title">Sản phẩm tương tự</h2>

            <div class="d-flex align-items-center">
              <div class="swiper-buttons">
                <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">


          <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

            <?php

            // Số sản phẩm trên mỗi trang
            $productsPerPage = 5;

            // Xác định trang hiện tại từ biến GET
            $current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;

            // Truy vấn lấy dữ liệu sản phẩm từ cơ sở dữ liệu
            $offset = ($current_page - 1) * $productsPerPage;

            $sql = "WHERE MALOAI = " . $row['MALOAI'];



            if (isset($_GET['loai']) && $_GET['loai'] != "all") {
              $sql = $sql . " AND MALOAI = " . $_GET['loai'];
            }
            if (isset($_GET['gia'])) {
              switch ($_GET['gia']) {
                case 'gia1':
                  $sql = $sql . " AND DONGIABANSP BETWEEN 0 AND 10000";
                  break;
                case 'gia2':
                  $sql = $sql . " AND DONGIABANSP BETWEEN 10000 AND 20000";
                  break;
                case 'gia3':
                  $sql = $sql . " AND DONGIABANSP BETWEEN 20000 AND 50000";
                  break;
                case 'gia4':
                  $sql = $sql . " AND DONGIABANSP BETWEEN 50000 AND 100000";
                  break;
                case 'gia5':
                  $sql = $sql . " AND DONGIABANSP >  100000";
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

            $query = "SELECT * FROM sanpham " . $sql;

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
                      <img src="images/<?php echo $masp ?>/<?php echo $row['LINKANH'] ?>" alt="dd" width="270" height="270"
                        class="tab-image">
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
                      <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                      <span class="input-group-btn">
                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                          <svg width="16" height="16">
                            <use xlink:href="#plus"></use>
                          </svg>
                        </button>
                      </span>
                    </div>
                    <a href="themvaogiohang.php?sb_cate=&pdid=<?php echo $row['MASP'] ?>&qty12554=1" class="nav-link">Thêm
                      vào giỏ<svg width="18" height="18">
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



          </div>
          <!-- / products-carousel -->

        </div>
      </div>

    </div>
  </section>

  <?php
  include 'footer.php';
  ?>

</html>