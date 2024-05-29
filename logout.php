<?php

session_start();

unset($_SESSION['user']);
session_destroy();
setcookie("username", "", time()-3600);
header("location: login1.php");

?>