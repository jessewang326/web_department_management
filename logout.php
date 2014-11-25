<?php
session_start();

if(isset($_SESSION['username'])){
    $_SESSION = array();
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time()-3600);
    }
    session_destroy();
}
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
