<div id="my-id" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Modal Title</h2>
        </div>
        <div class="uk-modal-body">
            <!-- Message Template -->
            <?= form_open('/listas_visualizacion/addLista') ?>

            <?php echo view('templates/message') ?>
            <?php

            $name = array(
                'name' => 'name',
                'id' => 'name',
                'class' => 'uk-input uk-margin-small uk-padding-small uk-border-pill ' . ((isset($errors) && array_key_exists('email', $errors)) ? "uk-form-danger" : ""),
                'type' => 'text',
                'placeholder' => 'Enter Name',
            );

            $submit = array(
                'class' => 'uk-button uk-button-primary uk-border-pill uk-width-1-1',
                'type' => 'submit'
            );

            ?>
            <div class="uk-margin">
                <?= form_input($name) ?>
            </div>

        </div>
        <div class="uk-modal-footer uk-text-right">
            <?= form_button($submit, 'Send') ?>
            <?= form_close() ?>
        </div>
    </div>
</div>