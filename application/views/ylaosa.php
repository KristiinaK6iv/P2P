<?php
session_start();
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.address-1.5.js"></script>
    <script src="<?php echo base_url(); ?>js/ajax_script.js"></script> <!--skript Kuulutused2 lehel ajaxiga uuendamiseks-->
    <script src="<?php echo base_url(); ?>js/address_listener.js"></script>
    <script src="<?php echo base_url(); ?>js/load_more.js"></script> <!--skript KKK lehel-->
    <script src="<?php echo base_url(); ?>js/fb2.js"></script> <!--skript KKK lehel-->
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
                <li class="all"> <?php if (isset($_SESSION['name'])){
						echo " <a href='". base_url() . "index.php/welcome/minuKuulutused'>Minu kuulutused</a>";
					}else{
						echo " <a href='". base_url() . "index.php/welcome/minuKuulutusedLoggedOut'>Minu kuulutused</a>"; }?>
				</li>
                <li class="all"><a href="<?php echo base_url(); ?>index.php/welcome/KKK">KKK</a></li>
                <li class="all"><a href="<?php echo base_url(); ?>index.php/welcome/kontakt">Kontakt</a></li>
                 
                <li><div id="facebook-root" class="social-wrap a"><button id="facebook" onclick="login();">Sisene fb'ga</button></div></li> 
				<li><div id="facebook-root" class="social-wrap a"><button id="facebook" onclick="logout();">Välju</button></div></li> 
				      
                
            </ul>
        </div>
<div > 
</div>
    </div>
</nav>
<div class="container">
	<?php if (isset($_SESSION['name'])){
			echo "Welcome ",$_SESSION['name']," !"; 
		}?>
		
</div>