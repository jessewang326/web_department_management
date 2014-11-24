<!DOCTYPE html>
<html>
<meta charset="utf-8">
<body>
<h1>Add a new Porf:</h1>
<ol>
<?php
   $profFN = $_POST["profFN"];
   $profLN = $_POST["profLN"];
   $profID = $_POST["profID"];
   $query = 'INSERT INTO prof VALUES("' . $profFN . '","' . $profLN . '","' . $profID . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "New prof was added!";
?>
</ol>
</body>
</html>
