<!-- Head Template -->
<?php echo view('templates/head') ?>

<div class="uk-background-secondary">
    <div class="uk-container uk-flex uk-flex-center uk-flex-middle uk-height-viewport">
        <div class="uk-card uk-card-default uk-border-rounded uk-width-1-2 uk-animation-scale-up">

            <div class="uk-card-body">

                <h2 class="uk-text-center">Crear Recurso</h2>

                <!-- Message Template -->
                <?php echo view('templates/message') ?>

                <?= form_open_multipart('') ?>

                <?php

                $nombre = array(
                    'name' => 'nombre',
                    'id' => 'nombre',
                    'class' => 'uk-input uk-margin-small uk-padding-small uk-border-pill ' . ((isset($errors) && array_key_exists('nombre', $errors)) ? "uk-form-danger" : ""),
                    'type' => 'text',
                    'placeholder' => 'Enter Resource Name',
                    'value' => set_value('nombre')
                );

                $descripcion = array(
                    'name' => 'descripcion',
                    'id' => 'descripcion',
                    'class' => 'uk-input uk-margin-small uk-padding-small uk-border-pill ' . ((isset($errors) && array_key_exists('descripcion', $errors)) ? "uk-form-danger" : ""),
                    'type' => 'text',
                    'placeholder' => 'Enter Description',
                    'value' => set_value('descripcion')
                );

                $imagen = array(
                    'name' => 'imagen',
                    'id' => 'imagen',
                    'class' => 'uk-input uk-margin-small uk-padding-small uk-border-pill ' . ((isset($errors) && array_key_exists('imagen', $errors)) ? "uk-form-danger" : ""),
                    'type' => 'text',
                    'placeholder' => 'Enter Image URL',
                    'value' => set_value('imagen')
                );

                $descargable = array(
                    'name' => 'descargable',
                    'id' => 'descargable',
                    'class' => 'uk-checkbox uk-border-rounded',
                    'type' => 'checkbox',
                    'value' => 'true'
                );

                $submit = array(
                    'class' => 'uk-button uk-button-primary uk-border-pill uk-width-1-1 uk-padding-small uk-text-large uk-margin-top',
                    'type' => 'submit'
                );

                ?>

                <?= form_input($nombre) ?>

                <?= form_input($descripcion) ?>

                <?= form_input($imagen) ?>

                <?= form_dropdown('tipo', $types, [], ['class' => 'uk-select uk-margin-small uk-border-pill']) ?>

                <?= form_multiselect('categories[]', $categories, [], ['class' => 'uk-select uk-margin-small uk-border-rounded']) ?>

                <div class="uk-margin-small">
                    <label for="descargable"><?= form_checkbox($descargable) ?>Downloadable?</label>
                </div>

                <div class="uk-margin-small">
                    <div uk-form-custom="target: true">
                        <input type="file" name="file" id="file">
                        <input class="uk-input uk-border-pill" type="text" placeholder="Select file" disabled>
                    </div>
                </div>

                <?= form_button($submit, 'Send') ?>

                <?= form_close() ?>

            </div>

        </div>
    </div>
</div>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>