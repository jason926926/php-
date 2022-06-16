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
<?php include 'my.css'; ?>
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
  <?php
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['gender'] = $_POST['gender'];

    $sql="select eid from 試題";
    $result=$conn->query($sql);
    $array=array();
    $i=0;
    while($row=$result->fetch_row()){
        foreach($row as $val){
            $array[$i]=$val; 
            $i ++;
        }
        $_SESSION['testarray'] = $array;
      }
        shuffle($_SESSION['testarray']);//將存放題目id的數組進行隨機排序
        $_SESSION['no']=0;               //用於取出rand數組中question時的id
        $rand=array_slice($_SESSION['testarray'],0,15);     //從數組的第一個數開始，取出用户輸入數量個id存放進一個數組
        $_SESSION['rand'] = $rand;
          ?>
  <form action="test_page2.php" method="post">
    <div class="textpage">
      <div class="textcolumn">
      <?php
        $sql2="select * from 試題 where eid='{$_SESSION['rand'][$_SESSION['no']]}'";  //查找rand數組中每一個id對應的question
        $result2=$conn->query($sql2);  //存放mysql語句返回的結果集
        $_SESSION['testrandomed'] = $result2;
        $row = $_SESSION['testrandomed']->fetch_assoc();
        echo $_SESSION['no']+1;
        echo '. ';
        echo $row['exam'];
        echo '</br>';
        echo '<div class="textphoto">';
        echo '<img src="' . $row['img'] . '" / >';
        $_SESSION['no'] = $_SESSION['no']+1; 
        echo'</div>';
        ?>
      <div class="textsatisfy">
      </br>
      非常不滿意
      <input class="testbox" style="font-family:monospace" type="radio" style="color:black" name="Q1" value="-3" required>
      <input class="testbox" type="radio" style="font-family:monospace" name="Q1" value="-1" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q1" value="0" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q1" value="1" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q1" value="3" >
      &nbsp;&nbsp;非常滿意
    </div>
      </div>
      <div class="textcolumn">
      <?php
        $sql2="select * from 試題 where eid='{$_SESSION['rand'][$_SESSION['no']]}'";  //查找rand數組中每一個id對應的question
        $result2=$conn->query($sql2);  //存放mysql語句返回的結果集
        $_SESSION['testrandomed'] = $result2;
        $row = $_SESSION['testrandomed']->fetch_assoc();
        echo $_SESSION['no']+1;
        echo '. ';
        echo $row['exam'];
        echo '</br>';
        echo '<div class="textphoto">';
        echo '<img src="' . $row['img'] . '" / >';
        $_SESSION['no'] = $_SESSION['no']+1; 
        echo'</div>';
        ?>
      <div class="textsatisfy">
      </br>
      非常不滿意
      <input class="testbox" style="font-family:monospace" type="radio" style="color:black" name="Q2" value="-3" required>
      <input class="testbox" type="radio" style="font-family:monospace" name="Q2" value="-1" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q2" value="0" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q2" value="1" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q2" value="3" >
      &nbsp;&nbsp;非常滿意
    </div>
      </div>
      <div class="textcolumn">
      <?php
        $sql2="select * from 試題 where eid='{$_SESSION['rand'][$_SESSION['no']]}'";  //查找rand數組中每一個id對應的question
        $result2=$conn->query($sql2);  //存放mysql語句返回的結果集
        $_SESSION['testrandomed'] = $result2;
        $row = $_SESSION['testrandomed']->fetch_assoc();
        echo $_SESSION['no']+1;
        echo '. ';
        echo $row['exam'];
        echo '</br>';
        echo '<div class="textphoto">';
        echo '<img src="' . $row['img'] . '" / >';
        $_SESSION['no'] = $_SESSION['no']+1; 
        echo'</div>';
        ?>
      <div class="textsatisfy">
      </br>
      非常不滿意
      <input class="testbox" style="font-family:monospace" type="radio" style="color:black" name="Q3" value="-3" required>
      <input class="testbox" type="radio" style="font-family:monospace" name="Q3" value="-1" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q3" value="0" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q3" value="1" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q3" value="3" >
      &nbsp;&nbsp;非常滿意
    </div>
      </div>
      <div class="textcolumn">
      <?php
        $sql2="select * from 試題 where eid='{$_SESSION['rand'][$_SESSION['no']]}'";  //查找rand數組中每一個id對應的question
        $result2=$conn->query($sql2);  //存放mysql語句返回的結果集
        $_SESSION['testrandomed'] = $result2;
        $row = $_SESSION['testrandomed']->fetch_assoc();
        echo $_SESSION['no']+1;
        echo '. ';
        echo $row['exam'];
        echo '</br>';
        echo '<div class="textphoto">';
        echo '<img src="' . $row['img'] . '" / >';
        $_SESSION['no'] = $_SESSION['no']+1; 
        echo'</div>';
        ?>
      <div class="textsatisfy">
      </br>
      非常不滿意
      <input class="testbox" style="font-family:monospace" type="radio" style="color:black" name="Q4" value="-3" required>
      <input class="testbox" type="radio" style="font-family:monospace" name="Q4" value="-1" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q4" value="0" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q4" value="1" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q4" value="3" >
      &nbsp;&nbsp;非常滿意
    </div>
      </div>
      <div class="textcolumn">
      <?php
        $sql2="select * from 試題 where eid='{$_SESSION['rand'][$_SESSION['no']]}'";  //查找rand數組中每一個id對應的question
        $result2=$conn->query($sql2);  //存放mysql語句返回的結果集
        $_SESSION['testrandomed'] = $result2;
        $row = $_SESSION['testrandomed']->fetch_assoc();
        echo $_SESSION['no']+1;
        echo '. ';
        echo $row['exam'];
        echo '</br>';
        echo '<div class="textphoto">';
        echo '<img src="' . $row['img'] . '" / >';
        $_SESSION['no'] = $_SESSION['no']+1; 
        echo'</div>';
        ?>
      <div class="textsatisfy">
      </br>
      非常不滿意
      <input class="testbox" style="font-family:monospace" type="radio" style="color:black" name="Q5" value="-5" required>
      <input class="testbox" type="radio" style="font-family:monospace" name="Q5" value="-2" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q5" value="0" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q5" value="2" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q5" value="5" >
      &nbsp;&nbsp;非常滿意
    </div>
      </div>
      <input class="submitform" style="font-family:monospace" type="submit" name="submit" value="Next"></br>
    </div>
    </form>
</body>
<html>