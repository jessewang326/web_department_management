<!DOCTYPE html>
<html>
<meta charset="utf-8">
<body>
<h1>Delete a course:</h1>
<ol>
<?php
   $courseNO = $_POST["courseNO"];
   $query = 'DELETE FROM course WHERE courseNO = ' . $courseNO;
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "New course was added!";
?>
</ol>
</body>
</html>
