<!-- Head Template -->
<?php echo view('templates/head') ?>
<!-- NavBar -->
<?php echo view('templates/nav') ?>



<div class="uk-card uk-card-secondary uk-margin-left uk-height-viewport">
    <div class="uk-card">
        <?php
        if (!empty($data)) {
            foreach ($data as $client) {
        ?>
                <h3 class="uk-card-title">Datos de <?= $client['name'] ?> <?= $client['lastname'] ?></h3>

                <img class="uk-border-rounded uk-margin-small" data-src="<?= $client['image'] ?>" width="300px" height="" alt="" uk-img>

                <div class="uk-card uk-card-default uk-card">
                    <li class="uk-margin-bottom">Nick: <?= $client['nick'] ?></li>
                    <li class="uk-margin-bottom">Fecha de nacimiento: <?= $client['birthdate'] ?></li>
                    <li class="uk-margin-bottom">Email: <?= $client['email'] ?></li>
                </div>
                
    </div>
<?php
            }
        }
?>

</div>




<!-- Footer Template -->
<?php echo view('templates/footer') ?>