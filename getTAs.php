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
    echo $row["ta"];
    /////add ta pic later//////
    ///////echo '<img src="' . $row["petpicture"] . '" height="60" width="60">';
 }
 mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
 
