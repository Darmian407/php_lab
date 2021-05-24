<!-- Head Template -->
<?php echo view('templates/head') ?>
<!-- NavBar -->
<?php echo view('templates/nav') ?>

<h1 class="uk-text-center">Resultados para “<?= set_value('keywords') ?>”</h1>

<div class="uk-container uk-height-viewport" id="container">

    <?php
    if (isset($result)) {

        foreach ($result as $recurso) {
    ?>
            <div class="uk-card  uk-card-body ">
                <ul class="js-filter uk-card uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
                    <li class="uk-width-1-3  uk-text-center">
                        <div class=" uk-card uk-card-body">
                            <img data-src="<?= $recurso['image']?>" width="400" height="200" alt="" uk-img>
                        </div>
                    </li>

                    <li class="uk-width-2-3">
                        <a class="uk-text-center" href="Resource/resource?nvar=<?=$recurso['name']?>"> <?= $recurso['name']?> </a>
                        <hr class="uk-divider-small uk-text-center">
                        <h3><?= $recurso['description']?></h3>
                        <h3 class="uk-text-small uk-text-primary">Autor:    <?= $recurso['author']?></h3> 
                        <h3>Tipo: <?= $recurso['type']?></h3>   
                    </li>
                </ul>

            </div>
    <?php
        }
    }
    ?>

    <!-- Footer Template -->
    <?php echo view('templates/footer') ?>