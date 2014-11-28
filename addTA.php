<!--------------------------------------------------------------
*addTA.php
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
*This file add a new TA into the system.
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
  include 'upload_file.php';
?>
<h1>Add a new TA:</h1>
<?php
   $taID = $_POST["taID"];
   $stuID = $_POST["studentID"];
   $fn = $_POST["taFN"];
   $ln = $_POST["taLN"];
   $degree = $_POST["degree"];
   $headSupID = $_POST["headSupervisorID"];
   $query = 'INSERT INTO ta VALUES("' . $taID . '","' . $stuID . '","' . $fn . '","' . $ln . '","' . $degree . '", (SELECT profID FROM prof WHERE profID LIKE "' . $headSupID . '%"),"' . $taPic .'")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "New TA was added!";
?>
<?php
   mysqli_close($connection);
?>
</body>
<?php
  echo '<a href="secretary.php"> Back </a> <br>';
  echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
?>
</body>
</html>
</html>
