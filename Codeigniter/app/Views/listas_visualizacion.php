<!-- Head Template -->
<?php echo view('templates/head') ?>
<!-- NavBar -->
<?php echo view('templates/nav') ?>

<div class="uk-margin-left uk-height-viewport">
    <div class="uk-margin-bottom uk-margin-top uk-text-center">
        <?php
        if (isset($alert)) {
            echo $alert;
        }
        ?>

        <h1><?= $message ?></h1>
        <button class="uk-button uk-button-primary uk-margin-small-right" type="button" uk-toggle="target: #my-id">Agregar Lista</button>
    </div>
    <ul uk-accordion>
        <?php
        if (!empty($playlists)) {
            foreach ($playlists as $playlist) {
        ?>
                <li class="uk-close">
                    <a class="uk-accordion-title" href="#">
                        <h3><?= $playlist['name'] ?></h3>
                    </a>
                    <div class="uk-accordion-content">
                        <div class="uk-child-width-expand@s uk-text-center" uk-grid>
                            <?php
                            foreach ($playlist['resources'] as $resource) {
                            ?>
                                <div class="uk-card uk-card-default uk-card-body">
                                    <ul uk-accordion>
                                        <li class="uk-close">
                                            <div class="uk-flex uk-accordion-title">
                                                <img class="uk-border-rounded uk-margin-small uk-margin-right" data-src="<?= $resource['image'] ?>" width="50" height="70" alt="" uk-img>
                                                <a class="uk-accordion-title" href="#"><?= $resource['name'] ?></a>
                                            </div>
                                            <div class="uk-accordion-content">
                                                <p><?= $resource['description'] ?></p>
                                                <a class="uk-text-center uk-button uk-button-default" href="/buscar_id/<?= $resource['id'] ?>">Detalles</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </li>
        <?php }
        } ?>
    </ul>

</div>

<?php echo view('playlist') ?>
<!-- Footer Template -->
<?php echo view('templates/footer') ?>