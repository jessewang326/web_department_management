<!DOCTYPE html>
<html>
<meta charset="utf-8">
<body>
<h3>Hi, secretary!</h3>
<h2>Add a new TA :</h2>
<form action="addTA.php" method="post" enctype="multipart/form-data">
TA ID: <input type="text" name="taID"><br>
Student ID: <input type="text" name="studentID"><br>
First Name: <input type="text" name="taFN"><br>
Last Name: <input type="text" name="taLN"><br>
<input type="radio" name="degree" value="master">Masters
<input type="radio" name="degree" value="phd">PhD<br>
Head Supervisor: <input type="text" name="headSupervisorID"><br>
<input type="submit" value="Add New TA">
</body>
</html>
