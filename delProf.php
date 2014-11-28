<!--------------------------------------------------------------
*delProfs.php
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
*This file deletes a given professor in the system.
-------------------------------------------------------------->


<?php
session_start();
  if($_SESSION['username'] == "Secretary"){
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
<meta charset="utf-8">
<body>
<?php
  include 'connectdb.php';
?>
<h1>Add a new TA:</h1>
<?php
  $profID = $_POST["profID"];
  $query = 'DELETE FROM prof WHERE profID = "' . $profID . '"';
  if (!mysqli_query($connection, $query)) {
    die("Error: insert failed" . mysqli_error($connection));
  }
  echo "The professor was deleted!<br>";
  mysqli_close($connection);
?>
</body>
<?php
  echo '<a href="secretary.php"> Back </a> <br>';
  echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
?>
</body>
</html>

