<?php

session_start();
session_unset();
  $_SESSION['name']=NULL;

session_destroy();

 header('location: index.php');  

?>