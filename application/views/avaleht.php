
	<div class="container">
		<section>
			<div class="page-header">
				<h2> Kuulutused </h2>
			</div>
				<div class="row">
					<div class="col-md-4"><button id="IT-teenused" type="button" class="btn btn-block categoryButton">IT-teenused</button></div>
					<div class="col-md-4"><button id="Finantsteenused" type="button" class="btn btn-block categoryButton">Finantsteenused</button></div>
					<div class="col-md-4"><button id="Opetamine" type="button" class="btn btn-block categoryButton">Õpetamine</button></div>
				</div>
				<div class="row">
					<div class="col-md-4"><button id="Iluteenused" type="button" class="btn btn-block categoryButton">Iluteenused</button></div>
					<div class="col-md-4"><button id="Puhastusteenused" type="button" class="btn btn-block categoryButton">Puhastusteenused</button></div>
					<div class="col-md-4"><button id="Varia" type="button" class="btn btn-block categoryButton">Varia</button></div>
				</div>
				<div id="byCategory" class="table-responsive">
					<p class ="text-center" id="poleJs">Juhul, kui Te ei näe soovitud kategooriat, vajutage <a href="<?php echo base_url(); ?>index.php/categories/categoryPage/">siia</a>
						ja valige kategooria uuesti.</p>
					<br>
					<br>

				</div>
		</section>
		
	</div>
<?php
include('alaosa.php')
?>