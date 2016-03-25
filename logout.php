<?php

session_start();
session_unset();
$_SESSION['name']=NULL;
$_SESSION['email']=NULL;

session_destroy();

 header('location: index.php');  

?>