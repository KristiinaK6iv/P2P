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
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/navbar-theme2.css"  type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/load_more.js"></script> <!--skript KKK lehel-->
    <script src="<?php echo base_url(); ?>js/fb2.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> <!--font-->
</head>


<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">

        <!--Menu Items-->
        <div>
            <ul class="nav navbar-nav">
            	<li><a href="" class="navbar-brand">P2Pkuulutused</a></li>
                <li class="all"><a href="<?php echo base_url(); ?>index.php/welcome/index">Avaleht</a></li>
                <li class="all"><a href="<?php echo base_url(); ?>index.php/welcome/kuulutused">Kuulutused</a></li>
                <li class="all"><a href="<?php echo base_url(); ?>index.php/welcome/minuKuulutused">Minu kuulutused</a></li>
                <li class="all"><a href="<?php echo base_url(); ?>index.php/welcome/KKK">KKK</a></li>
                <li class="all"><a href="<?php echo base_url(); ?>index.php/welcome/kontakt">Kontakt</a></li>
                <li><div class="social-wrap a"><button id="facebook" onclick="trial()">Sisene Facebookiga</button></div></li>
                <li><div class="social-wrap a"><button id="idkaart">Sisene ID-kaardiga</button></div></li>
            </ul>
        </div>
    </div>
</nav>
