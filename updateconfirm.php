<?php
    require("DBconnect.php");
    $uAcc=$_POST["uAcc"];
    $uPwd=$_POST["uPwd"];
    

    $SQL="UPDATE user SET  Upwd='$uPwd'  WHERE Uacc='$uAcc'";

    if(mysqli_query($link,$SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('更新成功！');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=index.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('更新失敗！');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=index.php'>";
    }
?>