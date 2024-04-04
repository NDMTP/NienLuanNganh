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

  <!-- <div class="preloader-wrapper">
      <div class="preloader">
      </div>
    </div> -->

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
            if (isset ($_SESSION['cart']) && !empty ($_SESSION['cart'])) {
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
  <?php
  if (isset ($_SESSION['email'])) {
    ?>
    <section class="py-5 mb-5" style="background: url(images/background-pattern.jpg);">
      <div class="container-fluid">
        <div class="d-flex justify-content-between">
          <h1 class="page-title pb-2">Hóa đơn</h1>
          <nav class="breadcrumb fs-6">
            <a class="breadcrumb-item nav-link" href="index.php">Trang chủ</a>
            <a class="breadcrumb-item nav-link" href="bill.php">Hóa đơn</a>
          </nav>
        </div>
        <?php
        $sql = "SELECT * FROM nguoidung, hoadon WHERE hoadon.EMAIL = nguoidung.EMAIL AND hoadon.EMAIL ='" . $_SESSION['email'] . "'";
        $result = $conn->query($sql);
        $status = " ";
        while ($row = $result->fetch_assoc()) {
          if ($row["TRANGTHAIHOADON"] == 1) {
            $status = "Đang giao hàng";
            $text_col = "#11d12e";
          } elseif ($row["TRANGTHAIHOADON"] == 0) {
            $status = "Đang duyệt đơn";
            $text_col = "#ff7300";
          } elseif ($row["TRANGTHAIHOADON"] == 2) {
            $status = "Giao hàng thành công";
            $text_col = "#11d12e";
          } else {
            $status = "Đã Hủy";
            $text_col = "#f00";
          }
          ?>
          <table class="table dg" style="margin-top: 3rem ;  border: 1px solid #ccc ;box-shadow: 10px 10px 10px #E6E6E6;">

            <table class="table" style="margin-top: 3rem ;  border: 1px solid #ccc ;box-shadow: 10px 10px 10px #E6E6E6;">
              <thead>
                <tr>
                  <td scope="col" style="float:left; color: grey;" class="product-thumbnail">
                    <h5 style="margin: 0 !important">
                      <?php echo $row['NGAYLAP'] ?>
                    </h5>
                  </td>
                  <td class="product-price"></td>
                  <td class="product-quantity"></td>
                  <td class="product-quantity"></td>
                  <td scope="col" style="float:right; color: <?php echo $text_col ?>; font-weight: bold;">
                    <span class="<?php echo $text_col ?>">
                      <?php echo $status ?>
                  </td>
                  </span>
                </tr>
              </thead>
              <tbody class="dg">
                <?php
                $cthd = "SELECT * FROM chitiethoadon WHERE MAHOADON = '" . $row['MAHOADON'] . "' ORDER BY MAHOADON DESC";
                $cthd_result = $conn->query($cthd);
                while ($row1 = $cthd_result->fetch_assoc()) {

                  $masp2 = preg_replace('/[0-9]/', '', $row1['MASP']);
                  $masp = $row1['MASP'];
                  $sp = "SELECT * FROM sanpham WHERE MASP = '" . $row1['MASP'] . "'";
                  $kq = $conn->query($sp);
                  $sp = $kq->fetch_assoc();
                  ?>
                  <tr class="pd cart_item">
                    <td class="product-thumbnail row" data-title="Tên sản phẩm"
                      style="display: flex; flex-direction: row; justified-content: center; align-items: center; margin-left: 0;">
                      <a class="prd-thumb" href="single-product.php?id=<?php echo $row1['MASP']?>">
                        <figure><img style="margin-right: 20px;" width="110" height="110"
                            src="images/<?php echo $masp2 . "/" . $sp['LINKANH'] ?>" alt="shipping cart">
                          <?php echo $sp['TENSP'] ?>
                        </figure>
                      </a>
                    </td>
                    <td class="product-price" data-title="Price" style="padding-top:3.5rem">
                      <div class="price price-contain">
                        <ins><span class="price-amount"><span class="currencySymbol"></span>
                            <?php echo number_format($row1['DONBAN']) ?>
                            đ
                          </span></ins>
                      </div>
                    </td>
                    <td style="padding-top:4rem">
                      <b>Số lượng:
                        <?php echo $row1['SOLUONGSP'] ?>
                      </b>
                    </td>
                    <td style="padding-top:4rem">
                      <b>
                        <?php echo number_format($row1['TONGTIEN']) ?> đ
                      </b>
                    </td>
                    <td style="padding-top:4rem">
                      <b>
                        <?php if ($row["TRANGTHAIHOADON"] != 0 && $row["TRANGTHAIHOADON"] != 1) { ?>

                          <!-- Nút để kích hoạt modal -->
                          <button class="btn" style="margin-right:1rem; background-color: #AFEEEE; color: black"
                            data-bs-toggle="modal" data-bs-target="#reviewModal_<?php echo $masp ?>">Đánh giá</button>

                          <!-- Modal -->
                          <div class="modal fade" id="reviewModal_<?php echo $masp ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Đánh giá sản phẩm</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <!-- Form đánh giá -->
                                  <form method="post" action="handle_review.php">
                                    <input type="hidden" name="masp" value="<?php echo $masp ?>">
                                    <div class="mb-3">
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating"
                                          id="rating1_<?php echo $masp ?>" value="1">
                                        <label class="form-check-label" for="rating1_<?php echo $masp ?>">Rất Tệ</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating"
                                          id="rating1_<?php echo $masp ?>" value="2">
                                        <label class="form-check-label" for="rating2_<?php echo $masp ?>">Tệ</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating"
                                          id="rating1_<?php echo $masp ?>" value="3">
                                        <label class="form-check-label" for="rating3_<?php echo $masp ?>">Bình Thường</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating"
                                          id="rating1_<?php echo $masp ?>" value="4">
                                        <label class="form-check-label" for="rating4_<?php echo $masp ?>">Ngon</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating"
                                          id="rating1_<?php echo $masp ?>" value="5">
                                        <label class="form-check-label" for="rating5_<?php echo $masp ?>">Rất Ngon</label>
                                      </div>
                                    </div>
                                    <div class="mb-3">
                                      <label for="comment" class="form-label">Nhận xét:</label>
                                      <textarea class="form-control" id="comment_<?php echo $masp ?>" name="comment"
                                        rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Gửi đánh giá</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>

                        <?php } ?>
                      </b>
                    </td>
                  </tr>
                <?php } ?>

                <tr>
                  <td colspan="4"> </td>
                  <td>
                    <div style="color: #ff7300; font-weight: bold; text-align: right; padding: 1rem;">
                      <i class="fa-solid fa-shield-halved"></i> Thành tiền:
                      <?php echo number_format($row['TONGTIEN']) ?> Đ
                    </div>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td scope="col">
                    <section class="d-flex" style="text-align: right; padding: 1rem">
                      <a href="mualai.php?hoadon=<?php echo $row['MAHOADON'] ?>">
                        <button class="btn" style="margin-right:1rem; background-color: #ff7300; color: white">
                          Mua Lại
                        </button>
                      </a>




                    </section>

                  </td>
                </tr>
              </tbody>
            </table>
            </form>
            <?php
        }
        ?>
      </div>
      </div>
      </div>
      <?php
  } else {
    echo '<div class="shpcart-subtotal-block">';
    echo '<h2>Lịch sử đơn hàng</h2>';
    echo '<div class="btn-checkout">';
    echo '   <a href="category-grid.php" class="btn checkout w-25">Xem tất cả sản phẩm</a>';
    echo '</div>';
    echo '</div>';

  }
  ?>
    </div>
    </div>
    </div>


    </div>
  </section>


  <?php
  include 'footer.php';
  ?>
</body>

</html>