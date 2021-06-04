<!-- Head Template -->
<?php echo view('templates/head') ?>

<!-- NavBar -->
<?php echo view('templates/nav') ?>

<div class="uk-flex uk-visible@s uk-child-width-1-2@s">
    <!-- <div class="uk-grid-medium uk-visible@s uk-child-width-expand@s uk-text-center uk-height-viewport" uk-grid> -->
    <?php
    if (!empty($result)) {
    ?>

        <div class="uk-card uk-card uk-card-body uk-text-center uk-height-viewport">
            <h1 class="">Recursos del autor <?= $autor['author'] ?></h1>
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


        <div class="uk-card uk-card-secondary uk-margin-left">
            <div class="uk-card-body">
                <h1 class="uk-card-title uk-text-center">Datos de <?= $autor['author'] ?> <?= $autor['lastname'] ?></h1>
                <img class="uk-border-rounded uk-margin-small" data-src="<?= $autor['authorImg'] ?>" width="" height="" alt="" uk-img>
                <div class="uk-card uk-card-default uk-card-body">
                    <li class="uk-margin-bottom">Nombre: <?= $autor['author'] ?></li>
                    <hr class="uk-divider-small">
                    <li class="uk-margin-bottom">Apellido: <?= $autor['lastname'] ?></li>
                    <hr class="uk-divider-small">
                    <li class="uk-margin-bottom">Nick: <?= $autor['nick'] ?></li>
                    <hr class="uk-divider-small">
                    <li class="uk-margin-bottom">Fecha de nacimiento: <?= $autor['birthdate'] ?></li>
                    <hr class="uk-divider-small">
                    <li class="uk-margin-bottom">Biografia: <?= $autor['biography'] ?></li>
                </div>

                <?php
                if(!$following){
                ?>
                    <a class="uk-button uk-button-default uk-margin-top .uk-width-1-1" href="/follow/<?= $autor['authorId'] ?>"> Seguir </i></a>
                <?php
                }else{
                ?>
                    <a class="uk-button uk-button-default uk-margin-top .uk-width-1-1" href="/unfollow/<?= $autor['authorId'] ?>"> Dejar de seguir </i></a>
                <?php
                }
                ?>
                
                
            </div>

        </div>
</div>
<?php
    }

?>
</div>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>