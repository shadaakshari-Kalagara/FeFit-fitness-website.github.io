<?php

session_start();
$_SESSION['login']='false';
session_destroy();
unset($_SESSION['uname']);
$_SESSION['message']="You are logged out";
header("Location: index.php");

?>