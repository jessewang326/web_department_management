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
?>
<h1>Add a new TA:</h1>
<ol>
<?php
   $profID = $_POST["profID"];
   $fn = $_POST["profFN"];
   $ln = $_POST["profLN"];
   $query = 'INSERT INTO prof VALUES("' . $fn . '","' . $ln . '","' . $profID . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "New professor was added!";
?>
</ol>
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
