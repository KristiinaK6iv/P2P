<?php
include('ylaosa.php')
?>
	<div class="container">
		
		<!--Printing errors if user forgets to fill required fields-->
		<?php if(validation_errors() != false): ?>
			<div class="alert alert-info">
  			<strong>Info!</strong> <?php echo validation_errors();?>
			</div>
		<?php endif; ?>
		
		<h3 class="well">Palun sisesta enda kuulutus siin: </h3>
		
		
		<!--Form-->
		<?php echo form_open('Welcome/send_data');?>
		
		<div class="col-lg-12 well">
			<div class="row">
				<form>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-3 form-group">
								<?php 
									//Name field
									echo form_label("Full Name :","fullName");
									$data=array(
										"name"=>"fullName",
										"id"=>"fullName",
										"value"=>""
									);
									echo form_input($data);
								?>
							</div>
							<div class="col-sm-3 form-group">
								<?php 
									//Phone field
									echo form_label("Telefon :","phone_nr");
									$data=array(
										"name"=>"phone_nr",
										"id"=>"phone_nr",
										"value"=>""
									);
									echo form_input($data);
								?>
							</div>
							<div class="col-sm-3 form-group">
								<?php 
									//E-mail
									echo form_label("E-mail :","e_mail");
									$data=array(
										"name"=>"e_mail",
										"id"=>"e_mail",
										"value"=>""
									);
									echo form_input($data);
								?>
							</div>
							<div class="col-sm-3 form-group">
								<?php 
									//Ad category
									echo form_label("Kategooria :","category");
									$data=array(
										"IT-teenused" =>"IT-teenused",
										"Finantsteenused"=>"Finantsteenused",
										"Õpetamine"=>"Õpetamine",
										"Iluteenused"=> "Iluteenused",
										"Puhastusteenused"=>"Puhastusteenused",
										"Varia"=>"Varia"
									);
									echo form_dropdown('category',$data,'1');
								?>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 form-group">
								<?php echo form_label("Alguskuupäev :","begin");?>
								<input type="date" name="begin" id="begin" value="<?php echo date("d/m/Y"); ?>">
							</div>
							<div class="col-sm-3 form-group">
								<?php echo form_label("Lõppkuupäev :","end");?>
								<input type="date" name="end" id="end" value="<?php echo date("d/m/Y"); ?>">
							</div>
						</div>
						<div class="form-group">
							<label>Kirjeldus</label>
							<textarea type="input" name="description" id="description" placeholder="Sisesta siia kirjeldus..." rows="5" 
							class="form-control"></textarea>
						</div>
					</div>
				</form>	
		</div>
		
		<?php echo form_submit("Submit","Salvesta");?>
		<?php echo form_close();?>

		</div>
	</div>
<?php
include('alaosa.php')
?>