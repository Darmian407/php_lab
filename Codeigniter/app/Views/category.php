<!-- Head Template -->
<?php echo view('templates/head') ?>

<!-- Nav Template -->
<?php echo view('templates/nav') ?>

<?php
    function printChildCategories($categories){
        return array_map(function ($category){
            return '<li><a onclick="myFunction(event)" id="' . $category['id'] . '" href="/category/' . $category['id'] . '">' . $category['name'] . '</a><ul>' . implode(" ", printChildCategories($category['child'])) . '</ul></li>';
        }, $categories);
    }
?>

<select name="categories[]" class="uk-select uk-margin-small uk-border-rounded" multiple="multiple" id="categories" disabled></select>

<div class="uk-width-1-2@s uk-width-2-5@m uk-height-viewport">
    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
        <?php
        foreach ($categories as $category) {
        ?>
            <li>
                <a onclick="myFunction(event)" id="<?= $category['id'] ?>" href="/category/<?= $category['id'] ?>"><?= $category['name'] ?></a>
                <ul class="uk-nav-sub">
                    <?= implode(" ", printChildCategories($category['child'])) ?>
                </ul>
            </li>
        <?php
        }
        ?>
    </ul>
</div>

<script>
    let cats = [];

    function myFunction (event) {
        event.preventDefault();
        let name = event.target.innerHTML;
        let id = event.target.id;
        let categories = document.getElementById('categories');

        if(cats.find(category => category.id == id)){
            cats = cats.filter(category => category.id != id);
        } else {
            cats.push({id, name});
        }
        
        categories.innerHTML = "";
        cats.forEach(category => {
            categories.innerHTML += `<option selected value="${category.id}">${category.name}</option>`;
        });
    }
</script>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>