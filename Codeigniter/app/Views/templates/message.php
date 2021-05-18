<?php if (isset($errors)) { ?>
    <div class="uk-alert-danger uk-border-rounded uk-animation-slide-top-medium" uk-alert>
        <a class="uk-alert-close" uk-close></a>

        <?php foreach ($errors as $error) { ?>
            <p><strong><?= $error ?></strong></p>
        <?php } ?>

    </div>
<?php } ?>