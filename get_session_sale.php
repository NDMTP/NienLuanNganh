<?php
include('connect.php');



if(isset($_POST['tong'])){

    $gt = $_POST['tong'];
    $tl = 0;

    $dks = array();
    $sale = "select * from khuyenmai where sysdate()<=NGAYKT order by DIEUKIENKM desc ";
    $rs = $conn->query($sale);
    $rsa = $rs -> fetch_all(MYSQLI_ASSOC);
    foreach ($rsa as $s) {
        if ($gt > $s['DIEUKIENKM']){
            $_SESSION['makm'] = $s['MAKM'];
            $tl = $s['PHANTRAMKM'];
            break;
        }
    }
    echo $tl;

}
else{
    echo'loi';
}
?>