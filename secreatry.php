<?php
session_start();
if(isset($_SESSION['username'])){
  echo 'You are Logged as '.$_SESSION['username'].'<br/>';
  //echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Western Teaching Assistant System</title>
</head>
<body>
<a href="getTAs.php"> TA List </a>
<?php
  echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
?>
</body>
</html>
