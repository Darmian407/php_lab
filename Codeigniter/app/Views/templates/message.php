<?php
if (isset($message) && isset($type)) {
?>

    <div class="uk-alert-<?= esc($type) ?> uk-margin-remove" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <strong><?= ucwords(esc($type)) ?>:</strong> <?= esc($message) ?>
    </div>

<?php
}
?>