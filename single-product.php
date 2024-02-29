<!DOCTYPE html>
<html lang="en">
<?php
require 'head.php';
require 'connect.php';
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
            <div>
              <h6 class="my-0">Rượu táo</h6>
              <small class="text-body-secondary">Đây là rượu táo</small>
            </div>
            <span class="text-body-secondary">78.000đ</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Nho tươi</h6>
              <small class="text-body-secondary">Đây là nho tươi</small>
            </div>
            <span class="text-body-secondary">28.000đ</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Sốt cà chua</h6>
              <small class="text-body-secondary">Đây là sốt cà chua</small>
            </div>
            <span class="text-body-secondary">8.000đ</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Tổng cộng(VND)</span>
            <strong>114.000đ</strong>
          </li>
        </ul>

        <button class="w-100 btn btn-primary btn-lg" type="submit">Tiếp tục thanh toán</button>
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
        <form role="search" action="index.html" method="get" class="d-flex mt-3 gap-0">
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
          $query = "select * from sanpham where MASP = '" . $spid . "'";
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
                <div class="stock-number text-dark"><em>Còn 5 trong kho</em></div>
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
                    <a href="#">Nước ép</a>,
                  </li>
                  <li data-value="S" class="select-item">
                    <a href="#"> Trái cây</a>,
                  </li>
                </ul>
              </div>
              <div class="meta-item d-flex align-items-baseline">
                <h6 class="item-title no-margin pe-2">Tags:</h6>
                <ul class="select-list list-unstyled d-flex">
                  <li data-value="S" class="select-item">
                    <a href="#">Classic</a>,
                  </li>
                  <li data-value="S" class="select-item">
                    <a href="#"> Modern</a>
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
              <h5>Mô tả chi tiết sản phẩm</h5>
              <p>Mình hãy cứ sống thế đi, ta cứ mãi ước mơ
                <br>
                Ta cứ luôn mong chờ điều tuyệt vời nhé em
                <br>
                Cầm tay nhau, mãi bước đi, sẽ cứ thế mỉm cười
                <br>
                Ta sẽ quên đi bao nhiêu tình yêu tan vỡ như là giấc mơ
              </p>
              <ul style="list-style-type:disc;" class="list-unstyled ps-4">
                <li>No love, no life, no love, no life</li>
                <li>Anh chẳng còn muốn quay về nơi ấy</li>
                <li>No love, no life, no love, no life (hey, Kewtiie) (what's up?)</li>
                <li>Sẽ mãi thuộc về nơi đây với em</li>
              </ul>
              <p>Em biết anh là một thằng rapper rót mật vào tai bằng dây thanh
                <br>
                Chỉ xuất hiện là họ đã say nhanh
                <br>
                Mang tiếp trap và trăm cái red flag là bởi vì luôn luôn có phụ nữ vây quanh
                <br>
                Có một ngàn lý do để phải ghen nhưng em không
                <br>
                Em up hình, biết chắc anh phải xem và đặc biệt phải khen sau mỗi lần xem xong
              </p>
            </div>
            <div class="tab-pane fade" id="v-pills-additional" role="tabpanel" aria-labelledby="v-pills-additional-tab"
              tabindex="0">
              <p>It is Comfortable and Best</p>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                id est laborum.</p>
            </div>
            <div class="tab-pane fade" id="v-pills-reviews" role="tabpanel" aria-labelledby="v-pills-reviews-tab"
              tabindex="0">
              <div class="review-box d-flex flex-wrap">
                <div class="col-lg-6 d-flex flex-wrap gap-3">
                  <div class="col-md-2">
                    <div class="image-holder">
                      <img src="images/reviewer-1.jpg" alt="review" class="img-fluid rounded-circle">
                    </div>
                  </div>
                  <div class="col-md-8">
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
                        <span class="rating-count">(3.5)</span>
                      </div>
                      <div class="review-header">
                        <span class="author-name">Tina Johnson</span>
                        <span class="review-date">– 03/07/2023</span>
                      </div>
                      <p>Vitae tortor condimentum lacinia quis vel eros donec ac. Nam at lectus urna duis convallis
                        convallis</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 d-flex flex-wrap gap-3">
                  <div class="col-md-2">
                    <div class="image-holder">
                      <img src="images/reviewer-2.jpg" alt="review" class="img-fluid rounded-circle">
                    </div>
                  </div>
                  <div class="col-md-8">
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
                        <span class="rating-count">(3.5)</span>
                      </div>
                      <div class="review-header">
                        <span class="author-name">Jenny Willis</span>
                        <span class="review-date">– 03/06/2022</span>
                      </div>
                      <p>Vitae tortor condimentum lacinia quis vel eros donec ac. Nam at lectus urna duis convallis
                        convallis</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="add-review mt-5">
                <h3>Add a review</h3>
                <p>Your email address will not be published. Required fields are marked *</p>
                <form id="form" class="form-group">

                  <div class="pb-3">
                    <div class="review-rating">
                      <span>Your rating *</span>
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
                        <span class="rating-count">(3.5)</span>
                      </div>
                    </div>
                  </div>
                  <div class="pb-3">
                    <input type="file" class="form-control" data-text="Choose your file">
                  </div>
                  <div class="pb-3">
                    <label>Your Review *</label>
                    <textarea class="form-control" placeholder="Write your review here"></textarea>
                  </div>
                  <div class="pb-3">
                    <label>Your Name *</label>
                    <input type="text" name="name" placeholder="Write your name here" class="form-control">
                  </div>
                  <div class="pb-3">
                    <label>Your Email *</label>
                    <input type="text" name="email" placeholder="Write your email here" class="form-control">
                  </div>
                  <div class="pb-3">
                    <label>
                      <input type="checkbox" required="">
                      <span class="label-body">Save my name, email, and website in this browser for the next
                        time.</span>
                    </label>
                  </div>
                  <button type="submit" name="submit"
                    class="btn btn-dark btn-large text-uppercase w-100">Submit</button>
                </form>
              </div>
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

          <div class="products-carousel swiper">
            <div class="swiper-wrapper">

              <div class="product-item swiper-slide">
                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                    <use xlink:href="#heart"></use>
                  </svg></a>
                <figure>
                  <a href="product-single.html" title="Product Title">
                    <img src="images/thumb-tomatoes.png" class="tab-image">
                  </a>
                </figure>
                <h3>Sunstar Fresh Melon Juice</h3>
                <span class="qty">1 Unit</span><span class="rating"><svg width="24" height="24" class="text-primary">
                    <use xlink:href="#star-solid"></use>
                  </svg> 4.5</span>
                <span class="price">$18.00</span>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="input-group product-qty">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#minus"></use>
                        </svg>
                      </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10"
                      min="1" max="100">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#plus"></use>
                        </svg>
                      </button>
                    </span>
                  </div>
                  <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
                </div>
              </div>

              <div class="product-item swiper-slide">
                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                    <use xlink:href="#heart"></use>
                  </svg></a>
                <figure>
                  <a href="product-single.html" title="Product Title">
                    <img src="images/thumb-tomatoketchup.png" class="tab-image">
                  </a>
                </figure>
                <h3>Sunstar Fresh Melon Juice</h3>
                <span class="qty">1 Unit</span><span class="rating"><svg width="24" height="24" class="text-primary">
                    <use xlink:href="#star-solid"></use>
                  </svg> 4.5</span>
                <span class="price">$18.00</span>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="input-group product-qty">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#minus"></use>
                        </svg>
                      </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10"
                      min="1" max="100">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#plus"></use>
                        </svg>
                      </button>
                    </span>
                  </div>
                  <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
                </div>
              </div>

              <div class="product-item swiper-slide">
                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                    <use xlink:href="#heart"></use>
                  </svg></a>
                <figure>
                  <a href="product-single.html" title="Product Title">
                    <img src="images/thumb-bananas.png" class="tab-image">
                  </a>
                </figure>
                <h3>Sunstar Fresh Melon Juice</h3>
                <span class="qty">1 Unit</span><span class="rating"><svg width="24" height="24" class="text-primary">
                    <use xlink:href="#star-solid"></use>
                  </svg> 4.5</span>
                <span class="price">$18.00</span>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="input-group product-qty">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#minus"></use>
                        </svg>
                      </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10"
                      min="1" max="100">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#plus"></use>
                        </svg>
                      </button>
                    </span>
                  </div>
                  <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
                </div>
              </div>

              <div class="product-item swiper-slide">
                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                    <use xlink:href="#heart"></use>
                  </svg></a>
                <figure>
                  <a href="product-single.html" title="Product Title">
                    <img src="images/thumb-bananas.png" class="tab-image">
                  </a>
                </figure>
                <h3>Sunstar Fresh Melon Juice</h3>
                <span class="qty">1 Unit</span><span class="rating"><svg width="24" height="24" class="text-primary">
                    <use xlink:href="#star-solid"></use>
                  </svg> 4.5</span>
                <span class="price">$18.00</span>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="input-group product-qty">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#minus"></use>
                        </svg>
                      </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10"
                      min="1" max="100">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#plus"></use>
                        </svg>
                      </button>
                    </span>
                  </div>
                  <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
                </div>
              </div>
              <div class="product-item swiper-slide">
                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                    <use xlink:href="#heart"></use>
                  </svg></a>
                <figure>
                  <a href="product-single.html" title="Product Title">
                    <img src="images/thumb-tomatoes.png" class="tab-image">
                  </a>
                </figure>
                <h3>Sunstar Fresh Melon Juice</h3>
                <span class="qty">1 Unit</span><span class="rating"><svg width="24" height="24" class="text-primary">
                    <use xlink:href="#star-solid"></use>
                  </svg> 4.5</span>
                <span class="price">$18.00</span>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="input-group product-qty">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#minus"></use>
                        </svg>
                      </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10"
                      min="1" max="100">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#plus"></use>
                        </svg>
                      </button>
                    </span>
                  </div>
                  <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
                </div>
              </div>

              <div class="product-item swiper-slide">
                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                    <use xlink:href="#heart"></use>
                  </svg></a>
                <figure>
                  <a href="product-single.html" title="Product Title">
                    <img src="images/thumb-tomatoketchup.png" class="tab-image">
                  </a>
                </figure>
                <h3>Sunstar Fresh Melon Juice</h3>
                <span class="qty">1 Unit</span><span class="rating"><svg width="24" height="24" class="text-primary">
                    <use xlink:href="#star-solid"></use>
                  </svg> 4.5</span>
                <span class="price">$18.00</span>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="input-group product-qty">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#minus"></use>
                        </svg>
                      </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10"
                      min="1" max="100">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#plus"></use>
                        </svg>
                      </button>
                    </span>
                  </div>
                  <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
                </div>
              </div>

              <div class="product-item swiper-slide">
                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                    <use xlink:href="#heart"></use>
                  </svg></a>
                <figure>
                  <a href="product-single.html" title="Product Title">
                    <img src="images/thumb-bananas.png" class="tab-image">
                  </a>
                </figure>
                <h3>Sunstar Fresh Melon Juice</h3>
                <span class="qty">1 Unit</span><span class="rating"><svg width="24" height="24" class="text-primary">
                    <use xlink:href="#star-solid"></use>
                  </svg> 4.5</span>
                <span class="price">$18.00</span>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="input-group product-qty">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#minus"></use>
                        </svg>
                      </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10"
                      min="1" max="100">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#plus"></use>
                        </svg>
                      </button>
                    </span>
                  </div>
                  <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
                </div>
              </div>

              <div class="product-item swiper-slide">
                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                    <use xlink:href="#heart"></use>
                  </svg></a>
                <figure>
                  <a href="product-single.html" title="Product Title">
                    <img src="images/thumb-bananas.png" class="tab-image">
                  </a>
                </figure>
                <h3>Sunstar Fresh Melon Juice</h3>
                <span class="qty">1 Unit</span><span class="rating"><svg width="24" height="24" class="text-primary">
                    <use xlink:href="#star-solid"></use>
                  </svg> 4.5</span>
                <span class="price">$18.00</span>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="input-group product-qty">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#minus"></use>
                        </svg>
                      </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10"
                      min="1" max="100">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#plus"></use>
                        </svg>
                      </button>
                    </span>
                  </div>
                  <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
                </div>
              </div>

            </div>
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