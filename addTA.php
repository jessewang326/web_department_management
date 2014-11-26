<?php
session_start();
if(isset($_SESSION['username'])){
  echo 'Hello, '.$_SESSION['username'].'!<br/>';
}
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<body>
<?php
  include 'connectdb.php';
  include 'upload_file.php';
?>
<h1>Add a new TA:</h1>
<?php
   $taID = $_POST["taID"];
   $stuID = $_POST["studentID"];
   $fn = $_POST["taFN"];
   $ln = $_POST["taLN"];
   $degree = $_POST["degree"];
   $headSupID = $_POST["headSupervisorID"];
   $query = 'INSERT INTO ta VALUES("' . $taID . '","' . $stuID . '","' . $fn . '","' . $ln . '","' . $degree . '", (SELECT profID FROM prof WHERE profID LIKE "' . $headSupID . '%"),"' . $taPic .'")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "New TA was added!";
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
