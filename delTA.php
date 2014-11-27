<?php
session_start();
  if($_SESSION['username'] == "Secretary"){
    echo 'Hello, '.$_SESSION['username'].'!<br/>';
  }
  else
  {
     $home_url = 'wrong.php';
      header('Location: '.$home_url);
  }
?>


<!DOCTYPE html>
<html>
<meta charset="utf-8">
<body>
<?php
  include 'connectdb.php';
?>
<h1>Add a new TA:</h1>
<?php
  $taID = $_POST["taID"];
  $query = 'DELETE FROM ta WHERE taID = "' . $taID . '"';
  if (!mysqli_query($connection, $query)) {
    die("Error: insert failed" . mysqli_error($connection));
  }
  echo "TA was deleted!<br>";
?>
<?php
   mysqli_close($connection);
?>
</body>
<?php
  echo '<a href="secretary.php"> Back </a> <br>';
  echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
?>
</body>
</html>
</html>

