<!-- Head Template -->
<?php echo view('templates/head') ?>

<!-- NavBar -->
<?php echo view('templates/nav') ?>

<?php
$session = \Config\Services::session();

$user = $session->get('user');
?>

<!--Web-->
<div class="uk-grid uk-child-width-expand@s uk-text-center uk-height-viewport" uk-grid>

    <?php
    if (!empty($result)) {
    ?>

        <div class="uk-card uk-card uk-card-body uk-text-center uk-height-viewport uk-margin-left">
            <h1>Recursos Guardados</h1>
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
                                <div class="uk-card uk-card-secondary">
                                    <ul uk-accordion>
                                        <li class="uk-close">
                                            <div class="uk-flex uk-accordion-title">
                                                <img class="uk-border-rounded uk-margin-small uk-margin-right" data-src="<?= $recurso['image'] ?>" width="50" height="70" alt="" uk-img>
                                                <a class="uk-accordion-title" href="#"><?= $recurso['name'] ?></a>
                                            </div>
                                            <div class="uk-accordion-content">
                                                <a class="uk-button uk-button-default" href="/buscar_id/<?= $recurso['resourceId'] ?>">Detalles</a>
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

    <?php
    }
    ?>

    <div>
        <div class="uk-card uk-card-secondary uk-margin-left">
            <div class="uk-card-body">

                <h3 class="uk-card-title">Datos del <?= $user['DTYPE'] ?></h3>

                <img class="uk-border-rounded uk-margin-small" data-src="<?= ($user['image'] ? $user['image'] : 'https://www.pngkey.com/png/detail/114-1149878_setting-user-avatar-in-specific-size-without-breaking.png') ?>" width="300px" height="" alt="" uk-img>



                <?php

                $email = array(
                    'name' => 'email',
                    'id' => 'email',
                    'class' => 'uk-input uk-margin-small uk-padding-small',
                    'type' => 'text',
                    'placeholder' => 'Enter Email',
                    'value' => $user['email'],
                    'readonly' => '',
                );

                $nick = array(
                    'name' => 'nick',
                    'id' => 'nick',
                    'class' => 'uk-input uk-margin-small uk-padding-small',
                    'type' => 'text',
                    'placeholder' => 'Enter Nick',
                    'value' => $user['nick'],
                    'readonly' => '',
                );

                $name = array(
                    'name' => 'name',
                    'id' => 'name',
                    'class' => 'uk-input uk-margin-small uk-padding-small',
                    'type' => 'text',
                    'placeholder' => 'Enter Name',
                    'value' => $user['name'],
                    'readonly' => '',
                );

                $lastName = array(
                    'name' => 'lastName',
                    'id' => 'lastName',
                    'class' => 'uk-input uk-margin-small uk-padding-small',
                    'type' => 'text',
                    'placeholder' => 'Enter Lastname',
                    'value' => $user['lastName'],
                    'readonly' => '',
                );

                $birthDate = array(
                    'name' => 'birthDate',
                    'id' => 'birthDate',
                    'class' => 'uk-input uk-margin-small uk-padding-small',
                    'type' => 'date',
                    'placeholder' => 'Enter Birth Date',
                    'value' => $user['birthDate'],
                    'readonly' => '',
                );



                ?>

                <?= form_input($email) ?>

                <?= form_input($nick) ?>

                <?= form_input($name) ?>

                <?= form_input($lastName) ?>

                <?= form_input($birthDate) ?>

                <?php

            if ($user['DTYPE'] == 'Autor') {
            ?>
                <div>
                    <h1>Ganancias: US$ <?= $profit ?></h1>
                </div>
                
            <?php
            } 
            ?>
            </div>

            <?php
            if ($user['DTYPE'] == 'Autor') {
            ?>
                <a class="uk-text-center uk-button uk-button-default" href="/followers/<?= $user['id'] ?>">Seguidores</a>
            <?php
            } else {
            ?>
                <a class="uk-text-center uk-button uk-button-default" href="/listas_visualizacion/<?= $user['id'] ?>">Listas</a>
            <?php } ?>

        </div>

    </div>
</div>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>