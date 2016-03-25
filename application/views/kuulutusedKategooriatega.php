<?php
include('ylaosa.php')
?>
    <div class="container">
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


        </div>
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