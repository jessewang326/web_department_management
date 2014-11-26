<?php
  session_start();
?>

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

<h1>Here are all the Courses:</h1>
<ol>
<?php
 $query = 'SELECT * FROM course';
 $result=mysqli_query($connection,$query);
 if (!$result) {
    die("database ta query failed.");
 }
 while ($row=mysqli_fetch_assoc($result)) {
    echo '<li>';
    echo $row["courseNO"]. ' ' . $row["courseName"];
 }
 mysqli_free_result($result);
?>
</ol>

<h1>Here are all TAs and their assigned Courses:</h1>
<ol>
<?php
 $query = 'SELECT * FROM assign';
 $result=mysqli_query($connection,$query);
 if (!$result) {
    die("database ta query failed.");
 }
 while ($row=mysqli_fetch_assoc($result)) {
    echo '<li>';
    echo $row["taID"] . ' ' . $row["courseNO"] . ' ' . $row["year"] . ' ' . $row["term"] . ' ' . $row["students"];
 }
 mysqli_free_result($result);
 mysqli_close($connection);
?>
</ol>

</body>
<?php
  echo '<a href="secretary.php"> Back </a> <br>';
  echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
?>
</html>
 
