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
      $Q1 = $_POST['Q11'];
      $Q2 = $_POST['Q12'];
      $Q3 = $_POST['Q13'];
      $Q4 = $_POST['Q14'];
      $Q5 = $_POST['Q15'];
      $fantasy=$_SESSION['fantasy'];
      $ironic=$_SESSION['ironic'];
      $action=$_SESSION['action'];
      $comedy=$_SESSION['comedy'];
      $eomtion=$_SESSION['emotion'];
      $family=$_SESSION['family'];
      $friend=$_SESSION['friend'];
      $adventure=$_SESSION['adventure'];
      
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
    unset($_SESSION['fantasy']);
    unset($_SESSION['ironic']);
    unset($_SESSION['action']);
    unset($_SESSION['comedy']);
    unset($_SESSION['emotion']);
    unset($_SESSION['family']);
    unset($_SESSION['friend']);
    unset($_SESSION['adventure']);
    $_SESSION['fantasy']=$fantasy;
    $_SESSION['ironic']=$ironic;
    $_SESSION['action']=$action;
    $_SESSION['comedy']=$comedy;
    $_SESSION['emotion']=$eomtion;
    $_SESSION['family']=$family;
    $_SESSION['friend']=$friend;
    $_SESSION['adventure']=$adventure;
    ?>
    <?php
    $fantasy=$_SESSION['fantasy'];
    $ironic=$_SESSION['ironic'];
    $action=$_SESSION['action'];
    $comedy=$_SESSION['comedy'];
    $eomtion=$_SESSION['emotion'];
    $family=$_SESSION['family'];
    $friend=$_SESSION['friend'];
    $adventure=$_SESSION['adventure'];
    $a=array($fantasy,$ironic,$action,$comedy,$eomtion,$family,$friend,$adventure);
    rsort($a);
    $chara = "";
    echo $a[0];
    if($a[0]==$fantasy){
      if($a[1]==$action){
        $chara = "FA";

      }else
      if($a[1]==$comedy){
        $chara = "FC";

      }
      $chara = "F";
    }else if($a[0]==$ironic){
      if($a[1]==$friend){
        if($a[2]==$action){
          $chara = "IDA";

        }else
        if($a[2]==$fantasy){
          $chara = "IDF";

        }
        $chara = "ID";

      }
      if($a[1]==$adventure){
        if($a[2]==$action){
          $chara = "IVA";

        }else
        if($a[2]==$fantasy){
          $chara = "IVF";

        }else
        $chara = "IV";

      }
      if($a[1]==$family && $a[2]==$adventure){
        $chara = "IYV";

      }
      $chara = "I";
    }else if($a[0]==$action){
      if($a[1]==$friend){
        $chara = "AD";

      }else
      if($a[1]==$ironic){
        $chara = "AI";

      }
        $chara = "A";

    }else if($a[0]==$comedy){
      if($a[1]==$friend){
        if($a[2]==$ironic){
          $chara = "CDI";

        }
        if($a[2]==$adventure){
          $chara = "CDV";

        }
        $chara = "CD";

      }
      if($a[1]==$eomtion){
        $chara = "CE";

      }
      if($a[1]==$ironic){
        $chara = "CI";

      }
      if($a[1]==$adventure){
        $chara = "CV";

      }
        $chara = "C";

    }else if($a[0]==$eomtion){
      if($a[1]==$friend){
        $chara = "ED";

      }
        $chara = "E";

    }else if($a[0]==$adventure){
      if($a[1]==$fantasy){
        if($a[2]==$action){
          $chara = "VFA";

        }
        $chara = "VF";

      }
      if($a[1]==$ironic){
        $chara = "VI";

      }
      if($a[1]==$action){
        $chara = "VA";

      }
      if($a[1]==$comedy){
        $chara = "VC";

      }
        $chara = "V";

    }else if($a[0]==$family){
      if($a[1]==$adventure){
        if($a[2]==$eomtion){
          $chara = "YVE";

        }
        if($a[2]==$ironic){
          $chara = "YVI";

        }
        $chara = "YV";

      }
      if($a[1]==$ironic){
        $chara = "YI";

      }
      if($a[1]==$comedy){
        $chara = "YC";

      }
      $chara = "Y";

    }
    $_SESSION['chara'] = $chara;
    ?>
  
  <div class="endpage">
    <div class="endcolumn">
    <?php
    echo 'Dear New Kid, ';
    echo $_SESSION['name'];
    echo '</br>';
    echo 'We Recommend Watching...';
    echo '</br>';
    ?>
    </div>
    <div class="endrec">
    <?php
        $sql="select * from episode where Chara ='{$_SESSION['chara']}'";  //查找rand數組中每一個id對應的question
        $result=$conn->query($sql);  //存放mysql語句返回的結果集

        $row = $result->fetch_assoc();
        echo '<div class="endphoto">';
        echo '<img src="' . $row['image'] . '" / >';
        echo '</div>';
        echo '<div class="endtext">';
        echo '<div class="endtext1">';
        echo $row['season'];
        echo '<br>';
        echo '</div>';
        echo '<div class="endtext2">';
        echo $row['sename'];
        echo '<br>';
        echo '</div>';
        echo '<div class="endtext3">';
        echo $row['description'];
        echo '<br>';
        echo '</div>';
        echo '</div>';
        ?>
        

        </div>
        <div class="endtext4">
        <form>
        <a href="test.php">
        <input class="submitform" type="button" value="Try Again">
        </a>
        </form>
  </div>
  </div>
    

</body>
<html>