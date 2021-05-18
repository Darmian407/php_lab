<!-- Head Template -->
<?php echo view('templates/head') ?>
<!-- NavBar -->
<?php echo view('templates/nav') ?>

<div class="uk-background-secondary">
    <div class="uk-container uk-flex uk-flex-center uk-flex-middle uk-height-viewport">
        <div class="uk-card uk-card-default uk-border-rounded uk-width-1-2 uk-animation-scale-up">
            
            <div class="uk-card-body">

                <h2 class="uk-text-center">Register</h2>

                <!-- Message Template -->
                <?php echo view('templates/message') ?>

                <?= form_open('') ?>

                <?php

                $email = array(
                    'name' => 'email',
                    'id' => 'email',
                    'class' => 'uk-input uk-margin-small uk-padding-small uk-border-pill ' . ((isset($errors) && array_key_exists('email', $errors)) ? "uk-form-danger" : ""),
                    'type' => 'text',
                    'placeholder' => 'Enter Email',
                    'value' => set_value('email')
                );

                $nick = array(
                    'name' => 'nick',
                    'id' => 'nick',
                    'class' => 'uk-input uk-margin-small uk-padding-small uk-border-pill ' . ((isset($errors) && array_key_exists('nick', $errors)) ? "uk-form-danger" : ""),
                    'type' => 'text',
                    'placeholder' => 'Enter Nick',
                    'value' => set_value('nick')
                );

                $name = array(
                    'name' => 'name',
                    'id' => 'name',
                    'class' => 'uk-input uk-margin-small uk-padding-small uk-border-pill ' . ((isset($errors) && array_key_exists('name', $errors)) ? "uk-form-danger" : ""),
                    'type' => 'text',
                    'placeholder' => 'Enter Name',
                    'value' => set_value('name')
                );

                $lastName = array(
                    'name' => 'lastName',
                    'id' => 'lastName',
                    'class' => 'uk-input uk-margin-small uk-padding-small uk-border-pill ' . ((isset($errors) && array_key_exists('lastName', $errors)) ? "uk-form-danger" : ""),
                    'type' => 'text',
                    'placeholder' => 'Enter Lastname',
                    'value' => set_value('lastName')
                );

                $birthDate = array(
                    'name' => 'birthDate',
                    'id' => 'birthDate',
                    'class' => 'uk-input uk-margin-small uk-padding-small uk-border-pill ' . ((isset($errors) && array_key_exists('birthDate', $errors)) ? "uk-form-danger" : ""),
                    'type' => 'date',
                    'placeholder' => 'Enter Birth Date',
                    'value' => set_value('birthDate')
                );

                $password = array(
                    'name' => 'password',
                    'id' => 'password',
                    'class' => 'uk-input uk-margin-small uk-padding-small uk-border-pill ' . ((isset($errors) && array_key_exists('password', $errors)) ? "uk-form-danger" : ""),
                    'type' => 'password',
                    'placeholder' => 'Enter Password',
                    'value' => set_value('password')
                );

                $confirmPassword = array(
                    'name' => 'confirmPassword',
                    'id' => 'confirmPassword',
                    'class' => 'uk-input uk-margin-small uk-padding-small uk-border-pill ' . ((isset($errors) && array_key_exists('confirmPassword', $errors)) ? "uk-form-danger" : ""),
                    'type' => 'password',
                    'placeholder' => 'Confirm Password',
                    'value' => set_value('confirmPassword')
                );

                $autor = array(
                    'name' => 'autor',
                    'id' => 'autor',
                    'class' => 'uk-checkbox uk-border-rounded',
                    'type' => 'checkbox',
                    'value' => 'true'
                );

                $submit = array(
                    'class' => 'uk-button uk-button-primary uk-border-pill uk-width-1-1 uk-padding-small uk-text-large uk-margin-top',
                    'type' => 'submit'
                );

                ?>

                <?= form_input($email) ?>

                <?= form_input($nick) ?>

                <?= form_input($name) ?>

                <?= form_input($lastName) ?>

                <?= form_input($birthDate) ?>

                <?= form_input($password) ?>

                <?= form_input($confirmPassword) ?>

                <div class="uk-margin-small">
                    <label for="autor"><?= form_checkbox($autor) ?> Register as Autor</label>
                </div>

                <?= form_button($submit, 'Send') ?>

                <?= form_close() ?>

            </div>

            <div class="uk-card-footer uk-text-center">
                <p>Already registered? <a class="uk-link-heading" href="/login"><strong>Login</strong></a></p>
            </div>
        </div>
    </div>
</div>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>