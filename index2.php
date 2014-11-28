<!--------------------------------------------------------------
*index2.php
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
*This file is the main page of the system.
-------------------------------------------------------------->


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
<h1>Western Teaching Assistant System</h1>

<!--Secretaty Login in-->
<form action="login.php" method="post" enctype="multipart/form-data">
<p>Login as a secretary:</p>
<input type="radio" name="usrGrp" value="Secretary">Secretary<br>
<!--Password needed for a sercretary-->
Password: <input type="password" name="pwd"><br>
<input type="submit" value="Login">

<!--Professor Login in-->
<p>Login as a professor:</p>
<input type="radio" name="usrGrp" value="Prof">Professor<br>
<input type="submit" value="Login">
</form>
</body>
</html>
