<!DOCTYPE html>
<html class="no-js" lang="en">

<?php 
    require 'head.php' ;
    require 'connect.php';    
?>
<body class="biolife-body">

    <!-- Preloader -->
        <!-- <div id="biof-loading">
            <div class="biof-loading-center">
                <div class="biof-loading-center-absolute">
                    <div class="dot dot-one"></div>
                    <div class="dot dot-two"></div>
                    <div class="dot dot-three"></div>
                </div>
            </div>
        </div> -->

    <!-- HEADER -->
    <?php require 'header.php' ?>


    <!--Navigation section-->
    <!-- <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                <li class="nav-item"><a href="#" class="permal-link">Natural Organic</a></li>
                <li class="nav-item"><span class="current-page">Fresh Fruit</span></li>
            </ul>
        </nav>
    </div> -->

    <div class="page-contain category-page no-sidebar">
        <div class="container">
            <div class="row">

                <!-- Main content -->
                <div id="main-content" class="main-content col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="block-item recently-products-cat md-margin-bottom-39">
                        
                    </div>

                    <div class="product-category grid-style">

                        <div id="top-functions-area" class="top-functions-area" >
                            <div class="flt-item to-left group-on-mobile">
                                <span class="flt-title">Lọc sản phẩm:</span>
                                <a href="#" class="icon-for-mobile">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                                <div class="wrap-selectors">
                                    <form action="#" name="frm-refine" method="get">
                                        <span class="title-for-mobile">Lọc sản phẩm:</span>
                                        <div data-title="Price:" class="selector-item">
                                            <select name="gia" class="selector">
                                                <option value="">Giá</option>
                                                <option value="loc-gia-1">25K - 35K</option>
                                                <option value="loc-gia-2">35K - 100K</option>
                                                <option value="loc-gia-3">100K - 200K</option>
                                                <option value="loc-gia-4">> 200K</option>
                                            </select>
                                        </div>
                                        <div data-title="Brand:" class="selector-item">
                                            <select name="loai" class="selector">
                                                <option value="all">Tất cả sản phẩm</option>
                                                <?php
                                                    $sql = "SELECT * FROM loaisanpham";
                                                    $result = $conn->query($sql);
                                                        if ($result->num_rows > 0) {
                                                        $result = $conn->query($sql);
                                                        $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                                        foreach ($result_all as $row) {
                                                ?>
                                                    <option value="<?php echo $row['MALOAI'] ?>"><?php echo $row['TENLOAI'] ?></option>
                                                <?php }} ?>
                                            </select>
                                        </div>
                                        <div class="selector-item">
                                            <button class="btn-fill">Lọc</button>
                                        </div>
                                        <p class="btn-for-mobile"><button type="submit" class="btn-submit">Lọc</button></p>
                                    </form>
                                </div>
                            </div>
                            <div class="flt-item to-right">
                                <span class="flt-title">Sắp xếp</span>
                                <div class="wrap-selectors">
                                    <div class="selector-item orderby-selector">
                                        <select name="orderby" class="orderby" aria-label="Shop order">
                                            <option value="menu_order" selected="selected">Mặc định</option>
                                            <option value="popularity">Bán chạy nhất</option>
                                            <option value="highest">Giá cao đến thấp</option>
                                            <option value="lowest">Giá thấp đến cao</option>
                                        </select>
                                    </div>
                                    <!-- <div class="selector-item viewmode-selector">
                                        <a href="category-grid-left-sidebar.html" class="viewmode grid-mode active"><i class="biolife-icon icon-grid"></i></a>
                                        <a href="category-list-left-sidebar.html" class="viewmode detail-mode"><i class="biolife-icon icon-list"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <ul class="products-list">

                            <?php
                                // Số sản phẩm trên mỗi trang
                                $productsPerPage = 12;

                                // Xác định trang hiện tại từ biến GET
                                $current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;

                                // Truy vấn lấy dữ liệu sản phẩm từ cơ sở dữ liệu
                                $offset = ($current_page - 1) * $productsPerPage;

                                $myfile = fopen("ai/data.txt", "r");
        
                                while (!feof($myfile)) {
                                    $line = fgets($myfile);
                                    // echo $line.PHP_EOL."<br>";

                                $sql = " WHERE LINKANH like '".trim($line.PHP_EOL)."'";
                                if (isset($_GET['loai']) && $_GET['loai'] != "all"){
                                    $sql = $sql." AND MALOAI = ".$_GET['loai'];
                                }
                                if (isset($_GET['gia'])){
                                    switch ($_GET['gia']) {
                                        case 'loc-gia-1':
                                            $sql = $sql." AND DONGIABANSP BETWEEN 25000 AND 35000";
                                            break;
                                        case 'loc-gia-2':
                                            $sql = $sql." AND DONGIABANSP BETWEEN 35000 AND 100000";
                                            break;
                                        case 'loc-gia-3':
                                            $sql = $sql." AND DONGIABANSP BETWEEN 100000 AND 200000";
                                            break;
                                        case 'loc-gia-4':
                                            $sql = $sql." AND DONGIABANSP >  200000";
                                            break;
                                        default:
                                            break;
                                    }
                                    
                                }

                                $sql = $sql." LIMIT $offset, $productsPerPage";

                                $query = "SELECT * FROM sanpham".$sql;

                                $result = $conn->query($query);
                                    if ($result->num_rows > 0) {
                                    $result = $conn->query($query);
                                    $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                    foreach ($result_all as $row) {
                                        $string = $row['MASP'];
                                        // Loại bỏ các kí tự số khỏi chuỗi
                                        $masp = preg_replace('/[0-9]/', '', $string);
                            ?>
                                <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="contain-product layout-default">
                                        <div class="image-container">
                                            <div class="product-thumb">
                                                <a href="product-detail.php?id=<?php echo $row['MASP'] ?>" class="link-to-product">
                                                    <img class="fit-image" src="assets/images/products/<?php echo $masp ?>/<?php echo $row['LINKANH'] ?>" alt="dd" width="270" height="270" class="product-thumnail">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h4 class="product-title"><a href="#" class="pr-name"><?php echo $row['TENSP'] ?></a></h4>
                                            <div class="price">
                                                <ins><span class="price-amount"><span class="currencySymbol"></span><?php echo number_format($row['DONGIABANSP']) ?> đ</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol"></span><?php echo number_format($row['DONGIABANSP']+10000) ?> đ</span></del>
                                            </div>
                                            <!-- <div class="shipping-info">
                                                <p class="shipping-day">3-Day Shipping</p>
                                                <p class="for-today">Pree Pickup Today</p>
                                            </div> -->
                                            <div class="slide-down-box">
                                                <div class="buttons">
                                                    <a href="#" style="padding: 10px 5px !important; margin-right: 5px !important;" class="btn add-to-cart-btn">đặt hàng ngay</a>
                                                    <a href="#" style="padding: 0 !important; width: 10px !important;" class="btn"></a>
                                                    <a href="themvaogiohang.php?from=index&pdid=<?php echo $row['MASP'] ?>&qty12554=1" 
                                                                style="padding: 10px 5px !important; " class="btn add-to-cart-btn">thêm vào giỏ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php
                                    }
                                } 
                            }
                            ?>

                            </ul>
                        </div>

                        <div class="biolife-panigations-block">
                            <ul class="panigation-contain">
                                <li><a href="#" class="link-page next"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                <?php
                                     // Tính số trang dựa trên tổng số sản phẩm
                                    $q = "SELECT COUNT(*) AS total FROM sanpham";
                                    $rs = $conn->query($q);

                                    if ($rs->num_rows > 0) {
                                        $r = $rs->fetch_assoc();
                                        $total_products = $r['total'];
                                    } else {
                                        $total_products = 0;
                                    }
                                    $total_pages = ceil($total_products / $productsPerPage);
                                    for ($i = 1; $i <= $total_pages; $i++) {
                                        $active_class = ($i == $current_page) ? 'current-page' : 'link-page';
                                        echo '<li><a href="?page='.$i.'" class="'. $active_class .'">'.$i.'</a></li>';
                                    }
                                ?>
                                <li><a href="#" class="link-page next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

   <?php require 'footer.php' ?>

    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.nicescroll.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/biolife.framework.js"></script>
    <script src="assets/js/functions.js"></script>
</body>

</html>