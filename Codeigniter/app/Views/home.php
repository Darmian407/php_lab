<!-- Head Template -->
<?php echo view('templates/head') ?>
<!-- NavBar -->
<?php echo view('templates/nav') ?>

<div class="uk-container-expand" id="container">

    <div uk-slideshow="animation: push" id="slider">
        <div class="mask"></div>
        <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="min-height: 300; max-height: 600" tabindex="-1">

            <ul class="uk-slideshow-items">
                <li>
                    <img src="https://i.postimg.cc/fWBbMQ1w/Sin-t-tulo-2.jpg" alt="" uk-cover>
                    <div class="uk-position-center uk-position-small uk-text-center uk-light">
                        <h3 class="uk-margin-remove uk-text-bold">Oferta de Invierno</h3>
                        <p class="uk-margin-remove uk-text-bold">Subscribite y aprovecha esta oferta.</p>
                        <a href="/planes" class="uk-button uk-button-default">Leer más</a>
                    </div>

                </li>
                <li>
                    <img src="https://image.freepik.com/foto-gratis/libro-biblioteca-libro-texto-abierto_1150-5920.jpg" alt="" uk-cover>
                    <div class="uk-position-center uk-position-small uk-text-center uk-light">
                        <h3 class="uk-margin-remove uk-text-bold">Nuevos Libros 2021</h3>
                        <p class="uk-margin-remove uk-text-bold">La mejor coleccion de libros del 2021 la encontras en Scrivd</p>
                        <a href="/buscar_tipo/Libro" class="uk-button uk-button-default">Leer más</a>
                    </div>
                </li>
                <li>
                    <img src="https://codigoesports.com/wp-content/uploads/2020/02/ibai-g2.jpg" alt="" uk-cover>
                    <div class="uk-position-center uk-position-small uk-text-center uk-light">
                        <h3 class="uk-margin-remove uk-text-bold">Charlando Tranquilamente</h3>
                        <p class="uk-margin-remove uk-text-bold">El nuevo podcast de Ibai LLanos.</p>
                        <!-- <a href="/buscar_recurso" class="uk-button uk-button-default">Leer más</a> Falta arreglar -->
                    </div>
                </li>
            </ul>


            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

        </div>

        <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>

    </div>


</div>

</div>


<div class="uk-container uk-margin-top uk-height-viewport" id="container">
    <div uk-filter="target: .js-filter">

        <ul class="uk-subnav uk-subnav-pill">

            <li class="uk-active" uk-filter-control><a href="#">Todos</a></li>
            <?php

            if (!empty($types)) {
                foreach ($types as $type) {
            ?>
                    <li uk-filter-control="[type='<?= $type['name'] ?>']"><a href="#"><?= $type['name'] ?></a></li>

            <?php
                }
            }
            ?>
        </ul>

        <ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid>
            <?php
            if (!empty($result)) {
                foreach ($result as $recurso) {
            ?>

                    <li type="<?= $recurso['type'] ?>">
                        <div class="uk-card uk-card-default uk-card-body">
                            <ul uk-accordion>
                                <li class="uk-close">
                                    <a class="uk-accordion-title" href="#"><?= $recurso['name'] ?></a>
                                    <div class="uk-accordion-content">
                                        <p><?= $recurso['author'] ?></p>
                                        <a class="uk-button uk-button-default" href="/buscar_id/<?= $recurso['id'] ?>">Detalles</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

            <?php
                }
            }
            ?>

        </ul>

    </div>

</div>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>