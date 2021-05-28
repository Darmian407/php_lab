<!-- Head Template -->
<?php echo view('templates/head') ?>
<!-- NavBar -->
<?php echo view('templates/nav') ?>



<div class="uk-card uk-card-secondary uk-margin-left uk-height-viewport">

    <div class="uk-card">
        <?php
        if (!empty($data)) {
            foreach ($data as $author) {
        ?>
                
                <div class="uk-card uk-card-secondary uk-card-body">
                    <ul uk-accordion>
                        <li class="uk-close">
                            <a class="uk-accordion-title" href="#"><?= $author['name'] ?> <?= $author['lastname'] ?></a>
                            <div class="uk-accordion-content">
                                <p class="uk-margin-bottom">Fecha de nacimiento: <?= $author['birthdate'] ?></p>
                                <p class="uk-margin-bottom">Email: <?= $author['email'] ?></p>
                                <a class="uk-text-small uk-text-primary uk-button uk-button-default" href="/buscar_autor/<?= $author['authorId'] ?>">Pagina del autor</a>
                            </div>
                        </li>
                    </ul>
                </div>

                

    
        <?php
            }
        }
        ?>
    </div>
</div>




<!-- Footer Template -->
<?php echo view('templates/footer') ?>