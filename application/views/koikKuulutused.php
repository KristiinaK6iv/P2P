<?php
include('ylaosa.php')
?>
    <div class="container">
        <br>
        <h3>Kõik kuulutused: </h3>
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
                    <th>Asukoht</th>
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
        <h3>Statistika: </h3>
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