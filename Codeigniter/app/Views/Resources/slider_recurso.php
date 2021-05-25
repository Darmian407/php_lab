<!-- Head Template -->
<?php echo view('templates/head') ?>
<!-- NavBar -->
<?php echo view('templates/nav') ?>


<div class="uk-container  uk-height uk-height-viewport">
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
        <!-- <h3 class="uk-margin-bottom"></h3> -->
        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid" uk-height-viewport="offset-top: true; offset-bottom: 50">
            <?php
            if (!empty($result)) {
                foreach ($result as $recurso) {
            ?>
                    <li>
                        <div class="uk-panel">
                            <img src="<?= $recurso['image'] ?>" alt="">
                        </div>
                        <div class="uk-card uk-card-secondary uk-card-">
                            <h3 class="uk-margin-bottom uk-text-center"><?= $recurso['name'] ?></h3>
                            <p class="uk-text-primary uk-margin-top uk-text-center">Autor: <?= $recurso['author'] ?></p>
                            <a class="uk-text-center uk-button-small uk-button-default" href="/buscar_id/<?=$recurso['id']?>">Mas info</a>
                        </div>
                    </li>
            <?php
                }
            }
            ?>

        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>
</div>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>