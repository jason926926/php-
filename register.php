<?php
    session_start();
    ob_start();
?>

<html>
    <head>
        <title>register</title>
        <style type="text/css">

nav{
    float: right;
    padding: 24px 24px;
    color:black;
    font-family:monospace;
    display: flex;
    width: 100%;
    }
    ul{
    margin: 0;
    list-style-type: none;
    color:black;
    font-family:monospace;
    }
    nav li{
    padding: 26px 20px;
    float: left;
    color:black;
    font-family:monospace;
    }
    nav li:hover{ 
    background-color: #7A918D;
    opacity: 0.5; }   
    nav a{
    padding: 10px;
    }
    body {
            margin: 0px;
            padding: 0px;
        }

        .div_all {
            width: 100%;
            height: 100%;
            min-width: 1200px;
            margin-bottom: 50px;
        }

        .div_all_title {
            width: 100%;
            height: 60px;
            text-align: center;
            line-height: 60px;
            font-size: 26px;
            font-weight: bold;
        }

        .div_all_ke {
            width: 100%;
            height: 80px;
            margin-left: 20%;
            
            line-height: 40px;
            font-weight: bold;
            font-size: 24px;
            margin-top: 10px;
        }
        .initImg{
            width: 150px;
            height: 80px;
        }
        .fillImg{
            object-fit: fill;
        }
        .containImg{
            object-fit: contain;
        }
        .coverImg{
            object-fit: cover;
        }
        .noneImg{
            object-fit: none;
        }
        .scaleDownImg{
            object-fit: scale-down;
        }
        .outer {
        background-color: #95afba;
        }
        .inner {
        position: fixed; 
        background-color: #d5e1a3;
        display: flex;
        border: 1px solid #999999;          /* ★ */
        width: 100%;
        height: 80px;
        font-weight: bold;
        font-size: 24px;
        align-items: center;    /* ★ */
        }
        .fixmiddle {
        background-image:url(scale.jpg);
        background-repeat: no-repeat;
        
        background-position: 100% 60%;
        background-size: 100% 120%;
        display: flex;
        border: 1px solid #999999;          /* ★ */
        height: 400px;
        font-weight: bold;
        font-size: 24px;
        font-family:monospace;
        align-items: center;    /* ★ */
        }
        .middletext {
            width: 100%;
            height: 220px;
            margin-left: 0%;
            background:hsla(0,0%,25%,0.7);
            line-height: 20px;
            font-weight: bold;
            font-size: 24px;
            margin-top: 80px;
            display:flex;
        }
        .div_all_stan {
            width: 50%;
            height: 200px;
            margin-left: 10%;
            line-height: 40px;
            font-weight: bold;
            font-size: 24px;
            color:rgba(255,255,255,0.6);
            margin-top: 25px;
            flex:2;
            font-family:monospace;

        }
        .div_recommand {
            width: 10%;
            height: 200px;
            margin-left: 0%;
            flex:1;
            line-height: 40px;
            font-weight: bold;
            font-size: 24px;
            margin-top: 76px;
            color:rgba(255,255,255,0.6);
            font-family:monospace;
            
        }



html{
    height:100%;
}
* html body{
    height:100%;
}
body{
    margin:0;
    padding:0;
    font-family:Arial,sans-serif;
    min-height:100%;
    position:relative;
}
div a{
    text-decoration:none;
    color:#000000;
}
div.wrapper{
    padding-bottom:80px;
    margin-bottom: 0 5px; 
}
div.footer{
    clear:both;
    width:100%;
    position:absolute;
    bottom:0;
    height:80px;
    color:#fff;
    padding:20px 0px 0px 0px;
    text-align:center;
    background-color:#4d5363;
}
</style> 

<header>
    <div class="inner">
    <a href="index.php" style="color:black;text-decoration:none"><img src="eric.png" class="initImg scaleDownImg"/></a>
        <nav>
            <ul>
              <li>
                <a href="test.php" style="color:black;text-decoration:none">Test</a>
              </li>
              <li>
                <a href="about.php" style="color:black;text-decoration:none">About</a>
              </li>
              <li style="float:right">
                <a href="login.php" style="color:black;text-decoration:none">User</a>
              </li>
            </ul>
          </nav>
        </div>

    <div class="fixmiddle containImg">
        <div class="middletext">
        <div class="div_all_stan">
            <img src="stan.png" class="initImg scaleDownImg"/>OH MY GOD! They've Killed Kenny!</br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You Bastard!<img src="kyle.png" class="initImg scaleDownImg"/>
        </br>
        </div> 
        <div class="div_recommand">
            "Recommend Classic South</br> 
            Park Episode For You!"
        </div>
        </div>
        
    </header>


</head><body bgcolor='#ffffff'>

    <form action="enrollconfirm.php" method="post" enctype="multipart/form-data">
            <center>
                <h1>註冊</h1>
                請輸入以下資訊完成註冊
                <table style = 'left'>
                    <tr><td>
                        帳號 ：<input type = 'text' name = 'account' pattern = '[a-zA-Z0-9]{4,16}' placeholder = '4~16字的英數組合' required><br>
                        密碼 ：<input type = 'password' name = 'password' pattern = '[a-zA-Z0-9]{4,16}' placeholder = '4~16字的英數組合' required><br>
                        信箱 ：<input type = 'email' name = 'email' placeholder = 'email' required><br>
                        <center><input type="submit" value="提交註冊資料"></center>
                    </td></tr>
	                
                </table>
                <h5><a href = 'login.php'><font color = 'gray'>回到登入頁</font></a></h5>
            </center>
	    </form>
        <div class="wrapper">
    
</div>
    </body>
</html>