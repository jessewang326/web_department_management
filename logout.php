<!--------------------------------------------------------------
*logout.php
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
*This file is the logout page of the system.
-------------------------------------------------------------->

<?php
session_start();

if(isset($_SESSION['username'])){
    $_SESSION = array();
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time()-3600);
    }
    
    //destory the session
    session_destroy();
}

//jump to the main page
$home_url = 'index2.php';
header('Location:'.$home_url);
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Western Teaching Assistant System</title>
</head>
<body>
<h1>Western Teaching Assistant System</h1>
</body>
</html>
