<?php /*for updating tables with ajax*/?>

<?php if(isset($title) && !empty($title)) : ?>
    <h3 class="text-center"><?php echo $title; ?>:</h3>
<?php endif; ?>

<?php if(isset($list) && count($list)) : ?>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>Nimi</th>
                <th>Tel nr</th>
                <th>E-mail</th>
                <th>Kategooria</th>
                <th>Kirjeldus</th>
                <th>Algus</th>
                <th>Lõpp</th>
				<th>Asukoht</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach($list as $row) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($row->full_name);?></td>
                    <td><?php echo htmlspecialchars($row->phone_nr);?></td>
                    <td><?php echo htmlspecialchars($row->e_mail);?></td>
                    <td><?php echo htmlspecialchars($row->category);?></td>
                    <td><?php echo htmlspecialchars($row->description);?></td>
                    <td><?php echo htmlspecialchars($row->begin);?></td>
                    <td><?php echo htmlspecialchars($row->end);?></td>
                    <td><?php echo htmlspecialchars($row->location);?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else : ?>
    <h4 class="text-center">Ei leidnud ühtegi kuulutust!</h4>
<?php endif; ?>
