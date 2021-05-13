<div class="uk-background-secondary">
    <div class="uk-container uk-flex uk-flex-center uk-flex-middle uk-height-viewport">
        <div class="uk-card uk-card-default uk-card-body uk-width-1-2">
            <h2 class="uk-text-center">Welcome back!</h2>

            <?= form_open('') ?>

            <?php

            $email = array(
                'name' => 'email',
                'id' => 'email',
                'class' => 'uk-input uk-margin',
                'type' => 'email',
                'placeholder' => 'Enter Email',
                'required' => 'true'
            );

            $password = array(
                'name' => 'password',
                'id' => 'password',
                'class' => 'uk-input uk-margin',
                'type' => 'password',
                'placeholder' => 'Enter Password',
                'required' => 'true'
            );

            $submit = array(
                'class' => 'uk-button uk-button-secondary uk-button-large uk-width-1-1',
                'type' => 'submit'
            );

            ?>

            <div class="form-group">
                <?= form_input($email) ?>
            </div>

            <div class="form-group mt-4">
                <?= form_input($password) ?>
            </div>

            <?= form_button($submit, 'Sign in') ?>

            <?= form_close() ?>

        </div>
    </div>
</div>