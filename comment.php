<?php
session_start();
?>
<html>
<head>
    <title>comment</title>
    <style>
        input{padding:5px 15px; border:2px black solid; cursor:pointer;border-radius:5px;}
        input[type="submit"]{padding:5px 15px; background:#ccc; border:0 none; cursor:pointer;border-radius:5px;}
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
</head>
<header>
    <div class="inner">
    <a href="index.php" style="color:black;text-decoration:none"><img src="eric.png" class="initImg scaleDownImg"/></a>
        <nav>
            <ul>
              <li>
                <a href="test.php" style="color:black;text-decoration:none">Test</a>
              </li>
              <li>
                <a href="#" style="color:black;text-decoration:none">About</a>
              </li>
              <li style="float:right">
                <a href="#" style="color:black;text-decoration:none">User</a>
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
    <h1><center>Comment</center></h1>
    <form action="" method="post" style="text-align:center">
    <br/>Score:<input type="radio" name="score" required value="1">1 <input type="radio" name="score" value="2">2 <input type="radio" name="score" value="3">3 <input type="radio" name="score" value="4">4 <input type="radio" name="score" value="5">5 
    <br/><textarea name="comment" col="350" row="250"></textarea>
    <br/><input type="submit" value="comment">
    </form>
</body>
