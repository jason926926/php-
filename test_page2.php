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
      $Q1 = $_POST['Q1'];
      $Q2 = $_POST['Q2'];
      $Q3 = $_POST['Q3'];
      $Q4 = $_POST['Q4'];
      $Q5 = $_POST['Q5'];
      $fantasy=0;
      $ironic=0;
      $action=0;
      $comedy=0;
      $eomtion=0;
      $family=0;
      $friend=0;
      $adventure=0;
      
      $examcount = count($_SESSION['testarray']);
      for($j=0;$j<5;$j++){
      for($i=0;$i<$examcount;$i++){
        if($j==0){
          $randplus = $_SESSION['rand'][$i]+1;
          $sql="select Type from 試題 where '{$randplus}' = eid";
          $result=$conn->query($sql);  
          if($result == 'fantasy'){
            $fantasy = $fantasy + $Q1;
          }
          if($result == 'ironic'){
            $ironic = $ironic+$Q1;
          }
          if($result == 'action'){
            $action = $action+$Q1;
          }
          if($result == 'comedy'){
            $comedy = $comedy+$Q1;
          }
          if($result == 'emotion'){
            $eomtion = $eomtion+$Q1;
          }
          if($result == 'family'){
            $family = $family+$Q1;
          }
          if($result == 'friend'){
            $friend = $friend+$Q1;
          }
          if($result == 'adventure'){
            $adventure = $adventure+$Q1;
          }

        }
        if($j==1){
          $randplus = $_SESSION['rand'][$i]+1;
          $sql="select Type from 試題 where '{$randplus}' = eid";
          $result=$conn->query($sql);
          if($result == 'fantasy'){
            $fantasy = $fantasy+$Q2;
          }
          if($result == 'ironic'){
            $ironic = $ironic+$Q2;
          }
          if($result == 'action'){
            $action = $action+$Q2;
          }
          if($result == 'comedy'){
            $comedy = $comedy+$Q2;
          }
          if($result == 'emotion'){
            $eomtion = $eomtion+$Q2;
          }
          if($result == 'family'){
            $family = $family+$Q2;
          }
          if($result == 'friend'){
            $friend = $friend+$Q2;
          }
          if($result == 'adventure'){
            $adventure = $adventure+$Q2;
          }

        }
        if($j==2){
          $randplus = $_SESSION['rand'][$i]+1;
          $sql="select Type from 試題 where '{$randplus}' = eid";
          $result=$conn->query($sql);
          if($result == 'fantasy'){
            $fantasy = $fantasy+$Q3;
          }
          if($result == 'ironic'){
            $ironic = $ironic+$Q3;
          }
          if($result == 'action'){
            $action = $action+$Q3;
          }
          if($result == 'comedy'){
            $comedy = $comedy+$Q3;
          }
          if($result == 'emotion'){
            $eomtion = $eomtion+$Q3;
          }
          if($result == 'family'){
            $family = $family+$Q3;
          }
          if($result == 'friend'){
            $friend = $friend+$Q3;
          }
          if($result == 'adventure'){
            $adventure = $adventure+$Q3;
          }

        }
        if($j==3){
          $randplus = $_SESSION['rand'][$i]+1;
          $sql="select Type from 試題 where '{$randplus}' = eid";
          $result=$conn->query($sql);
          if($result == 'fantasy'){
            $fantasy = $fantasy+$Q4;
          }
          if($result == 'ironic'){
            $ironic = $ironic+$Q4;
          }
          if($result == 'action'){
            $action = $action+$Q4;
          }
          if($result == 'comedy'){
            $comedy = $comedy+$Q4;
          }
          if($result == 'emotion'){
            $eomtion = $eomtion+$Q4;
          }
          if($result == 'family'){
            $family = $family+$Q4;
          }
          if($result == 'friend'){
            $friend = $friend+$Q4;
          }
          if($result == 'adventure'){
            $adventure = $adventure+$Q4;
          }

        }
        if($j==4){
          $randplus = $_SESSION['rand'][$i]+1;
          $sql="select Type from 試題 where '{$randplus}' = eid";
          $result=$conn->query($sql);
          if($result == 'fantasy'){
            $fantasy = $fantasy+$Q5;
          }
          if($result == 'ironic'){
            $ironic = $ironic+$Q5;
          }
          if($result == 'action'){
            $action = $action+$Q5;
          }
          if($result == 'comedy'){
            $comedy = $comedy+$Q5;
          }
          if($result == 'emotion'){
            $eomtion = $eomtion+$Q5;
          }
          if($result == 'family'){
            $family = $family+$Q5;
          }
          if($result == 'friend'){
            $friend = $friend+$Q5;
          }
          if($result == 'adventure'){
            $adventure = $adventure+$Q5;
          }

        }
      }
    }

    $_SESSION['fantasy']=$fantasy;
    $_SESSION['ironic']=$ironic;
    $_SESSION['action']=$action;
    $_SESSION['comedy']=$comedy;
    $_SESSION['emotion']=$eomtion;
    $_SESSION['family']=$family;
    $_SESSION['friend']=$friend;
    $_SESSION['adventure']=$adventure;
    ?>
    <form action="test_page3.php" method="post">
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
      <input class="testbox" style="font-family:monospace" type="radio" style="color:black" name="Q6" value="-3" required>
      <input class="testbox" type="radio" style="font-family:monospace" name="Q6" value="-1" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q6" value="0" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q6" value="1" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q6" value="3" >
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
      <input class="testbox" style="font-family:monospace" type="radio" style="color:black" name="Q7" value="-3" required>
      <input class="testbox" type="radio" style="font-family:monospace" name="Q7" value="-1" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q7" value="0" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q7" value="1" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q7" value="3" >
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
      <input class="testbox" style="font-family:monospace" type="radio" style="color:black" name="Q8" value="-3" required>
      <input class="testbox" type="radio" style="font-family:monospace" name="Q8" value="-1" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q8" value="0" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q8" value="1" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q8" value="3" >
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
      <input class="testbox" style="font-family:monospace" type="radio" style="color:black" name="Q9" value="-3" required>
      <input class="testbox" type="radio" style="font-family:monospace" name="Q9" value="-1" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q9" value="0" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q9" value="1" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q9" value="3" >
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
      <input class="testbox" style="font-family:monospace" type="radio" style="color:black" name="Q10" value="-5" required>
      <input class="testbox" type="radio" style="font-family:monospace" name="Q10" value="-2" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q10" value="0" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q10" value="2" >
      <input class="testbox" type="radio" style="font-family:monospace" name="Q10" value="5" >
      &nbsp;&nbsp;非常滿意
    </div>
      </div>
      <input class="submitform" style="font-family:monospace" type="submit" name="submit" value="Next"></br>
    </div>
    </form>
</body>
<html>