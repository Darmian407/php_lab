  <div class="uk-background-secondary">
    <div class="uk-container uk-flex uk-flex-center uk-flex-middle uk-height-viewport">
      <div class="uk-card uk-card-default uk-card-body uk-width-1-2">
        <h2 class="uk-text-center">Register</h2>

        <?php
        if (isset($message)) {
        ?>

          <div class="alert alert-danger alert-dismissible fade show rounded-pill mb-4" role="alert">
            <strong>Error:</strong> <?= esc($message) ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

        <?php
        }
        ?>

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

        $name = array(
          'name' => 'name',
          'id' => 'name',
          'class' => 'uk-input uk-margin',
          'type' => 'text',
          'placeholder' => 'Enter Name',
          'required' => 'true'
        );

        $lastname = array(
          'name' => 'lastname',
          'id' => 'lastname',
          'class' => 'uk-input uk-margin',
          'type' => 'text',
          'placeholder' => 'Enter Lastname',
          'required' => 'true'
        );

        $nick = array(
          'name' => 'nick',
          'id' => 'nick',
          'class' => 'uk-input uk-margin',
          'type' => 'text',
          'placeholder' => 'Enter Nick',
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
          'class' => 'uk-button uk-button-secondary uk-width-1-1',
          'type' => 'submit'
        );

        ?>

        <div class="form-group">
          <?= form_input($email) ?>
        </div>

        <div class="form-group">
          <?= form_input($name) ?>
        </div>

        <div class="form-group">
          <?= form_input($lastname) ?>
        </div>

        <div class="form-group">
          <?= form_input($nick) ?>
        </div>

        <div class="form-group mt-4">
          <?= form_input($password) ?>
        </div>

        <?= form_button($submit, 'Send') ?>

        <?= form_close() ?>

      </div>
    </div>
  </div>