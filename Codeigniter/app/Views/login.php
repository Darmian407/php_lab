<!-- Head Template -->
<?php echo view('templates/head') ?>

<div class="uk-background-secondary">
    <div class="uk-container uk-flex uk-flex-center uk-flex-middle uk-height-viewport">
        <div class="uk-card uk-card-default uk-border-rounded uk-width-1-2 uk-animation-scale-up">

            <div class="uk-card-body">

                <h2 class="uk-text-center">Welcome back!</h2>

                <!-- Message Template -->
                <?php echo view('templates/message') ?>

                <?= form_open('') ?>

                <?php

                $email = array(
                    'name' => 'email',
                    'id' => 'email',
                    'class' => 'uk-input uk-margin-small uk-padding-small uk-border-pill ' . ((isset($errors) && array_key_exists('email', $errors)) ? "uk-form-danger" : ""),
                    'type' => 'email',
                    'placeholder' => 'Enter Email',
                    'value' => set_value('email')
                );

                $password = array(
                    'name' => 'password',
                    'id' => 'password',
                    'class' => 'uk-input uk-margin-small uk-padding-small uk-border-pill ' . ((isset($errors) && array_key_exists('password', $errors)) ? "uk-form-danger" : ""),
                    'type' => 'password',
                    'placeholder' => 'Enter Password',
                );

                $submit = array(
                    'class' => 'uk-button uk-button-primary uk-border-pill uk-width-1-1 uk-padding-small uk-text-large uk-margin-top',
                    'type' => 'submit'
                );

                ?>

                <?= form_input($email) ?>

                <?= form_input($password) ?>

                <?= form_button($submit, 'Sign in') ?>

                <?= form_close() ?>

            </div>

            <div class="uk-card-footer uk-text-center">
                <p>Not registered? <a class="uk-link-heading" href="/register"><strong>Register</strong></a></p>
            </div>
        </div>
    </div>
</div>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>