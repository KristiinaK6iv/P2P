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
				
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4 form-group">
								<label for="location">Asukoht: </label>
								<select name="location" id="location">
									<option value="Harjumaa">Harjumaa</option>
									<option value="Hiiumaa">Hiiumaa</option>
									<option value="Ida-Virumaa">Ida-Virumaa</option>
									<option value="Jõgevamaa">Jõgevamaa</option>
									<option value="Järvamaa">Järvamaa</option>
									<option value="Läänemaa">Läänemaa</option>
									<option value="Lääne-Virumaa">Lääne-Virumaa</option>
									<option value="Põlvamaa">Põlvamaa</option>
									<option value="Pärnumaa">Pärnumaa</option>
									<option value="Raplamaa">Raplamaa</option>
									<option value="Saaremaa">Saaremaa</option>
									<option value="Tartumaa">Tartumaa</option>
									<option value="Valgamaa">Valgamaa</option>
									<option value="Viljandimaa">Viljandimaa</option>
									<option value="Võrumaa">Võrumaa</option>
								</select>
							</div>
							<div class="col-sm-4 form-group">
								<label for="category">Kategooria: </label>
								<select name="category" id="category">
									<option value="IT-teenused">IT-teenused</option>
									<option value="Finantsteenused">Finantsteenused</option>
									<option value="Õpetamine">Õpetamine</option>
									<option value="Iluteenused">Iluteenused</option>
									<option value="Puhastusteenused">Puhastusteenused</option>
									<option value="Varia">Varia</option>
								</select>
							</div>
							<div class="col-sm-4 form-group">
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
						</div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label for="begin">Algus: </label>
								<input type="date" name="begin" id="begin" value="<?php date("Y-m-d")?>">
								
							</div>
							<div class="col-sm-4 form-group">
								<label for="end">Lõpp: </label>
								<input type="date" name="end" id="end" value="<?php date("Y-m-d")?>">
							</div>
						</div>
						<div class="form-group">
							<label for="description">Kirjeldus: </label>
							<textarea name="description" id="description" placeholder="Sisesta siia kirjeldus..." rows="5" 
							class="form-control"></textarea>
						</div>
					</div>	
			</div>
		</div>
        <?php echo form_submit("Submit","Salvesta");?>
		<?php echo form_close();?>
	</div>
	
<?php
include('alaosa.php')
?>