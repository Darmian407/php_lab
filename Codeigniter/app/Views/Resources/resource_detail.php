<!-- Head Template -->
<?php echo view('templates/head') ?>

<!-- NavBar -->
<?php echo view('templates/nav') ?>

<?php
    // Session Service
    $session = \Config\Services::session();

    $user = $session->get('user');

if (!empty($result)) {
?>
    <div class="uk-container uk-height-viewport" id="container">
        <div>
            <div class="uk-card  uk-card-body ">
                <ul class="js-filter uk-card uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
                    <li class="uk-width-1-3  uk-text-center">
                        <div class=" uk-card uk-card-body">
                            <img data-src="<?= $result['image'] ?>" width="400" height="200" alt="" uk-img>
                            
                                <a class="uk-button uk-button-primary uk-margin-top uk-width-1-1" href="#modal-container" uk-toggle><?=$message?></i></a>
                            
                            <?php                          
                            if($user && $user['DTYPE'] == 'Cliente'){
                            ?>
                            <a class="uk-button uk-button-primary uk-margin-top .uk-width-1-1" href="/add_favourite/<?= $result['id'] ?>"><i class="far fa-bookmark"></i> Guardar </i></a>
                            <a class="uk-button uk-button-primary uk-margin-top .uk-width-1-1" href="#modal-sections" uk-toggle><i class="fas fa-plus"></i> Añadir a lista </i></a>
                            <?php
                            }
                            if ($result['downloadable'] && $result['rSub'] && $subscribed) {
                                if ($result['type'] == 'AudioLibro' || $result['type'] == 'Podcast') {
                            ?>
                            
                                <a class="uk-button uk-button-primary uk-margin-top .uk-width-1-1" href="/uploads/<?= $result['filename'] ?>" download="<?= $result['name'] ?>.mp3"><i class="fas fa-arrow-alt-circle-down"></i> Descargar</i></a>
                            <?php
                                }else{
                            ?>
                                <a class="uk-button uk-button-primary uk-margin-top .uk-width-1-1" href="/uploads/<?= $result['filename'] ?>" download="<?= $result['name'] ?>.pdf"><i class="fas fa-arrow-alt-circle-down"></i> Descargar</i></a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </li>

                    <li class="uk-width-2-3">
                        <h1 class="uk-text-center "><?= $result['name'] ?></h1>
                        <hr class="uk-divider-small uk-text-center">
                        <h3><?= $result['description'] ?></h3>
                        <a class="uk-text-small uk-text-primary" href="/buscar_autor/<?= $result['authorId'] ?>"><i class="far fa-user"></i> Autor: <?= $result['author'] ?></a>

                    </li>
                </ul>

            </div>

        </div>
    </div>

   
    <?php
    if ($result['type'] == 'AudioLibro' || $result['type'] == 'Podcast') {
    ?>
        <div id="modal-vistaprevia" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <h2 class="uk-modal-title">Muestra de audio</h2>
                <audio oncontextmenu="return false;" controls controlsList="nodownload">
                    <source src="/uploads/<?= $result['filename'] ?>" type="audio/mpeg">
                </audio>
            </div>
        </div>
    
    <?php } else { ?>
        <div id="modal-vistaprevia" class="uk-modal-container" uk-modal>
            <div class="uk-modal-dialog uk-modal-body" style="height: 100%;">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <h2 class="uk-modal-title">Vista Previa</h2>
                <embed src="/uploads/<?= $result['filename'] ?>#toolbar=0&navpanes=0&scrollbar=0&page=1" style="width: 100%; height: 80%;">
            </div>
        </div>
    <?php } ?>

    <?php
    if ($user && $user['DTYPE'] == 'Cliente') {
    ?>
        <div id="modal-sections" uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <div class="uk-modal-header">
                    <h2 class="uk-modal-title">Modal Title</h2>
                </div>
                <div class="uk-modal-body">
                    <!-- Message Template -->
                    <?php echo view('templates/message') ?>

                    <?= form_open('/addToLista/' . $result['id']) ?>

                    <?php

                    $playlistModel = new \App\Models\PlaylistModel();

                    $playlists = [];
                    // Bring types from database
                    $result = $playlistModel->getPlaylists($user['id']);

                    foreach ($result as $playlist) {
                        $playlists[$playlist['id']] = $playlist['name'];
                    };

                    $submit = array(
                        'class' => 'uk-button uk-button-primary uk-border-pill uk-width-1-1',
                        'type' => 'submit'
                    );
                    ?>
                    <?= form_dropdown('listas', $playlists, [], ['class' => 'uk-select uk-margin-small uk-border-pill']) ?>

                </div>
                <div class="uk-modal-footer uk-text-right">
                    <?= form_button($submit, 'Send') ?>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

<?php
} else {
?>
    <h1>No se encontro el recurso</h1>
<?php
}
?>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>