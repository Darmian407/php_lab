<!-- Head Template -->
<?php echo view('templates/head') ?>

<div class="uk-background-secondary">
    <div class="uk-container uk-flex uk-flex-center uk-flex-middle uk-height-viewport">
        <div class="uk-card uk-card-default uk-width-1-2">
            
            <div class="uk-card-body">

                <h2 class="uk-text-center">Register</h2>

                <!-- Message Template -->
                <?php echo view('templates/message') ?>

                <?= form_open('') ?>

                <?php

                $email = array(
                    'name' => 'email',
                    'id' => 'email',
                    'class' => 'uk-input uk-margin-small ' . ((isset($errors) && array_key_exists('email', $errors)) ? "uk-form-danger" : ""),
                    'type' => 'text',
                    'placeholder' => 'Enter Email',
                    'value' => set_value('email')
                );

                $nick = array(
                    'name' => 'nick',
                    'id' => 'nick',
                    'class' => 'uk-input uk-margin-small ' . ((isset($errors) && array_key_exists('nick', $errors)) ? "uk-form-danger" : ""),
                    'type' => 'text',
                    'placeholder' => 'Enter Nick',
                    'value' => set_value('nick')
                );

                $name = array(
                    'name' => 'name',
                    'id' => 'name',
                    'class' => 'uk-input uk-margin-small ' . ((isset($errors) && array_key_exists('name', $errors)) ? "uk-form-danger" : ""),
                    'type' => 'text',
                    'placeholder' => 'Enter Name',
                    'value' => set_value('name')
                );

                $lastName = array(
                    'name' => 'lastName',
                    'id' => 'lastName',
                    'class' => 'uk-input uk-margin-small ' . ((isset($errors) && array_key_exists('lastName', $errors)) ? "uk-form-danger" : ""),
                    'type' => 'text',
                    'placeholder' => 'Enter Lastname',
                    'value' => set_value('lastName')
                );

                $password = array(
                    'name' => 'password',
                    'id' => 'password',
                    'class' => 'uk-input uk-margin-small ' . ((isset($errors) && array_key_exists('password', $errors)) ? "uk-form-danger" : ""),
                    'type' => 'password',
                    'placeholder' => 'Enter Password',
                );

                $confirmPassword = array(
                    'name' => 'confirmPassword',
                    'id' => 'confirmPassword',
                    'class' => 'uk-input uk-margin-small',
                    'type' => 'password',
                    'placeholder' => 'Confirm Password',
                );

                $autor = array(
                    'name' => 'autor',
                    'id' => 'autor',
                    'class' => 'uk-checkbox',
                    'type' => 'checkbox',
                );

                $submit = array(
                    'class' => 'uk-button uk-button-primary uk-width-1-1 uk-margin-top',
                    'type' => 'submit'
                );

                ?>

                <?= form_input($email) ?>

                <?= form_input($nick) ?>

                <?= form_input($name) ?>

                <?= form_input($lastName) ?>

                <?= form_input($password) ?>

                <?= form_input($confirmPassword) ?>

                <div class="uk-margin-small">
                    <label for="autor"><?= form_checkbox($autor) ?> Register as Autor</label>
                </div>

                <?= form_button($submit, 'Send') ?>

                <?= form_close() ?>

            </div>

            <div class="uk-card-footer uk-text-center">
                <p>Already registered? <a class="uk-link-heading" href="/login">Login</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>