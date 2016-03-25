<?php
include('ylaosa.php')
?>
    <div class="container">
        <section>
            <div class="page-header">
                <h2> Kuulutused </h2>
            </div>
            <div class="row">
                <div class="col-md-4"><a href="<?php echo base_url(); ?>index.php/categories/categoryPage/IT-teenused" class="btn btn-block btn-default categoryButton">IT-teenused</a></div>
                <div class="col-md-4"><a href="<?php echo base_url(); ?>index.php/categories/categoryPage/Finantsteenused" class="btn btn-block btn-default categoryButton">Finantsteenused</a></div>
                <div class="col-md-4"><a href="<?php echo base_url(); ?>index.php/categories/categoryPage/Opetamine" class="btn btn-block btn-default categoryButton">Õpetamine</a></div>
            </div>
            <div class="row">
                <div class="col-md-4"><a href="<?php echo base_url(); ?>index.php/categories/categoryPage/Iluteenused" class="btn btn-block btn-default categoryButton">Iluteenused</a></div>
                <div class="col-md-4"><a href="<?php echo base_url(); ?>index.php/categories/categoryPage/Puhastusteenused" class="btn btn-block btn-default categoryButton">Puhastusteenused</a></div>
                <div class="col-md-4"><a href="<?php echo base_url(); ?>index.php/categories/categoryPage/Varia" class="btn btn-block btn-default categoryButton">Varia</a></div>
            </div>
            <div class="table-responsive">

            </div>
        </section>

        <?php if(isset($title) && !empty($title)) : ?>
        <h3 class="text-center"><?php echo $title; ?>:</h3>
        <?php endif; ?>

        <?php if(isset($records3) && count($records3)) : ?>
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
                <?php foreach($records3 as $rec) : ?>
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
        <?php else : ?>
            <h4 class="text-center">Valige kategooria</h4>
        <?php endif; ?>
    </div>

<?php
include('alaosa.php')
?>