<!-- Head Template -->
<?php echo view('templates/head') ?>

<!-- NavBar -->
<?php echo view('templates/nav') ?>

<div class="uk-container uk-height-viewport" id="container">

    <div>
        <div class="uk-card  uk-card-body ">
            <ul class="js-filter uk-card uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
                <li class="uk-width-1-3  uk-text-center">
                    <div class=" uk-card uk-card-body">
                        <img data-src="https://www.pngkey.com/png/detail/114-1149878_setting-user-avatar-in-specific-size-without-breaking.png" width="400" height="200" alt="" uk-img>

                        <button class="uk-button uk-button-primary uk-margin-top .uk-width-1-1"><i class="fas fa-play"></i> Reproducir Muestra</i></button>
                        <button class="uk-button uk-button-primary uk-margin-top .uk-width-1-1"><i class="far fa-bookmark"></i> Guardar </i></button>
                        <button class="uk-button uk-button-primary uk-margin-top .uk-width-1-1"><i class="fas fa-plus"></i> Añadir a lista </i></button>
                        <button class="uk-button uk-button-primary uk-margin-top .uk-width-1-1"><i class="fas fa-arrow-alt-circle-down"></i> Descargar</i></button>
                    </div>
                </li>

                <li class="uk-width-2-3">
                    <h1 class="uk-text-center ">Titulo del recurso</h1>
                    <hr class="uk-divider-small uk-text-center">
                    <h3>Este libro tiene:"En la búsqueda de la excelencia", "Los 10 mandamientos del vendedor
                        profesional", "Paradigmas en las ventas", "La planeación estratégica en la venta", "Los
                        pasos de una venta lógica", "Las objeciones, como enfrentarlas y resolverlas
                        eficientemente", "La postventa", "Himno del vendedor", y "Soy positivo (Canción)".This
                        audiobook contains:"In search of Excellence", "The 10 Salesman Commandments", "Sales
                        Paradigms", "Sales Strategic Planning", "Steps of a Logical Sale," "Objections: How to
                        Efficiently Overcome Them", "After the Sale", "The Salesman's Hymn", and "I am Positive
                        (Song)".</h3>
                    <h3 class="uk-text-small uk-text-primary">Autor: Pepito</h3>
                </li>
            </ul>

        </div>

    </div>

</div>


<!-- Footer Template -->
<?php echo view('templates/footer') ?>