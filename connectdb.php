<!--------------------------------------------------------------
*connectdb.php
*
*Computer Science 3319a
*
*Assignment 3
*
*Author: Jiaxi Wang
*
*Email: jwang724@uwo.ca
*
*This is a web-based TA management system.
*
*This file connects the database for the system.
-------------------------------------------------------------->

<?php
//database login setting
$dbhost = "localhost";
$dbuser= "root";
$dbpass = "cs3319";
$dbname = "jwang724tadb";
$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);

//print the error msg
if (mysqli_connect_errno()) {
     die("database connection failed :" .
     mysqli_connect_error() .
     "(" . mysqli_connect_errno() . ")"
         );
    }
?>
