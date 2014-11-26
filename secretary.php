<?php
session_start();
if(isset($_SESSION['username'])){
  echo 'Hello, '.$_SESSION['username'].'!<br/>';
  //echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Western Teaching Assistant System</title>
</head>
<body>
<h4><a href="getTAs.php"> TA List </a></h4>


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


<h4>TA Modification(All fields must be filled):</h4>
<form action="modifyTA.php" method="post" enctype="multipart/form-data">
TA's ID: <input type="text" name="taID"><br>
TA's student ID: <input type="text" name="studentID"><br>
TA's First Name: <input type="text" name="taFN"><br>
TA's Last Name: <input type="text" name="taLN"><br>
<input type="radio" name="degree" value="Masters">Masters    
<input type="radio" name="degree" value="PhD">PhD<br>
<input type="submit" value="modifyTA">
</form>

<h4>Delete a TA:</h4>
<form action="delTA.php" method="post" enctype="multipart/form-data">
TA's ID: <input type="text" name="taID"><br>
<input type="submit" value="delTA">
</form>

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


<?php
  echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
?>
</body>
</html>
