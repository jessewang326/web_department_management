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
<form action="login.php" method="post" enctype="multipart/form-data">
<p>Login as a secretary:</p>
<input type="radio" name="usrGrp" value="Secretary">Secretary<br>
Password: <input type="password" name="pwd"><br>
<input type="submit" value="Login">
<p>Login as a professor:</p>
<input type="radio" name="usrGrp" value="Prof">Professor<br>
<input type="submit" value="Login">
</form>
</body>
</html>
