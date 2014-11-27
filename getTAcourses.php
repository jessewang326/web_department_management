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
  $taID = $_POST["taID"];
  $count = 0;
  $query = 'SELECT * FROM assign WHERE taID = "' . $taID . '"';
  $result=mysqli_query($connection,$query);
  if (!$result) {
    die("database ta query failed.");
  }
  while ($row=mysqli_fetch_assoc($result)) {
    echo '<li>';
    echo $row["courseNO"] . ' ' . $row["year"] . ' ' . $row["term"];
    $count = $count + 1;
  }
  mysqli_free_result($result);
  $query = 'SELECT degree FROM ta WHERE taID = "' . $taID . '"';
  $result=mysqli_query($connection,$query);
  if (!$result) {
    die("database ta query failed.");
  }
  $degree = $row["degree"];
  mysqli_free_result($result);
  
  echo '<br><br>';

  if($degree == "PhD"){
    echo $taID . ' is a PhD student which has '. $count . ' courses in total.'; 
    if($count >= 8){
      echo $taID . 'is not allowed for more courses';
    }
  }
  else{
    echo $taID . ' is a Masters student which has '. $count . ' courses in total.'; 
    if($count >= 3){
      echo $taID . 'is not allowed for more courses';
    }
  }
  mysqli_close($connection);
?>
</ol>

</body>
<?php
  echo '<a href="prof.php"> Back </a> <br>';
  echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
?>
</html>
 
