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
<h1>Here are all the TAs:</h1>
<ol>
<?php
 $query = 'SELECT * FROM ta';
 $result=mysqli_query($connection,$query);
 if (!$result) {
    die("database ta query failed.");
 }
 while ($row=mysqli_fetch_assoc($result)) {
    echo '<li>';
    echo $row["taFN"]. ' ' . $row["taLN"]. ' ' . $row["taID"];
    /////add ta pic later//////
    echo '<img src="' . $row["image"] . '" height="60" width="60">';
 }
 mysqli_free_result($result);
 mysqli_close($connection);
?>
</ol>
</body>
<?php
  if($_SESSION['username'] == "Prof")
  {
    echo '<a href="prof.php"> Back </a> <br>';
  }
  else{
    echo '<a href="secretary.php"> Back </a> <br>';
  }

  echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
?>
</html>
 
