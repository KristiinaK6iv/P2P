<?php
include('en_ylaosa.php')
?>
    <div class="container">
        <br>
        <h3>All ads: </h3>
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
                <?php foreach($records as $rec) : ?>
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
        <h3>Statistics: </h3>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Category</th>
                    <th>Sum of Ads</th>
                </tr>
                <?php foreach($records2 as $rec) : ?>
                    <tr>
                        <td><?php echo  htmlspecialchars($rec->category);?></td>
                        <td><?php echo  htmlspecialchars($rec->count);?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
       <div id="notDisplayed" class="notseen">
				
		<?php
		
		 $Tallinn=0;
		 $Kardla=0;
		 $Johvi=0;
		 $Paide=0;
		 $Jogeva=0;
		 $Rakvere=0;
		 $Haapsalu=0;
		 $Parnu=0;
		 $Polva=0;
		 $Rapla=0;
		 $Kuressaare=0;
		 $Tartu=0;
		 $Valga=0;
		 $Viljandi=0;
		 $Voru=0;
		
		
		$i = 1;
		
		foreach($records6 as $rec) :{
			if($i==1){
				$Tallinn=$rec->count;
			}if($i==2){
				$Kardla=$rec->count;
			}if($i==3){
				$Johvi=$rec->count;
			}if($i==4){
				$Paide=$rec->count;
			}if($i==5){
				$Jogeva=$rec->count;
			}if($i==6){
				$Rakvere=$rec->count;
			}if($i==7){
				$Haapsalu=$rec->count;
			}if($i==8){
				$Parnu=$rec->count;
			}if($i==9){
				$Polva=$rec->count;
			}if($i==10){
				$Rapla=$rec->count;
			}if($i==11){
				$Kuressaare=$rec->count;
			}if($i==12){
				$Tartu=$rec->count;
			}if($i==13){
				$Valga=$rec->count;
			}if($i==14){
				$Viljandi=$rec->count;
			}if($i==15){		
               $Voru=$rec->count;
                   }
			$i++;
		}
		endforeach;
               
		
	?>
	<div id="Tallinn" class="notseen">
		<?php echo htmlspecialchars($Tallinn);?>
	</div>
	<div id="Kardla" class="notseen">
		<?php echo htmlspecialchars($Kardla);?>
	</div>
	<div id="Johvi" class="notseen">
		<?php echo htmlspecialchars($Johvi);?>
	</div>
	<div id="Paide" class="notseen">
		<?php echo htmlspecialchars($Paide);?>
	</div>
	<div id="Jogeva" class="notseen">
		<?php echo htmlspecialchars($Jogeva);?>
	</div>
	<div id="Rakvere" class="notseen">
		<?php echo htmlspecialchars($Rakvere);?>
	</div>
	<div id="Haapsalu" class="notseen">
		<?php echo htmlspecialchars($Haapsalu);?>
	</div>
	<div id="Parnu" class="notseen">
		<?php echo htmlspecialchars($Parnu);?>
	</div>
	<div id="Polva" class="notseen">
		<?php echo htmlspecialchars($Polva);?>
	</div>
	<div id="Rapla" class="notseen">
		<?php echo htmlspecialchars($Rapla);?>
	</div>
	<div id="Kuressaare" class="notseen">
		<?php echo htmlspecialchars($Kuressaare);?>
	</div>
	<div id="Tartu" class="notseen">
		<?php echo htmlspecialchars($Tartu);?>
	</div>
	<div id="Valga" class="notseen">
		<?php echo htmlspecialchars($Valga);?>
	</div>
	<div id="Viljandi" class="notseen">
		<?php echo htmlspecialchars($Viljandi);?>
	</div>
	<div id="Voru" class="notseen">
		<?php echo htmlspecialchars($Voru);?>
	</div>
	
    </div>
    <div class="container">      
	<div class="mapid" id="googleMap"></div>	
	</div> 
<?php
include('en_alaosa.php')
?>