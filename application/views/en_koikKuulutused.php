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
                        <td><?php echo $rec->full_name;?></td>
                        <td><?php echo $rec->phone_nr;?></td>
                        <td><?php echo $rec->e_mail;?></td>
                        <td><?php echo $rec->category;?></td>
                        <td><?php echo $rec->description;?></td>
                        <td><?php echo $rec->begin;?></td>
                        <td><?php echo $rec->end;?></td>
                        <td><?php echo $rec->location;?></td>
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
                        <td><?php echo $rec->category;?></td>
                        <td><?php echo $rec->count;?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
<?php
include('en_alaosa.php')
?>