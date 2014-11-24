<!DOCTYPE html>
<html>
<meta charset="utf-8">
<body>
<h1>Assign a TA to a course:</h1>
<ol>
<?php
   $taID = $_POST["taID"];
   $stuID = $_POST["studentID"];
   $fn = $_POST["taFN"];
   $ln = $_POST["taLN"];
   $degree = $_POST["degree"];
   $headSupID = $_POST["headSupervisorID"];
   $query = 'INSERT INTO ta VALUES("' . $fn . '","' . $ln . '","' . $stuID . '","' . $taID . '","' . $degree . '","' . $headSupID . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "New TA was added!";
?>
</ol>
</body>
</html>
