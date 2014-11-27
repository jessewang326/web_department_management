<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Western Teaching Assistant System</title>
</head>
<body>
<h1>Western Teaching Assistant System</h1>
</head>
<?php
$dbhost = "localhost";
$dbuser = trim($_POST["userID"]);
$dbpass = $_POST["pwd"];
$usrGrp = $_POST["usrGrp"];
$dbname = "jwang724tadb";
$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
     die("database connection failed :" .
     mysqli_connect_error() .
     "(" . mysqli_connect_errno() . ")"
         );
    }
else if($usrGrp == "Prof"){
    include 'prof.php';
}
else {
    include 'secretary.php';
}
?>
