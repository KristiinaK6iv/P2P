
	<div class="container">
		<div class="row">
			<div id="logo" class="col-md-4 col-md-offset-1"><img src="<?php echo base_url(); ?>images/logo.png" class="img-responsive" alt="logo"></div>
			<div class="col-md-6">
				<h3>Contact</h3><br>
				<p class="text-center">If you have any questions or problems then contact us by phone or e-mail.</p>
				<p class="text-center">p2pkuulutused@p2p.ee</p>
				<p class="text-center">+372 5858585</p>
				<div class="alert alert-info text-center">
				<strong>Address:</strong> <br><br>
				<!--xml ja namespaces-->
				<?php
				$feed = new SimpleXMLElement("http://localhost/P2P/xml/file.xml",NULL,TRUE);
				$namespaces = $feed->getNamespaces(true);
				
				$getChildren=$feed->children($namespaces["k"]);
				echo $getChildren->TÄNAV."<br>";
				echo $getChildren->LINN."<br>";
				echo $getChildren->RIIK."<br>";
				echo $getChildren->POSTIINDEKS."<br>";
				
				//Ilma namespace'ita
				$feed2=simplexml_load_file("http://localhost/P2P/xml/file.xml");
				echo $feed2->POSTIINDEKS;
				?>
				</div>
			</div>
		</div>
	</div>
<?php
include('en_alaosa.php')
?>