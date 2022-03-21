<?php 
session_start();

// delete session
unset($_SESSION["login"]);
session_unset();
session_destroy();
$_SESSION = [];

// delete cookie
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

header("Location: login.php");
?>