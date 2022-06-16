<?php
    require("DBconnect.php");

    $account=$_POST["account"];
    $uPwd=$_POST["password"];
    $uemail=$_POST["email"];

    $SQL="INSERT INTO user(Uacc, Upwd, Umail, Urole) VALUES ('$account','$uPwd','$uemail', 'user')";
    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('註冊成功！');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=login.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('註冊失敗！');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=register.php'>";
    }


?>