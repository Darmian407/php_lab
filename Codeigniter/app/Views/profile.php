<!-- Head Template -->
<?php echo view('templates/head') ?>

<!-- NavBar -->
<?php echo view('templates/nav') ?>

<?php
$session = \Config\Services::session();

$user = $session->get('user');
?>

<!--Web-->
<div class="uk-grid-medium uk-visible@s uk-child-width-expand@s uk-text-center uk-height-viewport" uk-grid>

    <?php
    if (!empty($result)) {
    ?>

        <div class="uk-card uk-card uk-card-body uk-text-center uk-height-viewport">
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
                    <li uk-filter-control><a href="/listas_visualizacion/<?= $user['id'] ?>">Listas</a></li>

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

                <img class="uk-border-rounded uk-margin-small" data-src="https://www.pngkey.com/png/detail/114-1149878_setting-user-avatar-in-specific-size-without-breaking.png" width="300px" height="" alt="" uk-img>

                <?= form_open('') ?>

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
                );

                $lastName = array(
                    'name' => 'lastName',
                    'id' => 'lastName',
                    'class' => 'uk-input uk-margin-small uk-padding-small',
                    'type' => 'text',
                    'placeholder' => 'Enter Lastname',
                    'value' => $user['lastName'],
                );

                $birthDate = array(
                    'name' => 'birthDate',
                    'id' => 'birthDate',
                    'class' => 'uk-input uk-margin-small uk-padding-small',
                    'type' => 'date',
                    'placeholder' => 'Enter Birth Date',
                    'value' => $user['birthDate'],
                );

                $submit = array(
                    'class' => 'uk-button uk-button-primary uk-width-1-1 uk-padding-small uk-text-large uk-margin-top',
                    'type' => 'submit'
                );

                ?>

                <?= form_input($email) ?>

                <?= form_input($nick) ?>

                <?= form_input($name) ?>

                <?= form_input($lastName) ?>

                <?= form_input($birthDate) ?>

                <?= form_button($submit, 'Update') ?>

                <?= form_close() ?>
            </div>

            <a class="uk-text-center uk-button uk-button-default" href="/followers/<?= $user['id'] ?>">Seguidores</a>
        </div>

    </div>
</div>


<!--Movil-->
<div class="uk-container ">
    <div class="uk-container uk-hidden@s">

        <div class="uk-card uk-card uk-card-body">
            <h1 class="uk-text-center"> Datos del usuario</h1>
            <div>
                <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-text-center">
                    <img data-src="https://www.pngkey.com/png/detail/114-1149878_setting-user-avatar-in-specific-size-without-breaking.png" width="400" height="200" alt="" uk-img>
                </div>
                <div class="uk-card uk-card-default uk-card-body">
                    <li class="uk-margin-bottom">Nombre</li>
                    <hr class="uk-divider-small">
                    <li class="uk-margin-bottom">Nick</li>
                    <hr class="uk-divider-small">
                    <li class="uk-margin-bottom">Email</li>
                    <hr class="uk-divider-small">
                    <li class="uk-margin-bottom">Nacimiento</li>


                </div>
            </div>
        </div>
    </div>

    <div class="uk-card uk-card uk-card-body uk-hidden@s">
        <h1 class="uk-text-center">Recursos guardados</h1>
        <div uk-filter="target: .js-filter">

            <ul class="uk-subnav uk-subnav-pill">
                <li class="uk-active" uk-filter-control><a href="#">Todos</a></li>
                <li uk-filter-control="[data-color='white']"><a href="#">Documentos</a></li>
                <li uk-filter-control="[data-color='blue']"><a href="#">Audiolibros</a></li>
                <li uk-filter-control="[data-color='black']"><a href="#">Libros</a></li>
            </ul>

            <ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid>

                <li data-color="white">
                    <div class="uk-card uk-card-default uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li data-color="blue">
                    <div class="uk-card uk-card-primary uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li data-color="white">
                    <div class="uk-card uk-card-default uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li data-color="white">
                    <div class="uk-card uk-card-default uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li data-color="black">
                    <div class="uk-card uk-card-secondary uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li data-color="black">
                    <div class="uk-card uk-card-secondary uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li data-color="blue">
                    <div class="uk-card uk-card-primary uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li data-color="black">
                    <div class="uk-card uk-card-secondary uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

        </div>
    </div>
</div>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>