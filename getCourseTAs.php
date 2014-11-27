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

<h1>Here are all the classes:</h1>
<ol>
<?php
  $courseNO = $_POST["courseNO"];
  $year = $_POST["year"];
  $term = $_POST["term"];
  $query = 'SELECT * FROM assign WHERE courseNO = "' . $courseNO . '" AND year = "' . $year . '" AND term = "' . $term . '"';
  $result=mysqli_query($connection,$query);
  if (!$result) {
    die("database ta query failed.");
  }
  while ($row=mysqli_fetch_assoc($result)) {
    echo '<li>';
    echo $row["courseNO"] . ' ' . $row["year"] . ' ' . $row["term"]. ' ' . $row["taID"]. ' ' . $row["students"];
  }
  mysqli_free_result($result);
  mysqli_close($connection);
?>
</ol>

</body>
<?php
  echo '<a href="prof.php"> Back </a> <br>';
  echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
?>
</html>
 
