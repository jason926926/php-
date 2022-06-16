<?php
    session_start();
    require_once('conn.php');
?>
<meta charset="utf-8">
<html>
<title>
    SouthPark Episode Recommendation Test
</title>
<style type="text/css">
@import url(my.css);
</style>   
<header>
    <div class="inner">
    <a href="index.php" style="color:black;text-decoration:none"><img src="eric.png" class="initImg scaleDownImg"/></a>
        <nav>
            <ul>
              <li class="active">
                <a href="#" style="color:black;text-decoration:none">Test</a>
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
    <form action="test_page1.php" method="post">
    <div class="entername">
        <div class="nameleft">
        <input class="Testname" style="font-family:monospace" type="text" name="name" placeholder="Enter Your Name" required></br>
        <input class="genderbox" style="font-family:monospace" type="radio" style="color:black" name="gender" value="male" required>Male
        <input  type="radio" style="font-family:monospace" name="gender" value="female">Female
        <input  type="radio" style="font-family:monospace" name="gender" value="other">Other
        </div>
        <div class="nameright">
        <input class="submitform" style="font-family:monospace" type="submit" name="submit" value="Go!"></br>
        </div>
</div>
</form>
</body>
</html>