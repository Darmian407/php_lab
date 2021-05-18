<!-- Head Template -->
<?php echo view('templates/head') ?>
<!-- NavBar -->
<?php echo view('templates/nav') ?>

<div class="uk-container uk-height-viewport" id="container">

        <div class="uk-child-width-expand@l uk-text-center" uk-grid>
            <div id="precio" class="uk-card uk-card-body">
                <h1>Precios</h1>
                <p class="uk-text-muted">Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
            </div>
        </div>    

            <div  class="uk-child-width-expand@l uk-text-center" uk-grid>
                <div>
                    <div class="uk-card uk-card-secondary uk-card-body">
                        <h3>Basic</h3>
                    </div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <li id="money" class="uk-margin-bottom uk-text-large"> $19,99</li>
                        <hr class="uk-divider-small">
                        <li class="uk-margin-bottom"><strong>Free</strong> Setup</li>
                        <hr class="uk-divider-small">
                        <li class="uk-margin-bottom"><strong>24/7</strong> Support</li>
                        <hr class="uk-divider-small">
                        <li class="uk-margin-bottom"><strong>5 GB</strong> File Storage</li>
                        <hr class="uk-divider-small">
                        <button class="uk-button uk-button-default">Comprar</button>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-secondary uk-card-body">
                        <h3>Pro</h3>
                    </div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <li class="uk-margin-bottom uk-text-large">$39,99</li>
                        <hr class="uk-divider-small">
                        <li class="uk-margin-bottom"><strong>Free</strong> Setup</li>
                        <hr class="uk-divider-small">
                        <li class="uk-margin-bottom"><strong>24/7</strong> Support</li>
                        <hr class="uk-divider-small">
                        <li class="uk-margin-bottom"><strong>25 GB</strong> File Storage</li>
                        <hr class="uk-divider-small">
                        <button class="uk-button uk-button-default">Comprar</button>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-secondary uk-card-body">
                        <h3>Premium</h3>
                    </div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <li class="uk-margin-bottom uk-text-large">$79,99</li>
                        <hr class="uk-divider-small">
                        <li class="uk-margin-bottom"><strong>Free</strong> Setup</li>
                        <hr class="uk-divider-small">
                        <li class="uk-margin-bottom"><strong>24/7</strong> Support</li>
                        <hr class="uk-divider-small">
                        <li class="uk-margin-bottom"><strong>50 GB</strong> File Storage</li>
                        <hr class="uk-divider-small">
                        <button class="uk-button uk-button-default">Comprar</button>
                    </div>
                </div>
            </div>

        </div>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>
