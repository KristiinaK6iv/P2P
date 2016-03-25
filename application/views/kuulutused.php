<?php
include('ylaosa.php')
?>
	<div class="container">
		<div class="row">

			<div class="col-md-4"><a href="<?php echo base_url(); ?>index.php/categories/loadCategory/#/It-teenused" class="btn btn-block btn-default categoryButton">IT-teenused</a></div>
			<div class="col-md-4"><a href="<?php echo base_url(); ?>index.php/categories/loadCategory/#/Finantsteenused" class="btn btn-block btn-default categoryButton">Finantsteenused</a></div>
			<div class="col-md-4"><a href="<?php echo base_url(); ?>index.php/categories/loadCategory/#/Opetamine" class="btn btn-block btn-default categoryButton">Õpetamine</a></div>
		</div>
		<div class="row">
			<div class="col-md-4"><a href="<?php echo base_url(); ?>index.php/categories/loadCategory/#/Iluteenused" class="btn btn-block btn-default categoryButton">Iluteenused</a></div>
			<div class="col-md-4"><a href="<?php echo base_url(); ?>index.php/categories/loadCategory/#/Puhastusteenused" class="btn btn-block btn-default categoryButton">Puhastusteenused</a></div>
			<div class="col-md-4"><a href="<?php echo base_url(); ?>index.php/categories/loadCategory/#/Varia" class="btn btn-block btn-default categoryButton">Varia</a></div>
		</div>
		<h3>Lisatud kuulutused: </h3>
		<div class="table-responsive">
			<table class="table">
				<tr>
					<th>Nimi</th>
					<th>Telefon</th>
					<th>E-mail</th>
					<th>Kategooria</th>
					<th>Kirjeldus</th>
					<th>Alguskuupäev</th>
					<th>Lõppkuupäev</th>
				</tr>
				<?php foreach($records as $rec) : ?>
					<tr>
						<td><?php echo $rec->full_name;?></td>
						<td><?php echo $rec->phone_nr;?></td>
						<td><?php echo $rec->e_mail;?></td>
						<td><?php echo $rec->category;?></td>
						<td><?php echo $rec->description;?></td>
						<td><?php echo $rec->begin;?></td>
						<td><?php echo $rec->end;?></td>
					</tr>
				<?php endforeach ?>
			</table>
		</div>
		<br>
		<h4>Statistika: </h4>
		<div class="table-responsive">
			<table class="table">
				<tr>
					<th>Kategooria</th>
					<th>Kuulutusi kokku</th>
				</tr>
				<?php foreach($records2 as $rec) : ?>
					<tr>
						<td><?php echo $rec->category;?></td>
						<td><?php echo $rec->count;?></td>
					</tr>
				<?php endforeach ?>
			</table>
		</div>
	</div>
<?php
include('alaosa.php')
?>