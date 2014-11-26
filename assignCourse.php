<!DOCTYPE html>
<html>
<meta charset="utf-8">
<body>
<h1>Assign a TA to a course:</h1>
<ol>
<?php
   $taID = $_POST["taID"];
   $courseNO = $_POST["courseNO"];
   $year = $_POST["year"];
   $term = $_POST["term"];
   $students = $_POST["students"];
   $query = 'INSERT INTO ta VALUES("' . $taID . '","' . $courseNO . '","' . $year . '","' . $term . '","' . $students . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "The TA is assgined to the course!";
?>
</ol>
</body>
</html>
