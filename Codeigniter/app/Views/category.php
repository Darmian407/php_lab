<!-- Head Template -->
<?php echo view('templates/head') ?>

<!-- Nav Template -->
<?php echo view('templates/nav') ?>

<?php
    function printChildCategories($categories){
        return array_map(function ($category){
            return '<li><a id="' . $category['id'] . '" href="/buscar_recursos_categoria/' . $category['id'] . '">' . $category['name'] . '</a><ul>' . implode(" ", printChildCategories($category['child'])) . '</ul></li>';
        }, $categories);
    }
?>

<div class="uk-width-1-2@s uk-width-2-5@m uk-height-viewport">
    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
        <?php
        foreach ($categories as $category) {
        ?>
            <li>
                <a  id="<?= $category['id'] ?>" href="/buscar_recursos_categoria/<?= $category['id'] ?>"><?= $category['name'] ?></a>
                <ul class="uk-nav-sub">
                    <?= implode(" ", printChildCategories($category['child'])) ?>
                </ul>
            </li>
        <?php
        }
        ?>
    </ul>
</div>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>