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

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart"
        aria-labelledby="My Cart">
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
                                    value="<?php echo $item['thanhphot'] ?>" disabled>
                            </div>
                            <?php
                            }
                            ?>
                        <button class="w-100 btn btn-primary btn-lg" id="checkoutButton" type="button">Tiếp tục thanh
                            toán</button>
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

    <section class="py-5 mb-5" style="background: url(images/background-pattern.jpg);">
        <div class="container-fluid">
            <div class="d-flex">
                <nav class="breadcrumb fs-6">
                    <a class="breadcrumb-item nav-link" href="index.php">Trang chủ</a>
                    <a class="breadcrumb-item nav-link" href="thongtinmuahang.php">Thông tin mua hàng</a>
                    <a class="breadcrumb-item nav-link" href="thongtindonhang.php">Thông tin đơn hàng</a>

                </nav>
            </div>
        </div>
        <<div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h2>Thông tin đơn hàng</h2>
                    <?php
                    $query = "SELECT * FROM thanhpho where MATP = '{$_GET['tentp']}'";
                    $result = $conn->query($query);
                    $row = $result->fetch_assoc();
                    ?>
                    <form action="dathang.php" method="get">
                        <div class="signin-container">
                            Khách hàng: <span style="font-size: 17px; font-weight: bold;">
                                <?php echo $_GET['hoten'] ?>
                            </span><br>
                            SDT: <span style="font-size: 17px; font-weight: bold;">
                                <?php echo $_GET['sdt'] ?>
                            </span><br>
                            Địa chỉ: <span style="font-size: 17px; font-weight: bold;">
                                <?php echo $_GET['tentp'] ?>
                            </span><br>
                            Ghi chú: <span style="font-size: 17px; font-weight: bold;">
                                <?php echo $_GET['note'] ?>
                            </span><br>
                            Ngày mua: <span style="font-size: 17px; font-weight: bold;">
                                <?php echo date('d-m-Y') ?>
                            </span><br>

                            <?php
                            if (isset($_SESSION['cart_temp']) && !empty($_SESSION['cart_temp'])) {
                                echo '<table style="margin-top: 10px !important;">';
                                echo '<tr><th>Tên SP</th><th>Số lượng</th><th>Đơn giá</th><th>Tổng tiền</th></tr>';
                                $tongtien = 0;
                                foreach ($_SESSION['cart_temp'] as $item) {
                                    $sql = "select * from sanpham where MASP = '{$item['id']}'";
                                    $result = $conn->query($sql);
                                    $sp = $result->fetch_assoc();
                                    echo '<tr>';
                                    echo '<td>' . $sp['TENSP'] . '</td>';
                                    echo '<td>' . $item['quant'] . '</td>';
                                    echo '<td>' . number_format($sp['DONGIABANSP']) . ' đ</td>';
                                    echo '<td>' . number_format($sp['DONGIABANSP'] * $item['quant']) . ' đ</td>';
                                    echo '</tr>';
                                    $tongtien += ($sp['DONGIABANSP'] * $item['quant']);
                                }

                                echo '</table>';
                            }
                            ?>

                            <div class="row" style="padding-bottom: 40px;">
                                <input type="hidden" name="tt" value="<?php echo $_GET['tt'] ?>">
                                <input type="hidden" name="gg" value="<?php echo $_GET['gg'] ?>">
                                <input type="hidden" name="thanhtien" value="<?php echo $_GET['tt'] ?>">
                                <div style="text-align: center;" class="col-12">
                                    <button type="submit"
                                        style="margin-top: 15px; padding: 10px 20px; background-color: #32CD32; color: white; border:none; border-radius: 15px;"><span
                                            style="font-size: 17px; font-weight: bold;">Xác nhận thông
                                            tin</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            </div>
            </div>
    </section>
            <?php
            include 'footer.php';
            ?>
</body>

</html>