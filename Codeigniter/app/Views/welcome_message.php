<!-- Head Template -->
<?php echo view('templates/head') ?>
<!-- NavBar -->
<?php echo view('templates/nav') ?>

<div class="uk-container-expand" id="container">

        <div uk-slideshow="animation: push" id="slider">
            <div class="mask"></div>
            <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="min-height: 300; max-height: 600"
                tabindex="-1">

                <ul class="uk-slideshow-items">
                    <li>
                        <img src="https://i.ibb.co/3fcGhDL/Slider.png" alt="" uk-cover>
                        <div class="uk-position-center uk-position-small uk-text-center uk-light">
                            <h3 class="uk-margin-remove">Bottom</h3>
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <button class="uk-button uk-button-default">Leer más</button>
                        </div>

                    </li>
                    <li>
                        <img src="https://i.ibb.co/3fcGhDL/Slider.png" alt="" uk-cover>
                        <div class="uk-position-center uk-position-small uk-text-center uk-light">
                            <h3 class="uk-margin-remove">Bottom</h3>
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <button class="uk-button uk-button-default">Leer más</button>
                        </div>
                    </li>
                    <li>
                        <img src="https://i.ibb.co/3fcGhDL/Slider.png" alt="" uk-cover>
                        <div class="uk-position-center uk-position-small uk-text-center uk-light">
                            <h3 class="uk-margin-remove">Bottom</h3>
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <button class="uk-button uk-button-default">Leer más</button>
                        </div>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                    uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                    uk-slideshow-item="next"></a>

            </div>

            <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>


    </div>

    </div>


    <div class="uk-container uk-margin-top uk-height-viewport" id="container">
        <div uk-filter="target: .js-filter">

            <ul class="uk-subnav uk-subnav-pill">
                <li class="uk-active" uk-filter-control><a href="#">Todos</a></li>
                <li uk-filter-control="[data-color='white']"><a href="#">Documentos</a></li>
                <li uk-filter-control="[data-color='blue']"><a href="#">Audiolibros</a></li>
                <li uk-filter-control="[data-color='black']"><a href="#">Libros</a></li>
            </ul>

            <ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid>

                <li data-color="white">
                    <div class="uk-card uk-card-default uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li data-color="blue">
                    <div class="uk-card uk-card-primary uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li data-color="white">
                    <div class="uk-card uk-card-default uk-card-body">
                        <ul uk-accordion>
                        <li class="uk-close">
                            <a class="uk-accordion-title" href="#">Item 1</a>
                            <div class="uk-accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua .</p>
                                <button class="uk-button uk-button-default">Detalles</button>
                            </div>
                        </li>
                    </ul></div>
                </li>
                <li data-color="white">
                    <div class="uk-card uk-card-default uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li data-color="black">
                    <div class="uk-card uk-card-secondary uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li data-color="black">
                    <div class="uk-card uk-card-secondary uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li data-color="blue">
                    <div class="uk-card uk-card-primary uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li data-color="black">
                    <div class="uk-card uk-card-secondary uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li data-color="blue">
                    <div class="uk-card uk-card-primary uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li data-color="white">
                    <div class="uk-card uk-card-default uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li data-color="blue">
                    <div class="uk-card uk-card-primary uk-card-body">
                        <ul uk-accordion>
                            <li class="uk-close">
                                <a class="uk-accordion-title" href="#">Item 1</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua .</p>
                                    <button class="uk-button uk-button-default">Detalles</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li data-color="black">
                    <div class="uk-card uk-card-secondary uk-card-body"><ul uk-accordion>
                        <li class="uk-close">
                            <a class="uk-accordion-title" href="#">Item 1</a>
                            <div class="uk-accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua .</p>
                                <button class="uk-button uk-button-default">Detalles</button>
                            </div>
                        </li>
                    </ul></div>
                </li>
            </ul>

        </div>

    </div>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>
