<?php
session_start();
if(isset($_SESSION['username'])){
  echo 'You are Logged as '.$_SESSION['username'].'<br/>';
  echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
}
?>
