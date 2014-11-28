<!--------------------------------------------------------------
*secretary.php
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
*This file is the system's secretary main page.
-------------------------------------------------------------->

<?php
  session_start();
  if($_SESSION['username'] == "Secretary"){
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

<!-- the layout setting -->
<style type="text/css">
div#container{width: auto;  position:relative;  float:right;}
div#ta{width:400px;  float:left;  background:#ccc;}
div#prof{width:400px;  float:left;  background:#eee;}
div#course{width:400px;  float:left;  background:#ccc;}
</style>
</head>
<body>


<!-- the TA-related functionalities column -->
<div id="ta">

<!-- give a TA list page link -->
<h4><a href="getTAs.php"> TA List </a></h4>

<!-- add a TA into the system -->
<h4> Add a New TA:</h4>
<form action="addTA.php" method="post" enctype="multipart/form-data">
<table>
<tr><td>TA's ID: </td><td><input type="text" name="taID"></td></tr>
<tr><td>TA's student ID: </td><td><input type="text" name="studentID"></td></tr>
<tr><td>TA's First Name: </td><td><input type="text" name="taFN"></td></tr>
<tr><td>TA's Last Name: </td><td><input type="text" name="taLN"></td></tr>
<tr><td>TA's Head Supervisor's ID: </td><td><input type="text" name="headSupervisorID"></td></tr>
</table>
<input type="radio" name="degree" value="Masters">Masters    
<input type="radio" name="degree" value="PhD">PhD<br>
<input type="file" name="file" id="file"><br>
<br>
<input type="submit" value="addTA">
</form>


<!-- modify the imformation if a given TA in the system -->
<h4>TA Modification(All fields must be filled):</h4>
<form action="modifyTA.php" method="post" enctype="multipart/form-data">
<table>
<tr><td>TA's ID: </td><td><input type="text" name="taID"></td></tr>
<tr><td>TA's student ID: </td><td><input type="text" name="studentID"></td></tr>
<tr><td>TA's First Name: </td><td><input type="text" name="taFN"></td></tr>
<tr><td>TA's Last Name: </td><td><input type="text" name="taLN"></td></tr>
</table>
<input type="radio" name="degree" value="Masters">Masters    
<input type="radio" name="degree" value="PhD">PhD<br>
<input type="submit" value="modifyTA">
</form>

<!-- delete a TA from the system -->
<h4>Delete a TA:</h4>
<form action="delTA.php" method="post" enctype="multipart/form-data">
TA's ID: <input type="text" name="taID"><br>
<input type="submit" value="delTA">
</form>
</div>



<!-- the professor-related functionalities column -->
<div id="prof">

<!-- give a professor list page link -->
<h4><a href="getProfs.php"> Professor List </a></h4>

<!-- add a professor into the system -->
<h4> Add a New Prof:</h4>
<form action="addProf.php" method="post" enctype="multipart/form-data">
<table>
<tr><td>Professor's ID: </td><td><input type="text" name="profID"></td></tr>
<tr><td>Professor's First Name: </td><td><input type="text" name="profFN"></td></tr>
<tr><td>Professor's Last Name: </td><td><input type="text" name="profLN"></td></tr>
</table>
<br>
<input type="submit" value="addProf">
</form>

<!-- delete a TA from the system -->
<h4>Delete a professor:</h4>
<form action="delProf.php" method="post" enctype="multipart/form-data">
TA's ID: <input type="text" name="profID"><br>
<input type="submit" value="delProf">
</form>


<!-- Assign a head/co supervisor to a TA -->
<h4>Assign a supervisor to a TA:</h4>
<form action="assignProf.php" method="post" enctype="multipart/form-data">
<table>
<tr><td>Professor's ID: </td><td><input type="text" name="profID"></td></tr>
<tr><td>TA's ID: </td><td><input type="text" name="taID"></td></tr>
</table>
<input type="radio" name="suType" value="head">Head Supervisor   
<input type="radio" name="suType" value="co">Co-Supervisor<br>
<input type="submit" value="assignProf">
</form>
</div>


<!-- the course-related functionalities column -->
<div id="course">

<!-- give a course list page link -->
<h4><a href="getCourses.php"> Course List </a></h4>

<!-- add a professor into the system -->
<h4> Add a New Course:</h4>
<form action="addCourse.php" method="post" enctype="multipart/form-data">
<table>
<tr><td>CourseNO: </td><td><input type="text" name="courseNO"></td></tr>
<tr><td>Course Name: </td><td><input type="text" name="courseName"></td></tr>
</table>
<br>
<input type="submit" value="addCourse">
</form>

<!-- delete a course from the system -->
<h4>Delete a Course:</h4>
<form action="delCourse.php" method="post" enctype="multipart/form-data">
CourseNO: <input type="text" name="courseNO"><br>
<input type="submit" value="delCourse">
</form>
</div>


</body>
</html>
