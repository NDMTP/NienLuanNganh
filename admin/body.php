<!-- Main Content -->
<div class="main-content">
    <section>
        <div class="card px-3 py-1 align-items-end justify-content-center">
            <div class="d-flex">
                <form action="chart_ngay.php" method="POST">
                    <div class="d-flex align-items-center">
                        <div class="form-group ml-2">
                            <label> Từ ngày </label>
                            <input class="form-control" name="tgbd" type="date" value="<?php
                            $ngay = $_SESSION['ngaybd'];
                            echo $ngay ?>" id="batdau" />
                        </div>
                        <div class="form-group ml-2">
                            <label>Đến</label>
                            <input name="kt" class="form-control" type="date" value="<?php echo $_SESSION['ngaykt'] ?>"
                                id="ketthuc" />
                        </div>
                        <button type="submit" style="height: 2.5rem;" class="btn btn-primary ml-3">Chọn</button>
                    </div>
                </form>
                <div id="error-message" style="display: none; color: red; margin:1rem">Lỗi:
                    Ngày bắt đầu không thể lớn hơn ngày kết thúc</div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Đơn hàng</h5>
                                        <h2 class="mb-3 font-25">
                                            <?php
                                            $servername = "localhost";
                                            $username = "root";
                                            $password = "";
                                            $dbname = "qlsthi";
                                            $conn = new mysqli($servername, $username, $password, $dbname);
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }
                                            $tongkh = "SELECT COUNT(MAHOADON) AS TONGDH FROM hoadon where NGAYLAP BETWEEN '" . $_SESSION['ngaybd'] . "' AND '" . $_SESSION['ngaykt'] . "'";
                                            $result = mysqli_query($conn, $tongkh);
                                            $tong1 = $result->fetch_assoc();
                                            echo $tong1["TONGDH"];
                                            ?>
                                        </h2>
                                        <!-- <p class="mb-0"><span class="col-green">10%</span> Tăng</p> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="assets/img/banner/1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15"> Khách Hàng</h5>
                                        <h2 class="mb-3 font-25">
                                            <?php
                                            $servername = "localhost";
                                            $username = "root";
                                            $password = "";
                                            $dbname = "qlsthi";
                                            $conn = new mysqli($servername, $username, $password, $dbname);
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }
                                            $tongkh = "SELECT COUNT(EMAIL) AS TONGKH FROM nguoidung WHERE PHANQUYEN = 'khachhang'";
                                            $result = mysqli_query($conn, $tongkh);
                                            $tong1 = $result->fetch_assoc();
                                            echo $tong1["TONGKH"];
                                            ?>
                                        </h2>
                                        <!-- <p class="mb-0"><span class="col-orange">09%</span> Giảm</p> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="assets/img/banner/2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Lượt đánh giá</h5>
                                        <h2 class="mb-3 font-25">
                                            <?php
                                            $servername = "localhost";
                                            $username = "root";
                                            $password = "";
                                            $dbname = "qlsthi";
                                            $conn = new mysqli($servername, $username, $password, $dbname);
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }
                                            $tongkh = "SELECT COUNT(*) AS TONGDG FROM danhgiasp where TGDANHGIA BETWEEN '" . $_SESSION['ngaybd'] . "' AND '" . $_SESSION['ngaykt'] . "'";
                                            $result = mysqli_query($conn, $tongkh);
                                            $tong1 = $result->fetch_assoc();
                                            echo $tong1["TONGDG"];
                                            ?>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="assets/img/banner/3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Doanh Thu</h5>
                                        <h2 class="mb-3 font-25">
                                            <?php
                                            $servername = "localhost";
                                            $username = "root";
                                            $password = "";
                                            $dbname = "qlsthi";
                                            $conn = new mysqli($servername, $username, $password, $dbname);
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }
                                            $tongkh = "SELECT SUM(TONGTIEN) AS TONGT FROM hoadon where trangthaihoadon=2 and NGAYLAP BETWEEN '" . $_SESSION['ngaybd'] . "' AND '" . $_SESSION['ngaykt'] . "'";
                                            $result = mysqli_query($conn, $tongkh);
                                            $tong1 = $result->fetch_assoc();
                                            echo number_format($tong1["TONGT"]) . "đ";
                                            ?>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="assets/img/banner/4.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card ">
                    <div class="card-header">
                        <h4>Doanh thu theo tháng</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div id="columnchart_values"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="card ">
                    <div class="card-header">
                        <h4>Tỉ lệ đánh giá</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="recent-report__chart">
                                <div id="donutChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <?php
        $doanhthu = "
                    SELECT loaisanpham.TENLOAI, COALESCE(SUM(tongsp.doanhthu), 0) as TONGDOANHTHU
                    FROM loaisanpham LEFT JOIN (SELECT sanpham.MALOAI, SUM(hoadon.TONGTIEN) as doanhthu
                    FROM chitiethoadon JOIN sanpham ON sanpham.MASP = chitiethoadon.MASP
                    JOIN hoadon ON hoadon.MAHOADON = chitiethoadon.MAHOADON WHERE hoadon.NGAYLAP BETWEEN '" . $_SESSION['ngaybd'] . "' AND '" . $_SESSION['ngaykt'] . "'
                    AND hoadon.TRANGTHAIHOADON = 2 GROUP BY sanpham.MALOAI) as tongsp ON loaisanpham.MALOAI = tongsp.MALOAI GROUP BY loaisanpham.TENLOAI;";
        $result_dt = $conn->query($doanhthu); ?>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {
                packages: ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ["Loại sản phẩm", "doanh thu", {
                        role: "style"
                    }],
                    <?php
                    if ($result_dt->num_rows > 0) {
                        while ($row = $result_dt->fetch_assoc()) {
                            echo '
                                        ["' . $row['TENLOAI'] . '", ' . $row['TONGDOANHTHU'] . ', "#38b5c5"],
                                    ';
                        }
                    } else {
                        echo '
                                    ["Không có doanh thu",0, "#38b5c5"],
                                ';
                    }
                    ?>
                ]);
                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                    {
                        calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation"
                    },
                    2
                ]);
                var options = {
                    width: 1400,
                    height: 380,
                    padding: 2,
                    bar: {
                        groupWidth: "95%"
                    },
                    legend: {
                        position: "none"
                    },
                };
                var chart = new google.visualization.ColumnChart(document
                    .getElementById("columnchart_values"));
                chart.draw(view, options);
            }
            $(document).ready(function () {
                var batdauInput = $("#batdau");
                var ketthucInput = $("#ketthuc");
                var form = $("form");
                var errorMessage = $("#error-message");
                form.on("submit", function (e) {
                    var batdauDate = new Date(batdauInput.val());
                    var ketthucDate = new Date(ketthucInput.val());
                    if (batdauDate > ketthucDate) {
                        e.preventDefault();
                        errorMessage.show();
                    } else {
                        errorMessage.hide();
                    }
                });
            });
        </script>


        <div class="row">
            <div class="col-12 col-sm-12 col-lg-4">
                <?php
                $loai = "SELECT COUNT(*) as tongloai FROM loaisanpham";
                $result_loai = $conn->query($loai);
                $rowloai = $result_loai->fetch_assoc();

                $sp = "SELECT COUNT(*) as tongsp FROM sanpham";
                $result_sp = $conn->query($sp);
                $rowsp = $result_sp->fetch_assoc();

                ?>

                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="row">
                            <div class="card-title text-nowrap col-6">
                                <h5 class=" me-3">Loại sản phẩm</h5>
                                <h2 class="mb-2">
                                    <?php echo $rowloai['tongloai']; ?>
                                </h2>
                            </div>
                            <div class="card-title  col-6">
                                <h5 class="me-3 text-nowrap">Sản phẩm </h5>
                                <h2 class="mb-2">
                                    <?php echo $rowsp['tongsp']; ?>
                                </h2>

                            </div>

                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <ul class="p-0 m-0">
                            <?php
                            // Modified query to order by the count of products (tongsp) in descending order
                            $tongloai = "SELECT loaisanpham.TENLOAI, COUNT(sanpham.MASP) AS tongsp 
                 FROM sanpham
                 JOIN loaisanpham ON sanpham.MALOAI = loaisanpham.MALOAI
                 GROUP BY loaisanpham.TENLOAI
                 ORDER BY tongsp DESC";
                            $result_loai = $conn->query($tongloai);
                            while ($row_loai = $result_loai->fetch_assoc()) {
                                ?>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3 d-flex justify-content-center">
                                        <span class="avatar-initial rounded bg-label-info">
                                            <i class="fa-solid fa-layer-group mt-3"></i>
                                        </span>
                                    </div>

                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2 m-2">
                                            <h6 class="mb-0">
                                                <?php echo $row_loai['TENLOAI']; ?>
                                            </h6>
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">
                                                <?php echo $row_loai['tongsp']; ?>
                                            </small>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>

                    </div>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-lg-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Top khách hàng có doanh thu cao nhất</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <?php
                            // Modified query to order by TONG descending
                            $topclient = "SELECT nguoidung.TEN, nguoidung.EMAIL, SUM(hoadon.TONGTIEN) AS TONG
                      FROM hoadon
                      JOIN nguoidung ON HOADON.EMAIL = nguoidung.EMAIL
                      WHERE hoadon.TRANGTHAIHOADON = 2
                      GROUP BY nguoidung.EMAIL
                      ORDER BY TONG DESC
                      LIMIT 7";
                            $result_top = $conn->query($topclient);
                            while ($row_top = $result_top->fetch_assoc()) {
                                ?>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3 d-flex justify-content-center ">
                                        <i class="fa-solid fa-user mt-3"></i>
                                    </div>
                                    <div class="d-flex w-120 flex-wrap align-items-center justify-content-between gap-2 ">
                                        <div class="me-2 m-2">
                                            <h6 class="mb-0"
                                                style="max-width: 170px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"
                                                title="<?php echo $row_top['EMAIL'] ?>">
                                                <?php echo $row_top['TEN'] ?>
                                            </h6>
                                            <h6 class="mt-2">
                                                <?php echo number_format($row_top['TONG'], 0, ".") ?> VNĐ
                                            </h6>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4">
                <div class="card">

                    <div class="card-body">
                        <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                <div class="card-title">
                                    <h5 class="text-nowrap mb-2 ">Top sản phẩm bán chạy
                                        nhất</h5>
                                </div>
                                <ul class="mt-4">
                                    <?php
                                    // SQL query to get products sorted by quantity sold in descending order
                                    $topsp = "SELECT sanpham.TENSP, sanpham.MASP, SUM(chitiethoadon.SOLUONGSP) AS tongban
              FROM sanpham
              JOIN chitiethoadon ON sanpham.MASP = chitiethoadon.MASP
              JOIN hoadon ON chitiethoadon.MAHOADON = hoadon.MAHOADON
              WHERE hoadon.TRANGTHAIHOADON = 2
              GROUP BY sanpham.MASP
              ORDER BY tongban DESC
              LIMIT 7";

                                    $result_top = $conn->query($topsp);
                                    while ($row_topsp = $result_top->fetch_assoc()) {
                                        ?>
                                        <li class="d-flex mb-4 pb-1">
                                            <div class="avatar flex-shrink-0 me-3 d-flex justify-content-center">
                                                <i class="fa-solid fa-bowl-food mt-3"></i>
                                            </div>

                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2 m-2">
                                                    <h6 class="mb-0" data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top"
                                                        style="max-width: 170px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"
                                                        title="<?php echo $row_topsp['TENSP']; ?>">
                                                        <?php echo $row_topsp['TENSP']; ?>
                                                    </h6>
                                                    <h6 class="mb-0">
                                                        <?php echo $row_topsp['MASP']; ?>
                                                    </h6>
                                                </div>
                                                <div class="user-progress">
                                                    <small class="fw-semibold">
                                                        <?php echo $row_topsp['tongban']; ?>
                                                    </small>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>