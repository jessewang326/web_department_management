<?php
  session_start(); 
//  echo '<p> start </p>';

  $error_msg = "";
  if(!isset($_SESSION['username'])){
//    echo '<p> no username </p>';
    
    if(isset($_POST['usrGrp'])){

//      echo '<p> usrGrp </p>';

      $usrGrp = $_POST['usrGrp'];
//      echo '<p>'.$usrGrp.'</p>';
      $pwd = strtolower($_POST['pwd']);
//      echo '<p>'.$pwd.'</p>';
      if(!empty($usrGrp)){
        if($usrGrp == 'Secretary' && $pwd == 'janice')
        {
//          echo '<p> sec </p>';
          $_SESSION['username'] = $usrGrp;
          $home_url = 'secretary.php';
          header('Location: '.$home_url);
        }
        else if($usrGrp == 'Prof' && empty($pwd))
        {
          echo '<p> prof </p>';
          $_SESSION['username'] = $usrGrp;
          $home_url = 'prof.php';
          header('Location: '.$home_url);
        }
        else
        {
//          echo '<p> invalid 1 </p>';
          $error_msg = 'invalid username or password.';
        }
      }
      else
      {    
//        echo '<p> invalid 2 </p>';
        $error_msg = 'invalid username or password.';
      }
    }
  }
  else
  {
    echo '<p class="logon">You have not logged off the previous account!</p>';
    echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
//    $home_url = 'loged.php';
//    header('Location: '.$home_url);
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Western Teaching Assistant System</title>
</head>
<body>
<?php
  if(!isset($_SESSION['username'])){
//    echo '<p> 1 </p>';
    echo '<p class="error">'.$error_msg.'</p>';
    echo '<a href="index2.php"> Retry </a>';
  }
?>

</body>
</html>
