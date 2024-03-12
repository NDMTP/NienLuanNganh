<?php
session_start();
 if(isset($_POST["kt"])){
    $_SESSION['ngaybd']=$_POST["tgbd"];
    $_SESSION['ngaykt']=$_POST["kt"];
    echo'
    <script language="javascript">
    history.back();
    </script>
    ';
}
?>