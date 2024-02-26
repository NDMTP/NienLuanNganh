<?php
include("connect.php");
if (isset($_POST["dksthi"])) {
    //echo $_POST["sdt"]."<br>";
    $sql1 = "SELECT * FROM nguoidung where email='" . $_POST["email"] . "' ";
    $result1 = $conn->query($sql1);
    if (mysqli_num_rows($result1) > 0) {
        echo '<script language="javascript">
                    alert("Email đã được đăng ký!");
                    history.back();
                     </script>';

    } else {


        $sql2 = "INSERT INTO nguoidung(email,matkhau,diachi,ten,sdt) 
                        values('" . $_POST["email"] . "','" . md5($_POST["password"]) . "','" . $_POST["diachi"] . "',
                    '" . $_POST["hoten"] . "','" . $_POST["sdt"] . "') ";
        //echo $result2."<br>";
        $result2 = $conn->query($sql2);

        $sql = "SELECT * FROM nguoidung where email='" . $_POST["email"] . "' ";
        $result1 = $conn->query($sql);
        //echo $sql."<br>";
        if ($result1->num_rows > 0) {


            $row = $result1->fetch_assoc();

            $_SESSION["email"] = $row["EMAIL"];
            $_SESSION["password"] = $row["MATKHAU"];
            $_SESSION["diachi"] = $row["DIACHI"];
            $_SESSION["hoten"] = $row["TEN"];
            $fullname = explode(' ', $row['TEN']);
            $lastname = end($fullname);
            $_SESSION["lname"] = $lastname;
            $_SESSION["sdt"] = $row["SDT"];



            header('Location: index.php');


        } else {
            echo "Lỗi không thể đăng ký";

        }
    }
}
?>