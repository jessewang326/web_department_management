<!--------------------------------------------------------------
*wrong.php
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
*This file is the error page of the system.
-------------------------------------------------------------->

<?php
  session_start();
  
  if(!isset($_SESSION['username'])){
    echo 'You must login to finish this action!';
    echo '<a href="index2.php"> Log in </a> <br>';
  }
  else{
    echo 'your user group does not has the permission to finish this action.';

    if($_SESSION['username'] == 'Prof'){
      echo '<a href="prof.php"> Back </a> <br>';
    }
    else{
      echo '<a href="logout.php"> Back </a> <br>';
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Western Teaching Assistant System</title>
</head>
</html>
