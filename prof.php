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
<tr><td>TA's First Name: </td><td><input type="text" name="profFN"></td></tr>
<tr><td>TA's Last Name: </td><td><input type="text" name="profLN"></td></tr>
</table>
<input type="submit" value="getAssignedStu">
</form>
