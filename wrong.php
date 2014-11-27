<?php
  session_start();
  
  if(!isset($_SESSION['username'])){
    echo 'You must login to finish this action!.';
    $home_url = 'index2.php';
    header('Location: '.$home_url);
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
