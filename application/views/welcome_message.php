<?php
include('ylaosa.php')
?>
	<div class="container">
		<section>
			<div class="page-header" id="avaleht">
				<h2> Kuulutused </h2>
			</div>
			
			<div class="row">
				<div class="col-lg-4">
					<blockquote>
						<ul> 
							<li><a href="<?php echo base_url(); ?>index.php/welcome/loadCategory?selected=IT-teenused"><span class="glyphicon glyphicon-chevron-right"></span>IT-teenused</a></li>
							<li><a href="<?php echo base_url(); ?>index.php/welcome/loadCategory?selected=Finantsteenused"><span class="glyphicon glyphicon-chevron-right"></span>Finantsteenused</a></li>    
						</ul>
						
					</blockquote>
				</div>
				<div class="col-lg-4">
					<blockquote>
						<ul>
							<li><a href="<?php echo base_url(); ?>index.php/welcome/loadCategory?selected=Õpetamine"><span class="glyphicon glyphicon-chevron-right"></span>Õpetamine</a></li>
							<li><a href="<?php echo base_url(); ?>index.php/welcome/loadCategory?selected=Iluteenused"><span class="glyphicon glyphicon-chevron-right"></span>Iluteenused</a></li>
						</ul>
					</blockquote>
				</div>
				<div class="col-lg-4">
					<blockquote>
						<ul>
							<li><a href="<?php echo base_url(); ?>index.php/welcome/loadCategory?selected=Puhastusteenused"><span class="glyphicon glyphicon-chevron-right"></span>Puhastusteenused</a></li>
							<li><a href="<?php echo base_url(); ?>index.php/welcome/loadCategory?selected=Varia"><span class="glyphicon glyphicon-chevron-right"></span>Varia</a></li>
						</ul>
					</blockquote>
				</div>
			</div>
		</section>
		
	</div>
<?php
include('alaosa.php')
?>