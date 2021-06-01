<!-- Head Template -->
<?php echo view('templates/head') ?>
<!-- NavBar -->
<?php echo view('templates/nav') ?>

<div class="uk-container-flex uk-margin-large-left uk-margin-large-bottom uk-margin-large-top" uk-grid>
    <div>
        <h1 class="uk-margin-bottom">Suscríbase para disfrutar de todo el contenido</h1>
        <h3 class="uk-margin-bottom">Obtenga acceso ilimitado a libros, audiolibros, revistas, podcasts y documentos por solo $8.99</h3>
        <a class="uk-button uk-button-primary uk-margin-bottom" href="/planes">Suscribirse</a>
        <p>Puede cancelar en cualquier momento.</p>
    </div>
    <div>
        <img class="uk-border-rounded" data-src="https://i.ibb.co/bvk4pcW/books-es-0a8d204c.png" width="500" height="" alt="" uk-img>
    </div>
</div>

<div class="uk-card uk-height uk-height-viewport uk-margin-medium-left uk-margin-medium-right">
    
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-6@m uk-grid" uk-height-viewport="offset-top: true; offset-bottom: 50">
            <?php
            if (!empty($result)) {
                foreach ($result as $recurso) {
            ?>
                    <li>
                        <div class="uk-panel">
                            <img src="<?= $recurso['image'] ?>" width="" height="" alt="">
                        </div>
                        <div class="uk-card uk-card-secondary uk-card-">
                            <h3 class="uk-margin-bottom uk-text-center"><?= $recurso['name'] ?></h3>
                            <p class="uk-text-primary uk-margin-top uk-text-center">Autor: <?= $recurso['author'] ?></p>
                            <a class="uk-text-center uk-button-small uk-button-default" href="/buscar_id/<?= $recurso['id'] ?>">Mas info</a>
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