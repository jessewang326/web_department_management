
<!--------------------------------------------------------------
*login.php
*
*Computer Science 3319a
*
*Assignment 3
*
*Author: Jiaxi Wang
*
*Email: jwang724@uwo.ca
*
*This is a web-based TA management system.
*
*This file is the login page of the system.
-------------------------------------------------------------->

<?php
  //start the login session
  session_start(); 

  $error_msg = "";
  //if the user has not logged in
  if(!isset($_SESSION['username'])){
    if(isset($_POST['usrGrp'])){
      $usrGrp = $_POST['usrGrp'];
      $pwd = strtolower($_POST['pwd']);
      if(!empty($usrGrp)){
        //if logged in as Secretary, check the password
        if($usrGrp == 'Secretary' && $pwd == 'janice')
        {
          $_SESSION['username'] = $usrGrp;
          $home_url = 'secretary.php';
          header('Location: '.$home_url);
        }
        else if($usrGrp == 'Prof' && empty($pwd))
        {
          $_SESSION['username'] = $usrGrp;
          $home_url = 'prof.php';
          header('Location: '.$home_url);
        }
        else
        {
          $error_msg = 'invalid username or password.';
        }
      }
      else
      {    
        $error_msg = 'invalid username or password.';
      }
    }
  }
  else
  {
    //echo a welcome msg and a logout button
    echo '<p class="logon">You have not logged off the previous account!</p>';
    echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
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
    echo '<p class="error">'.$error_msg.'</p>';
    echo '<a href="index2.php"> Retry </a>';
  }
?>

</body>
</html>
