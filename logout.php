<?php

session_start();
session_unset();
$_SESSION['name']=NULL;
$_SESSION['email']=NULL;

session_destroy();

// Checking in which page we are
if (strpos($_SERVER['HTTP_REFERER'], 'minuKuulutused') !== false) {
	 header('Location:http://localhost/P2P/index.php/welcome/minuKuulutusedLoggedOut');
  		exit;
}elseif(strpos($_SERVER['HTTP_REFERER'], 'enMinuKuulutused') !== false) {
	 header('Location:http://localhost/P2P/index.php/welcome/enMinuKuulutusedLoggedout');
  		exit;
	}else{
  header('Location:'.$_SERVER['HTTP_REFERER']);
  exit;
}

 
 

?>