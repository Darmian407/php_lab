<!-- Head Template -->
<?php echo view('templates/head') ?>
<!-- NavBar -->
<?php echo view('templates/nav') ?>

<div class="uk-child-width-expand@l uk-text-center" uk-grid>
    <div class="uk-card uk-card-body">
        <?php
            if(isset($alert)){
                echo $alert;
            }
        ?>    

    </div>
</div>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>