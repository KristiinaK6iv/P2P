<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');


?>

<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    
    <title>P2P kuulutused</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css"  type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/navbar-theme2.css"  type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.address-1.5.js"></script>
    
    <script src="<?php echo base_url(); ?>js/ajax_script.js"></script> <!--skript Kuulutused2 lehel ajaxiga uuendamiseks-->
    <script src="<?php echo base_url(); ?>js/address_listener.js"></script>
    <script src="<?php echo base_url(); ?>js/translation.js"></script>
	<script src="<?php echo base_url(); ?>js/long_poller.js"></script> <!--skript alaosa uuendamiseks lehel-->
    <script src="<?php echo base_url(); ?>js/load_more.js"></script> <!--skript KKK lehel-->
    <script src="<?php echo base_url(); ?>js/fb2.js"></script> <!--skript KKK lehel-->
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> <!--font-->
     <script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="<?php echo base_url(); ?>js/map.js"></script> <!--Google maps-->
</head>


<body>
	<nav class="navbar navbar-default">
	    <div class="container-fluid">
	
	        <!--Menu Items-->
	        <div>
	            <ul class="nav navbar-nav">
	            	<li><a href="" class="navbar-brand">P2Pkuulutused</a></li>
	                <li  class="all"><a href="<?php echo base_url(); ?>index.php/categories/en/">Home</a></li>
	                <li  class="all"><a href="<?php echo base_url(); ?>index.php/categories/allEn/">Ads</a></li>
	                <li   class="all"> 
	                		<?php if (isset($_SESSION['name'])){
								echo " <a href='". base_url() . "index.php/welcome/enMinuKuulutused'>My ads</a>";
								}else{
								echo " <a href='". base_url() . "index.php/welcome/enMinuKuulutusedLoggedout'>My ads</a>"; 
							}?>
					</li>				
	                <li  class="all"><a href="<?php echo base_url(); ?>index.php/welcome/enKKK">Q&A</a></li>
	                <li  class="all"><a href="<?php echo base_url(); ?>index.php/welcome/enReklaam">Commerial</a></li>
	                <li  class="all"><a href="<?php echo base_url(); ?>index.php/welcome/enKontakt">Contact</a></li>
	                <li > 
	                	<?php if (isset($_SESSION['name'])){
		                	echo "<div id=\"facebook-root\" class='social-wrap a'><button id='facebook' onclick=\"logout();\">Log out</button></div>";
		                	}else{
		                	echo "<div id=\"facebook-root\" class='social-wrap a'><button id='facebook' onclick=\"login();\">Log in</button></div>"; 
						}?>
	                </li> 
					<li ><div class="social-wrap a"><button id="idkaart">ID card</button></div></li>
					
					<li><div class='btn-group'> <!-- Change language -->
                  <a href="<?php echo base_url(); ?>index.php/categories/en/" class='btn btn-circle btn-warning'>ENG</a>
			<a href="<?php echo base_url(); ?>index.php/categories/" class='btn btn-circle btn-warning'>EST</a></li>
	            </ul>
	        </div>
	    </div>
	</nav>
	
	<div class="container">
		<?php if (isset($_SESSION['name'])){
				echo "Welcome ",$_SESSION['name']," !"; 
		}?>
	</div>