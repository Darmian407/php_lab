<!-- Head Template -->
<?php echo view('templates/head') ?>

<!-- NavBar -->
<?php echo view('templates/nav') ?>

<?php
if (isset($result)) {
?>
    <div class="uk-container uk-height-viewport" id="container">
        <div>
            <div class="uk-card  uk-card-body ">
                <ul class="js-filter uk-card uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
                    <li class="uk-width-1-3  uk-text-center">
                        <div class=" uk-card uk-card-body">
                            <img data-src="<?= $result['image'] ?>" width="400" height="200" alt="" uk-img>
                            <?php
                            if ($result['type'] == 1 || 3 || 5 || 6) {
                            ?>
                                <button class="uk-button uk-button-primary uk-margin-top uk-width-1-1"><i class="fas fa-glasses"></i> Leer vista previa</i></button>

                            <?php
                            } else {
                            ?>
                                <button class="uk-button uk-button-primary uk-margin-top .uk-width-1-1"><i class="fas fa-play"></i> Reproducir Muestra</i></button>
                            <?php
                            }
                            ?>
                            <button class="uk-button uk-button-primary uk-margin-top .uk-width-1-1"><i class="far fa-bookmark"></i> Guardar </i></button>
                            <button class="uk-button uk-button-primary uk-margin-top .uk-width-1-1"><i class="fas fa-plus"></i> Añadir a lista </i></button>
                            <?php
                            if ($result['dl'] == 1) {
                            ?>
                            <button class="uk-button uk-button-primary uk-margin-top .uk-width-1-1"><i class="fas fa-arrow-alt-circle-down"></i> Descargar</i></button>
                            <?php
                            }
                            ?>
                        </div>
                    </li>

                    <li class="uk-width-2-3">
                        <h1 class="uk-text-center "><?= $result['name'] ?></h1>
                        <hr class="uk-divider-small uk-text-center">
                        <h3><?= $result['description'] ?></h3>
                        <h3 class="uk-text-small uk-text-primary"><i class="far fa-user"></i> Autor: <?= $result['author'] ?></h3>
                    </li>
                </ul>

            </div>

        </div>
    </div>
<?php
}
?>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>