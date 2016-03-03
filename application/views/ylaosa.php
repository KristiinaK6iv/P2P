<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>P2P kuulutused</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css"  type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/navbar-theme.css"  type="text/css" />
</head>


<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">

        <!--Logo-->


        <!--Menu Items-->
        <div>
            <a class="navbar-brand">P2Pkuulutused</a>
            <ul class="nav navbar-nav">
                <li class="all"><a href="<?php echo base_url(); ?>index.php/welcome/index">Avaleht</a></li>
                <li class="all"><a href="<?php echo base_url(); ?>index.php/welcome/kuulutused">Kuulutused</a></li>
                <li class="all"><a href="<?php echo base_url(); ?>index.php/welcome/minuKuulutused">Minu kuulutused</a></li>
                <li class="all"><a href="<?php echo base_url(); ?>index.php/welcome/KKK">KKK</a></li>
                <li class="all"><a href="<?php echo base_url(); ?>index.php/welcome/kontakt">Kontakt</a></li>
                <li><div class="social-wrap a">
  <button id="facebook">Sisene Facebookiga</button></div></li>  
              <li><div class="social-wrap a">
                <button id="idkaart">Sisene ID-kaardiga</div></button></div</li>

            </ul>
        </div>
    </div>
</nav>
