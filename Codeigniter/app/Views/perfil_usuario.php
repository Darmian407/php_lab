<!-- Head Template -->
<?php echo view('templates/head') ?>
<!-- NavBar -->
<?php echo view('templates/nav') ?>

    <!--Web-->
    <div class="uk-flex uk-visible@s uk-child-width-1-2@s uk-height-viewport">
        <div class="uk-card uk-card uk-card-body uk-text-center ">
            <h1>Recursos guardados</h1>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt
                                            ut labore et dolore magna aliqua .</p>
                                        <button class="uk-button uk-button-default">Detalles</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>

            </div>
        </div>

        <div class="uk-card uk-card uk-card-body uk-margin-left">
            <h1 class="uk-text-center"> Datos del usuario</h1>
            <div>
                <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-text-center">
                    <img data-src="https://www.pngkey.com/png/detail/114-1149878_setting-user-avatar-in-specific-size-without-breaking.png"
                        width="400" height="200" alt="" uk-img>
                </div>
                <div class="uk-card uk-card-default uk-card-body">
                    <li class="uk-margin-bottom">Nombre</li>
                    <hr class="uk-divider-small">
                    <li class="uk-margin-bottom">Nick</li>
                    <hr class="uk-divider-small">
                    <li class="uk-margin-bottom">Email</li>
                    <hr class="uk-divider-small">
                    <li class="uk-margin-bottom">Nacimiento</li>


                </div>
            </div>
        </div>
    </div>

    </div>

    <!--Movil-->
    <div class="uk-container ">
        <div class="uk-container uk-hidden@s">

            <div class="uk-card uk-card uk-card-body">
                <h1 class="uk-text-center"> Datos del usuario</h1>
                <div>
                    <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-text-center">
                        <img data-src="https://www.pngkey.com/png/detail/114-1149878_setting-user-avatar-in-specific-size-without-breaking.png"
                            width="400" height="200" alt="" uk-img>
                    </div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <li class="uk-margin-bottom">Nombre</li>
                        <hr class="uk-divider-small">
                        <li class="uk-margin-bottom">Nick</li>
                        <hr class="uk-divider-small">
                        <li class="uk-margin-bottom">Email</li>
                        <hr class="uk-divider-small">
                        <li class="uk-margin-bottom">Nacimiento</li>


                    </div>
                </div>
            </div>
        </div>

        <div class="uk-card uk-card uk-card-body uk-hidden@s">
            <h1 class="uk-text-center">Recursos guardados</h1>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt
                                            ut labore et dolore magna aliqua .</p>
                                        <button class="uk-button uk-button-default">Detalles</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>

            </div>
        </div>
    </div>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>