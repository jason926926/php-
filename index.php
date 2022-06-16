<?php
    session_start();
    require_once('conn.php');
?>
<html>
<title>
    SouthPark Episode Recommendation Test
</title>
<style type="text/css">
@import url(my.css);

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


</style>      
<header>
<link rel="shortcut icon" type="image/png" href="img/eric.ico">
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
<body>
<hr color="blue" width="70%" height="5">
    <a name="#top">
    <h1 style="color:blue;text-align:center;font-size:30px;">單元劇推薦<br/>
    <hr color="blue" width="70%" height="5">
    
<div style="background-color:#ADADFF;width:50%;margin:0px auto;text-align:center">
    <ul>
    <li><b><h1 style="color:red;text-align:center;font-size:30px;">Announcement</h1></b>
    <li>6/7正式開放使用
    <li>有甚麼問題也沒辦法洽尋
    <li>做完記得評分喔
    </ul>
</div>
    <br/>
<br/>
<h2><font color="#FFAE00"><u><b>Test List</b></u></font></h2>

<div style="float:left;width:50%">
    <h3>South Park</h3>
        <br/><img src="https://assets.juksy.com/files/articles/95120/800x_100_w-5d9d2b78c9986.png" width="50%" height="40%"> </a>     
        </br>
        <br/>
</div>
    <div style="float:left;width:50%">
    <h3>The Simpsons</h3>
        <br/><img src="https://i0.wp.com/hackazine-tw.com/wp-content/uploads/2019/08/e8be9be699aee6a3ae.png?resize=598%2C400&ssl=1" width="50%" height="40%"> </a>
         </br>
        <br/>
    </div>
<hr>
</div>
<div>
    <div style="float:left;width:50%">
    <h3>Rick And Morty</h3>
    <br/><img src="http://5b0988e595225.cdn.sohucs.com/images/20181026/780651a9c9064303b1ef9a34e5e31ca9.jpeg" width="50%" height="40%"></a>
           </br>
        <br/>
    </div>
    <div style="float:left;width:50%">
    <h3>Cyanide & Happiness</h3>
        <br/><img src="https://i.ytimg.com/vi/_BnPZtGmMNM/maxresdefault.jpg" width="50%" height="40%"> </a>
          </br>
        <br/>
    </div>
</div>
<hr>
<div>
    <div style="float:left;width:50%">
    <h3>Family Guy</h3>
        <br/><img src="https://cf.shopee.tw/file/922479ec6a948a16313f7efb1bfe1109" width="50%" height="40%"> </a>
           </br>
        <br/>
    </div>
    <div style="float:left;width:50%">
    <h3>SpongeBob SquarePants</h3>
        <br/><img src="https://flxt.tmsimg.com/assets/p184854_b_h9_bw.jpg" width="50%" height="40%"> </a>
          </br>
        <br/>
    </div>
<hr>
</div>
</br>
</body>
</html>