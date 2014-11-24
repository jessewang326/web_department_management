<!DOCTYPE html>
<html>
<meta charset="utf-8">
<body>
<h1>Add a new course:</h1>
<ol>
<?php
   $courseNO = $_POST["courseNO"];
   $courseName = $_POST["courseName"];
   $query = 'INSERT INTO course VALUES("' . $courseNO . '","' . $courseName . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "New course was added!";
?>
</ol>
</body>
</html>
