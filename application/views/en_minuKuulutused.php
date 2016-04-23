<?php
include('en_ylaosa.php')
?>
	<div class="container">
		
		<!--Printing errors if user forgets to fill required fields-->
		<?php if(validation_errors() != false): ?>
			<div class="alert alert-info">
  			<strong>Info!</strong> <?php echo validation_errors();?>
			</div>
		<?php endif; ?>
		
		<h3 class="well">Please enter your ad: </h3>
		
		
		<!--Form-->
		<?php echo form_open('Welcome/send_data');?>
		
		<div class="col-lg-12 well">
			<div class="row">
				
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4 form-group">
								<label for="location">Asukoht: </label>
								 <a href = "#" data-toggle = "tooltip" data-placement = "right" title = "Please select area."><img class="img" alt="#" src="<?php echo base_url(); ?>images/questionmark.png"/></a>
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
								<label for="category">Category: </label>
								 <a href = "#" data-toggle = "tooltip" data-placement = "right" title = "Please select category"><img alt="#" class="img" src="<?php echo base_url(); ?>images/questionmark.png"/></a>
								<select name="category" id="category">
									<option value="IT Services">IT Services</option>
									<option value="Financial services">Financial Services</option>
									<option value="Teaching">Teaching</option>
									<option value="Beauty Services">Beauty Services</option>
									<option value="Cleaning Services">Cleaning Services</option>
									<option value="Varia">Varia</option>
								</select>
							</div>
							<div class="col-sm-4 form-group">
								<?php 
									//Phone field
									echo form_label("Phone nr :","phone_nr");
									echo " <a href = \"#\" data-toggle = \"tooltip\" data-placement = \"right\" title = \"Please enter you phone number.\"><img alt=\"#\" class=\"img\" src=\"". base_url() ."images/questionmark.png\"/></a> ";
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
								<label for="begin">Beginning: </label>
								<a href = "#" data-toggle = "tooltip" data-placement = "right" title = "Please enter the start date"><img class="img" alt="#" src="<?php echo base_url(); ?>images/questionmark.png"/></a>
								<input type="date" name="begin" id="begin" value="<?php date("Y-m-d")?>">
								
							</div>
							<div class="col-sm-4 form-group">
								<label for="end">Ending: </label>
								<a href = "#" data-toggle = "tooltip" data-placement = "right" title = "Please enter the end date"><img class="img" alt="#" src="<?php echo base_url(); ?>images/questionmark.png"/></a>
								<input type="date" name="end" id="end" value="<?php date("Y-m-d")?>">
							</div>
						</div>
						<div class="form-group">
							<label for="description">Description: </label>
							<a href = "#" data-toggle = "tooltip" data-placement = "right" title = "Add a description or comments."><img class="img" alt="#" src="<?php echo base_url(); ?>images/questionmark.png"/></a>
							<textarea name="description" id="description" placeholder="Add a description..." rows="5" 
							class="form-control"></textarea>
						</div>
					</div>	
			</div>
		</div>
        <?php echo form_submit("Submit","Save");?>
		<?php echo form_close();?>
	</div>
	
	<div class="container">
	<br>
	<button id="show" type="button" class="btn btn-primary">Show my ads</button>
	</div>
	<?php if (isset($_SESSION['name'])): ?>
		<div id="hided" class="container">
        <br>
        <h3>My added ads: </h3>
        <br>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Number</th>
                    <th>E-mail</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Beginning Date</th>
                    <th>End Date</th>
                    <th>Location</th>
                </tr>
                <?php foreach($records8 as $rec) : ?>
                    <tr>
                        <td><?php echo  htmlspecialchars($rec->full_name);?></td>
                        <td><?php echo  htmlspecialchars($rec->phone_nr);?></td>
                        <td><?php echo  htmlspecialchars($rec->e_mail);?></td>
                        <td><?php echo  htmlspecialchars($rec->category);?></td>
                        <td><?php echo  htmlspecialchars($rec->description);?></td>
                        <td><?php echo  htmlspecialchars($rec->begin);?></td>
                        <td><?php echo  htmlspecialchars($rec->end);?></td>
                        <td><?php echo  htmlspecialchars($rec->location);?></td>
                    </tr>
                <?php endforeach ?>

            </table>
        </div>
        <br>
    </div>
	<?php endif;?>
<?php
include('en_alaosa.php')
?>