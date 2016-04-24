<?php
@session_start();
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');

?>

<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="utf-8"/>
    <?php 
    if(isset($title)){
    echo "<title>".$title."</title>";
    } else {
    	echo "<title>Minu kuulutused</title>";
	}
    ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css"  type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/navbar-theme2.css"  type="text/css" />
   <script async src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>js/jquery-1.8.0.min.js">\x3C/script>')</script>
    <script async src="<?php echo base_url(); ?>js/jquery.address-1.5.js"></script>
   
    <script async src="<?php echo base_url(); ?>js/v2ikesed.js"></script>
    <script async src="<?php echo base_url(); ?>js/fb2.js"></script>
    <script async src="http://maps.googleapis.com/maps/api/js"></script>
    <script async src="<?php echo base_url(); ?>js/map.js"></script> <!--Google maps-->
</head>


<body>
	<nav class="navbar navbar-default">
	    <div class="container-fluid">
	
	        <!--Menu Items-->
	        <div>
	            <ul class="nav navbar-nav">
	            	<li><a href="" class="navbar-brand">P2Pkuulutused</a></li>
	                <li class="all"><a href="<?php echo base_url(); ?>index.php/categories/">Avaleht</a></li>
	                <li class="all"><a href="<?php echo base_url(); ?>index.php/categories/all/">Kõik kuulutused</a></li>
	                <li class="all"> 
	                		<?php if (isset($_SESSION['name'])){
								echo " <a href='". base_url() . "index.php/welcome/minuKuulutused'>Minu kuulutused</a>";
								}else{
								echo " <a href='". base_url() . "index.php/welcome/minuKuulutusedLoggedOut'>Minu kuulutused</a>"; 
							}?>
					</li>				
	                <li class="all"><a href="<?php echo base_url(); ?>index.php/welcome/KKK">KKK</a></li>
	                <li class="all"><a href="<?php echo base_url(); ?>index.php/welcome/reklaam">Reklaam</a></li>
	                <li class="all"><a href="<?php echo base_url(); ?>index.php/welcome/kontakt">Kontakt</a></li>
	                <li> 
	                	<?php if (isset($_SESSION['name'])){
		                	echo "<div id=\"facebook-root\" class='social-wrap a'><button id='facebook' onclick=\"logout();\">Välju</button></div>";
		                	}else{
		                	echo "<div id=\"facebook-root\" class='social-wrap a'><button id='facebook' onclick=\"login();\">Sisene Facebookiga</button></div>";
						}?>
	                </li> 
					<li><div class="social-wrap a"><button id="idkaart">Sisene ID-kaardiga</button></div></li>
					<li><div class='btn-group'> <!-- Change language -->
			<a href="<?php echo base_url(); ?>index.php/categories/en/" class='btn btn-circle btn-warning'>ENG</a>
			<a href="<?php echo base_url(); ?>index.php/categories/" class='btn btn-circle btn-warning'>EST</a></div></li>
	            </ul>
	        </div>
	    </div>
	</nav>
	
	<div class="container">
		<?php if (isset($_SESSION['name'])){
				echo "Welcome ",$_SESSION['name']," !"; 
		}?>
	</div>
