<?php
include('en_ylaosa.php')
?>
	<div class="container">
		<section>
			<div class="page-header">
				<h2> Ads</h2>
			</div>
				<div class="row">
					<div class="col-md-4"><button id="IT-teenused" type="button" class="btn btn-block categoryButton">IT Services</button></div>
					<div class="col-md-4"><button id="Finantsteenused" type="button" class="btn btn-block categoryButton">Financial Services</button></div>
					<div class="col-md-4"><button id="Opetamine" type="button" class="btn btn-block categoryButton">Teaching</button></div>
				</div>
				<div class="row">
					<div class="col-md-4"><button id="Iluteenused" type="button" class="btn btn-block categoryButton">Beauty Services</button></div>
					<div class="col-md-4"><button id="Puhastusteenused" type="button" class="btn btn-block categoryButton">Cleaning Services</button></div>
					<div class="col-md-4"><button id="Varia" type="button" class="btn btn-block categoryButton">Varia</button></div>
				</div>
				<div id="byCategory" class="table-responsive">
					<p class ="text-center" id="poleJs">If you don't see any suitable category click <a href="<?php echo base_url(); ?>index.php/categories/categoryPage/">here</a>
						and choose the category again</p>
					<br>
					<br>

				</div>
		</section>
		
	</div>
<?php
include('alaosa.php')
?>