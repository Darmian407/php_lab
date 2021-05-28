<!-- Head Template -->
<?php echo view('templates/head') ?>
<!-- NavBar -->
<?php echo view('templates/nav') ?>



<div class="uk-card uk-card-secondary uk-margin-left uk-height-viewport">
    <div class="uk-card">
        <h1 class="uk-text-center">Seguidores</h1>
        <?php
        if (!empty($data)) {
            foreach ($data as $client) {
        ?>
                <ul uk-accordion>
                        <li class="uk-close">
                            <a class="uk-accordion-title" href="#"><?= $client['name'] ?> <?= $client['lastname'] ?></a>
                            <div class="uk-accordion-content">
                                <p class="uk-margin-bottom">Nick: <?= $client['nick'] ?></p>
                                <p class="uk-margin-bottom">Fecha de nacimiento: <?= $client['birthdate'] ?></p>
                                <p class="uk-margin-bottom">Email: <?= $client['email'] ?></p>
                            </div>
                        </li>
                    </ul>
    </div>
<?php
            }
        }
?>

</div>




<!-- Footer Template -->
<?php echo view('templates/footer') ?>