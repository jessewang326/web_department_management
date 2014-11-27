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
<h1>Assign a supervisor to a TA:</h1>
<?php
  $profID = $_POST["profID"];
  $taID = $_POST["taID"];
  $type = $_POST["suType"];
  if($type == 'head'){
    $query = 'UPDATE ta SET headSupervisorID = (SELECT profID FROM prof WHERE profID LIKE "' . $profID . '%") WHERE taID = "' . $taID . '"';
  }
  else{
    $query = 'INSERT INTO coSupervisor VALUES("' . $taID . '", (SELECT profID FROM prof WHERE profID LIKE "' . $profID . '%"))';
  }

  if(!mysqli_query($connection, $query)) {
    die("Error: insert failed" . mysqli_error($connection));
  }
  echo "The supervisor is assgined to the TA!";
?>
<br>
<?php
   mysqli_close($connection);
?>
</body>
<?php
  echo '<a href="secretary.php"> Back </a> <br>';
  echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
?>
</html>
