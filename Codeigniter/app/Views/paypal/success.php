<!-- Head Template -->
<?php echo view('templates/head') ?>
<!-- NavBar -->
<?php echo view('templates/nav') ?>

<div class="uk-child-width-expand@l uk-text-center" uk-grid>
    <div id="precio" class="uk-card uk-card-body">
        <h1>Transacción completada con éxito</h1>

        

        <?php

            // if($_SERVER['HTTP_REFERER']==""){

                $usermodel = new \App\Models\UserModel();

                $usermodel->subscribe();

            // }
            
        ?>

    </div>
</div>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>