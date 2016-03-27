<?php
include('ylaosa.php')
?>
    <div class="container">
        <h3 id="sisu">Sisukaart</h3>
        <div class="row">
            <div class="col-md-3 col-md-offset-5">
                <ul class = "sitemap">
                    <li><span class="glyphicon glyphicon-chevron-right"></span><a href="<?php echo base_url(); ?>index.php/categories/">Avaleht</a></li>
                    <li><ul>
                        <li><a href="<?php echo base_url(); ?>index.php/categories/categoryPage/IT-teenused">IT-teenused</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/categories/categoryPage/Iluteenused">Iluteenused</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/categories/categoryPage/Finantsteenused">Finantsteenused</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/categories/categoryPage/Puhastusteenused">Puhastusteenused</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/categories/categoryPage/Opetamine">Õpetamine</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/categories/categoryPage/Varia">Varia</a></li>
                    </ul></li>
                    <li><span class="glyphicon glyphicon-chevron-right"></span><a href="<?php echo base_url(); ?>index.php/categories/all">Kõik kuulutused</a></li>
                    <li id="minu"><span class="glyphicon glyphicon-chevron-right"></span>
                        <?php if (isset($_SESSION['name'])){
                            echo"<a href='". base_url()."index.php/welcome/minuKuulutused'>Minu kuulutused</a>";
                        }else{
                            echo"<a href='". base_url()."index.php/welcome/minuKuulutusedLoggedOut'>Minu kuulutused</a>";
                        }?>
                    </li>
                    <li><span class="glyphicon glyphicon-chevron-right"></span><a href="<?php echo base_url(); ?>index.php/welcome/KKK">KKK</a></li>
                    <li><span class="glyphicon glyphicon-chevron-right"></span><a href="<?php echo base_url(); ?>index.php/welcome/reklaam">Reklaam</a></li>
                    <li><span class="glyphicon glyphicon-chevron-right"></span><a href="<?php echo base_url(); ?>index.php/welcome/kontakt">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </div>
<?php
include('alaosa.php')
?>