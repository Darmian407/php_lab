<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">

    <nav class="uk-navbar-container" uk-navbar>

        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <a class="uk-navbar-item uk-logo" href="/">Logo</a>
            </ul>
        </div>

        <div class="uk-navbar-right">

            <ul class="uk-navbar-nav">

                <div>
                    <a class="uk-navbar-toggle uk-visible@s" uk-search-icon href="#"></a>
                    <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
                        <form class="uk-search uk-search-navbar uk-width-1-1">
                            <input class="uk-search-input" type="search" placeholder="Buscar" autofocus>
                        </form>
                    </div>
                </div>

                <li>
                    <a class="uk-visible@s" href="#">Recursos</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="#">Documentos</a></li>
                            <li><a href="#">Audiolibros</a></li>
                            <li><a href="#">Libros</a></li>
                            <li><a href="#">Podcasts</a></li>
                            <li><a href="#">Revistas</a></li>
                            <li><a href="#">Partituras</a></li>
                        </ul>
                    </div>
                </li>
                <li><a class="uk-visible@s" href="/planes">Planes</a></li>

                <?php
                if (isset($user)) {
                ?>

                    <?php
                    if ($user['DTYPE'] == 'Cliente') {
                    ?>

                        <li><a class="uk-visible@s" href="/listas_visualizacion">Listas de visualización</a></li>
                        <li><a class="uk-visible@s" href="#">Autores seguidos</a></li>

                    <?php
                    } else {
                    ?>
                        <li><a class="uk-visible@s" href="/createResource">Nuevo Recurso</a></li>
                    <?php
                    }
                    ?>

                    <li>
                        <a href="#"><?= $user['nick'] ?></a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a class="uk-visible@s" href="/profile">Perfil</a></li>
                                <li><a class="uk-visible@s" href="/logout">Cerrar sesión</a></li>
                            </ul>
                        </div>
                    </li>

                <?php
                } else {
                ?>

                    <li><a class="uk-visible@s" href="/login">Iniciar Sesión</a></li>
                    <li><a class="uk-visible@s" href="/register">Registrarse</a></li>

                <?php
                }
                ?>

            </ul>

        </div>

        <button class="uk-button uk-button-default uk-hidden@s" type="button" uk-toggle="target: #offcanvas-flip"><span uk-icon="table"></span></button>
        <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
            <div class="uk-offcanvas-bar">



                <ul class="uk-nav uk-nav-primary uk-nav-center ">

                    <div class="uk-margin-bottom">
                        <form class="uk-search uk-search-default">
                            <span class="uk-search-icon-flip" uk-search-icon></span>
                            <input class="uk-search-input" type="search" placeholder="Search">
                        </form>
                    </div>

                    <li>
                        <a class="uk-margin-bottom" href="#">Recursos</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">Documentos</a></li>
                                <li><a href="#">Audiolibros</a></li>
                                <li><a href="#">Libros</a></li>
                                <li><a href="#">Podcasts</a></li>
                                <li><a href="#">Revistas</a></li>
                                <li><a href="#">Partituras</a></li>
                            </ul>
                        </div>

                    </li>
                    <li><a class="uk-margin-bottom" class="" href="/planes">Planes</a></li>
                    <li><a class="uk-margin-bottom" href="/listas_visualizacion">Listas de visualización</a></li>
                    <li><a class="uk-margin-bottom" href="#">Autores seguidos</a></li>
                    <li><a class="uk-margin-bottom" href="/perfil_usuario">Perfil</a></li>
                    <li><a class="uk-margin-bottom" href="/login">Iniciar Sesión</a></li>
                    <li><a class="uk-margin-bottom" href="/register">Registrarse</a></li>
                    <li><a class="uk-margin-bottom" href="#">Cerrar Sesión</a></li>
                </ul>

            </div>
        </div>



    </nav>

</div>