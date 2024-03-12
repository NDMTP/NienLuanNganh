<?php

include("connect.php");
                if(isset($_POST["st1"])){
                    
                    $sql="SELECT * FROM nguoidung where email='".$_POST["email"]."' AND matkhau='".md5($_POST["password"])."'";
                    $result1 = $conn->query($sql);
                  // print_r($result1);
                    if($result1->num_rows>0){
                        
                        $row = $result1->fetch_assoc();
                        
                        $_SESSION["email"] = $row["EMAIL"];
                        $_SESSION["password"]=$row["MATKHAU"];
                        $_SESSION["diachi"]=$row["DIACHI"];
                        $_SESSION["hoten"]=$row["TEN"];
                        $_SESSION["PHANQUYEN"]=$row["PHANQUYEN"];
                        $fullname = explode(' ', $row['TEN']);
                        $lastname = end($fullname);
                        $_SESSION["lname"] = $lastname;
                        $_SESSION["sdt"]=$row["SDT"];
                        $_SESSION['slsp'] = 0;
                        
                        header('Location: index.php');
                        $_SESSION['ngaybd']=date('Y-m-d', strtotime('-1 month'));
                        $_SESSION['ngaykt']= date('Y-m-d');
                    
                    }
                    else{
                 
                        echo '<script language="javascript">
                    alert("Nhập sai email hoặc mật khẩu.");
                    history.back();
                     </script>';
                      
                    }
                   
                    }
                
                ?>