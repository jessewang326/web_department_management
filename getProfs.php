<!--------------------------------------------------------------
*getProfs.php
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
*This file is the list of all the professors in the system.
-------------------------------------------------------------->


<?php
session_start();
  if(isset($_SESSION['username']))
  {
    echo 'Hello, '.$_SESSION['username'].'!<br/>';
  }
  else
  {
     $home_url = 'wrong.php';
      header('Location: '.$home_url);
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
include 'connectdb.php';
?>
<h1>Here are all the TAs:</h1>
<ol>
<?php
 $query = 'SELECT * FROM prof';
 $result=mysqli_query($connection,$query);
 if (!$result) {
    die("database ta query failed.");
 }
 while ($row=mysqli_fetch_assoc($result)) {
    echo '<li>';
    echo $row["profFN"]. ' ' . $row["profLN"] . ' ' . $row["profID"];
 }
 mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>

<?php
  if($_SESSION['username']=="Prof"){
  echo '<a href="prof.php"> Back </a> <br>';
  }
  else{
  echo '<a href="secretary.php"> Back </a> <br>';
  }
  echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
?>
</html>
 
