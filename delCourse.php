<!--------------------------------------------------------------
*delCourse.php
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
*This file deletes a course in the system.
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
<h1>Delete a course:</h1>
<?php
   $courseNO = $_POST["courseNO"];
   $query = 'DELETE FROM course WHERE courseNO = "' . $courseNO . '"';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "The course was deleted! <br>";
   mysqli_close($connection);
?>
</body>
<?php
  //give a course list page link
  echo '<h4><a href="getCourses.php"> Course List </a></h4>';
  echo '<a href="secretary.php"> Back </a> <br>';
  echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
?>
</html>
