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
							<li><a id="IT-teenused" href="<?php echo base_url(); ?>index.php/categories/loadCategory/#/IT-teenused"><span class="glyphicon glyphicon-chevron-right"></span>IT-teenused</a></li>
							<li><a href="<?php echo base_url(); ?>index.php/categories/loadCategory/#/Finantsteenused"><span class="glyphicon glyphicon-chevron-right"></span>Finantsteenused</a></li>
						</ul>

					</blockquote>
				</div>
				<div class="col-lg-4">
					<blockquote>
						<ul>
							<li><a href="<?php echo base_url(); ?>index.php/categories/loadCategory/#/Opetamine"><span class="glyphicon glyphicon-chevron-right"></span>Õpetamine</a></li>
							<li><a href="<?php echo base_url(); ?>index.php/categories/loadCategory/#/Iluteenused"><span class="glyphicon glyphicon-chevron-right"></span>Iluteenused</a></li>
						</ul>
					</blockquote>
				</div>
				<div class="col-lg-4">
					<blockquote>
						<ul>
							<li><a href="<?php echo base_url(); ?>index.php/categories/loadCategory/#/Puhastusteenused"><span class="glyphicon glyphicon-chevron-right"></span>Puhastusteenused</a></li>
							<li><a href="<?php echo base_url(); ?>index.php/categories/loadCategory/#/Varia"><span class="glyphicon glyphicon-chevron-right"></span>Varia</a></li>
						</ul>
					</blockquote>
				</div>
			</div>
		</section>
		
	</div>
<?php
include('alaosa.php')
?>