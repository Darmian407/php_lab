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
                    <img src="https://i.ibb.co/3fcGhDL/Slider.png" alt="" uk-cover>
                    <div class="uk-position-center uk-position-small uk-text-center uk-light">
                        <h3 class="uk-margin-remove">Bottom</h3>
                        <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <button class="uk-button uk-button-default">Leer más</button>
                    </div>

                </li>
                <li>
                    <img src="https://i.ibb.co/3fcGhDL/Slider.png" alt="" uk-cover>
                    <div class="uk-position-center uk-position-small uk-text-center uk-light">
                        <h3 class="uk-margin-remove">Bottom</h3>
                        <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <button class="uk-button uk-button-default">Leer más</button>
                    </div>
                </li>
                <li>
                    <img src="https://i.ibb.co/3fcGhDL/Slider.png" alt="" uk-cover>
                    <div class="uk-position-center uk-position-small uk-text-center uk-light">
                        <h3 class="uk-margin-remove">Bottom</h3>
                        <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <button class="uk-button uk-button-default">Leer más</button>
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
                                        <p><?= $recurso['description'] ?></p>
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