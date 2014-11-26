<?php
session_start();
if(isset($_SESSION['username'])){
  echo 'Hello, '.$_SESSION['username'].'!<br/>';
  //echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
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
<ol>
<?php
   $taID = $_POST["taID"];
   $fn = $_POST["taFN"];
   $ln = $_POST["taLN"];
   $degree = $_POST["degree"]; 
   $query = 'UPDATE ta SET taFN = "' . $fn . '", taLN = "' . $ln . '", degree = "' . $degree . '" WHERE taID = "' . $taID . '"';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "TA was modified!";
?>
</ol>
</body>
<?php
  echo '<a href="secretary.php"> Back </a> <br>';
  echo '<a href="logout.php"> Log Out('.$_SESSION['username'].')</a>';
?>
</html>
