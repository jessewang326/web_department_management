<!-- Remember to add user check for all classes !!!!!!! -->
<!--------------------------------------------------------------
*prof.php
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
*This file is the system's professor's main page.
-------------------------------------------------------------->

<?php
session_start();
  if($_SESSION['username'] == "Prof"){
    echo 'Hello, '.$_SESSION['username'].'<a href="logout.php">(Log out)</a>!<br/>';
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


<!-- give a prof list link for the user -->
<h4><a href="getProfs.php"> Professor List </a></h4>

<!-- get the assigned students of a given professor -->
<h4>List the students of a professor:</h4>
<form action="getAssignedStu.php" method="post" enctype="multipart/form-data">
<table>
<tr><td>Professor's First Name: </td><td><input type="text" name="profFN"></td></tr>
<tr><td>Professor's Last Name: </td><td><input type="text" name="profLN"></td></tr>
</table>
<input type="submit" value="getAssignedStu">
</form>


<!-- give a class list link for the user -->
<h4><a href="getClasses.php"> Course List </a></h4>

<!-- get the assigned TAs of a given course -->
<h4> List the TAs of a Course:</h4>
<form action="getCourseTAs.php" method="post" enctype="multipart/form-data">
<table>
<tr><td>CourseNO: </td><td><input type="text" name="courseNO"></td></tr>
<tr><td>Year: </td><td><input type="text" name="year"></td></tr>
</table>
<input type="radio" name="term" value="fall">Fall
<input type="radio" name="term" value="spring">Spring
<input type="radio" name="term" value="summer">Summer<br>
<br>
<input type="submit" value="getCourseTAs">
</form>


<!-- give a TAs list link for the user -->
<h4><a href="getTAs.php"> TA List </a></h4>

<!-- get the assigned courses of a given TA -->
<h4>List a TA's courses:</h4>
<form action="getTAcourses.php" method="post" enctype="multipart/form-data">
TA's ID: <input type="text" name="taID"><br>
<input type="submit" value="getTAcourses">
</form>
</body>
</html>
