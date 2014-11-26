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
<h1>The professor is the head-supervisor of:</h1>
<ol>
<?php
  $profFN = $_POST["profFN"];
  $profLN = $_POST["profLN"];
  $query = 'SELECT * FROM ta WHERE headSupervisorID = (SELECT profID FROM prof WHERE profFN =  "' . $profFN . '" AND profLN = "' . $profLN . '")';
  $result=mysqli_query($connection,$query);
  if (!$result) {
    die("database ta query failed.");
  }
  while ($row=mysqli_fetch_assoc($result)) {
    echo '<li>';
    echo $row["taFN"]. ' ' . $row["taLN"]. ' ' . $row["taID"]. ' ' . $row["degree"];
    echo '<img src="' . $row["image"] . '" height="60" width="60">';
  }
  mysqli_free_result($result);
?>
</ol>


<h1>The professor is the co-supervisor of:</h1>
<ol>
<?php
  $query = 'SELECT taID FROM coSupervisor WHERE profID = (SELECT profID FROM prof WHERE profFN =  "' . $profFN . '" AND profLN = "' . $profLN . '")';
  $taIDs=mysqli_query($connection,$query);
  if (!$taIDs) {
    die("database ta query failed.");
  }
  while ($taID=mysqli_fetch_assoc($taIDs)) {
    $query = 'SELECT  * FROM ta WHERE taID = "' . $taID["taID"] . '"';
    $result=mysqli_query($connection,$query);
    if (!$result) {
    die("database ta query failed.");
    }
    while ($row=mysqli_fetch_assoc($result)) {
      echo '<li>';
      echo $row["taFN"]. ' ' . $row["taLN"]. ' ' . $row["taID"]. ' ' . $row["degree"];
      echo '<img src="' . $row["image"] . '" height="60" width="60">';
    }
    mysqli_free_result($result);
  }
  mysqli_free_result($taIDs);
  mysqli_close($connection);
?>
</ol>
</body>
<?php
  echo '<a href="prof.php"> Back </a> <br>';
  echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
?>
</html>
 
