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
          <path fill="currentColor" d="M12 19a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0-4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm-5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm7-12h-1V2a1 1 0 0 0-2 0v1H8V2a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V6a1 1 0 0 1 1-1h1v1a1 1 0 0 0 2 0V5h8v1a1 1 0 0 0 2 0V5h1a1 1 0 0 1 1 1ZM7 15a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0 4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
          <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="category" viewBox="0 0 24 24">
          <path fill="currentColor" d="M19 5.5h-6.28l-.32-1a3 3 0 0 0-2.84-2H5a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-10a3 3 0 0 0-3-3Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-13a1 1 0 0 1 1-1h4.56a1 1 0 0 1 .95.68l.54 1.64a1 1 0 0 0 .95.68h7a1 1 0 0 1 1 1Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
          <path fill="currentColor" d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24">
          <path fill="currentColor" d="M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
          <path fill="currentColor" d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
          <path fill="currentColor" d="M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
          <path fill="currentColor" d="M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="check" viewBox="0 0 24 24">
          <path fill="currentColor" d="M18.71 7.21a1 1 0 0 0-1.42 0l-7.45 7.46l-3.13-3.14A1 1 0 1 0 5.29 13l3.84 3.84a1 1 0 0 0 1.42 0l8.16-8.16a1 1 0 0 0 0-1.47Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="trash" viewBox="0 0 24 24">
          <path fill="currentColor" d="M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="star-outline" viewBox="0 0 15 15">
          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M7.5 9.804L5.337 11l.413-2.533L4 6.674l2.418-.37L7.5 4l1.082 2.304l2.418.37l-1.75 1.793L9.663 11L7.5 9.804Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="star-solid" viewBox="0 0 15 15">
          <path fill="currentColor" d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
          <path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
          <path fill="currentColor" d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 15 15">
          <path fill="currentColor" d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z"/>
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
    
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch" aria-labelledby="Search">
      <div class="offcanvas-header justify-content-center">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Search</span>
          </h4>
          <form role="search" action="index.html" method="get" class="d-flex mt-3 gap-0">
            <input class="form-control rounded-start rounded-0 bg-light" type="email" placeholder="What are you looking for?" aria-label="What are you looking for?">
            <button class="btn btn-dark rounded-end rounded-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>

<?php
include'header.php';
?>
    

  <section class="py-5 mb-5" style="background: url(images/background-pattern.jpg);">
    <div class="container-fluid">
      <div class="d-flex justify-content-between">
        <h1 class="page-title pb-2">Giỏ hàng</h1>
        <nav class="breadcrumb fs-6">
          <a class="breadcrumb-item nav-link" href="index.html">Trang chủ</a>
          <a class="breadcrumb-item nav-link" href="account.html">Tài khoản</a>
          <span class="breadcrumb-item active" aria-current="page">Giỏ hàng</span>
        </nav>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container-fluid">
      <div class="row g-5">
        <div class="col-md-8">
        <form class="shopping-cart-form" action="#" method="post">
            <?php
            $tongtien = 0;
            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            ?>
          <div class="table-responsive cart">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="card-title text-uppercase text-muted">Sản phẩm</th>
                  <th scope="col" class="card-title text-uppercase text-muted">Số lượng</th>
                  <th scope="col" class="card-title text-uppercase text-muted">Giá</th>
                  <th scope="col" class="card-title text-uppercase text-muted"></th>
                </tr>
              </thead>
              <tbody>
              <?php
                  foreach ($_SESSION['cart'] as $key => $item) {
                      $sql = "select * from sanpham where MASP = '{$item['id']}'";
                      $result = $conn->query($sql);
                      $row = $result->fetch_assoc();
                      $string = $row['MASP'];
                      $masp = preg_replace('/[0-9]/', '', $string);
              ?>
                <tr>
                  <td scope="row" class="py-4">
                    <div class="cart-info d-flex flex-wrap align-items-center mb-4">
                      <div class="col-lg-3">
                        <div class="card-image">
                          <img src="images/<?php echo $masp."/".$row['LINKANH']?>" alt="cloth" class="img-fluid">
                        </div>
                      </div>
                      <div class="col-lg-9">
                        <div class="card-detail ps-3">
                          <h5 class="card-title">
                            <a href="#" class="text-decoration-none"><?php echo $row['TENSP']?></a>
                          </h5>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="py-4">
                    <div class="input-group product-qty w-50">
                      <span class="input-group-btn">
                        <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus">
                          <svg width="16" height="16">
                            <use xlink:href="#minus"></use>
                          </svg>
                        </button>
                      </span>
                      <input type="text" id="quantity" name="quantity" class="form-control input-number text-center"
                        value="1">
                      <span class="input-group-btn">
                        <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus"
                          data-field="">
                          <svg width="16" height="16">
                            <use xlink:href="#plus"></use>
                          </svg>
                        </button>
                      </span>
                    </div>
                  </td>
                  <td class="py-4">
  <div class="cart-remove">
    <form action="delete-one-cart.php" method="post">
      <input type="hidden" name="key" value="<?php echo $key ?>">
      <button type="submit" class="btn-reset" aria-label="Remove item">
        <svg width="24" height="24">
          <use xlink:href="#trash"></use>
        </svg>
      </button>
    </form>
  </div>
</td>
                </tr>
                <?php
                    }
                ?>
              </tbody>
            </table>
            <?php
            } else {
                echo '<div class="shpcart-subtotal-block">';
                echo '<h2>Không có sản phẩm nào trong giỏ hàng</h2>';
                echo '<div class="btn-checkout">';
                echo '   <a href="category-grid.php" class="btn checkout w-25">Xem tất cả sản phẩm</a>';
                echo '</div>';
                echo '</div>';
                
            }
            ?>
        </form>
          </div>
          
        </div>
        <div class="col-md-4">
          <div class="cart-totals bg-grey py-5">
            <h4 class="text-dark pb-4">Tổng cộng</h4>
            <div class="total-price pb-5">
              <table cellspacing="0" class="table text-uppercase">
                <tbody>
                  <tr class="subtotal pt-2 pb-2 border-top border-bottom">
                    <th>Subtotal</th>
                    <td data-title="Subtotal">
                      <span class="price-amount amount text-dark ps-5">
                        <bdi>
                          <span class="price-currency-symbol">$</span>2,370.00
                        </bdi>
                      </span>
                    </td>
                  </tr>
                  <tr class="order-total pt-2 pb-2 border-bottom">
                    <th>Total</th>
                    <td data-title="Total">
                      <span class="price-amount amount text-dark ps-5">
                        <bdi>
                          <span class="price-currency-symbol">$</span>2,370.00</bdi>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="button-wrap row g-2">
              <div class="col-md-6"><button class="btn btn-dark py-3 px-4 text-uppercase btn-rounded-none w-100">Cập nhật giỏ hàng
                  </button></div>
              <div class="col-md-6"><button
                  class="btn btn-dark py-3 px-4 text-uppercase btn-rounded-none w-100">Tiếp tục mua sắm</button></div>
              <div class="col-md-12"><button
                  class="btn btn-primary py-3 px-4 text-uppercase btn-rounded-none w-100">Thanh toán</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container-fluid">

      <div class="bg-secondary py-5 my-5 rounded-5"
        style="background: url('images/bg-leaves-img-pattern.png') no-repeat;">
        <div class="container my-5">
          <div class="row">
            <div class="col-md-6 p-5">
              <div class="section-header">
                <h2 class="section-title display-4">Get <span class="text-dark">25% Discount</span> on your first
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
include'footer.php';
?>
</html>