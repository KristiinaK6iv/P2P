<?php
include('en_ylaosa.php')
?>
    <div class="container">
        <h3 id="sisu">Sitemap</h3>
        <div class="row">
            <div class="col-md-3 col-md-offset-5">
                <ul class = "sitemap">
                    <li><span class="glyphicon glyphicon-chevron-right"></span><a href="<?php echo base_url(); ?>index.php/categories/en/">Home</a></li>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>index.php/categories/enCategoryPage/IT-teenused">IT-Services</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/categories/enCategoryPage/Iluteenused">Beauty Services</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/categories/enCategoryPage/Finantsteenused">Financial Services</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/categories/enCategoryPage/Puhastusteenused">Cleaning Services</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/categories/enCategoryPage/Opetamine">Teaching</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/categories/enCategoryPage/Varia">Varia</a></li>
                    </ul>
                    <li><span class="glyphicon glyphicon-chevron-right"></span><a href="<?php echo base_url(); ?>index.php/categories/allEn">Ads</a></li>
                    <li id="minu"><span class="glyphicon glyphicon-chevron-right"></span>
                        <?php if (isset($_SESSION['name'])){
                            echo"<a href='". base_url()."index.php/welcome/enMinuKuulutused'>My ads</a>";
                        }else{
                            echo"<a href='". base_url()."index.php/welcome/enMinuKuulutusedLoggedOut'>My ads</a>";
                        }?>
                    </li>
                    <li><span class="glyphicon glyphicon-chevron-right"></span><a href="<?php echo base_url(); ?>index.php/welcome/enKKK">Q&A</a></li>
                    <li><span class="glyphicon glyphicon-chevron-right"></span><a href="<?php echo base_url(); ?>index.php/welcome/enReklaam">Commercial</a></li>
                    <li><span class="glyphicon glyphicon-chevron-right"></span><a href="<?php echo base_url(); ?>index.php/welcome/enKontakt">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
<?php
include('en_alaosa.php')
?>