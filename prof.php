<!-- Remember to add user check for all classes !!!!!!! -->


<?php
session_start();
if(isset($_SESSION['username'])){
  echo 'Hello, '.$_SESSION['username'].'!<a href="logout.php"> Log Out</a><br/>';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Western Teaching Assistant System</title>
</head>
<body>


<h4><a href="getProfs.php"> Professor List </a></h4>

<h4>List the students of a professor:</h4>
<form action="getAssignedStu.php" method="post" enctype="multipart/form-data">
<table>
<tr><td>Professor's First Name: </td><td><input type="text" name="profFN"></td></tr>
<tr><td>Professor's Last Name: </td><td><input type="text" name="profLN"></td></tr>
</table>
<input type="submit" value="getAssignedStu">
</form>


<h4><a href="getClasses.php"> Course List </a></h4>
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

<h4><a href="getTAs.php"> TA List </a></h4>
<h4>List a TA's courses:</h4>
<form action="getTAcourses.php" method="post" enctype="multipart/form-data">
TA's ID: <input type="text" name="taID"><br>
<input type="submit" value="getTAcourses">
</form>
</body>
</html>
