<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nosotros</title>
</head>

<body>

    <!-- Barra de Navegacion-->
    <nav>
        <div class="nav-wrapper teal darken-4" style="padding-left: 5%;">
            <i class="material-icons left">groups</i>
            <a href="#!" class="brand-logo left">Junta de Vecinos</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="../index.html"><i class="material-icons left" style="margin-left: 4px;">home</i>Inicio</a>
                </li>
                <li><a href="../vistas/galeria.php"><i class="material-icons left">photo_library</i>Galeria</a></li>
                <li><a href="../vistas/nosotros.php"><i class="material-icons left">groups</i>Nosotros</a></li>
                <li><a href="../vistas/login.php"><i class="material-icons left">account_circle</i>Login</a></li>
            </ul>
        </div>
    </nav>

    <!-- Imagen con info de la pagina -->
    <div class="row">
        <div class="col s12" style="background-image: url(../img/bg_house.jpg);" style="height: 400px;">
            <h1 class="center-align" style="padding: 1.7%; color: transparent;">Informacion proximamente</h1>
        </div>
    </div>

    <!-- Presentacion de la pagina -->
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <h1 class="header center green-text">Junta de Vecinos</h1>
            <div class="divider"></div>
            <div class="row center">
                <h5 class="header col s12 light">Miembros</h5>
            </div>
        </div>
    </div>

    <div class="container">
        <img src="../img/junta3.jpg" style="width: 100%; height: 50%;">
    </div>

    <!-- Encabezado Titulos Noticias-->
    <div class="container">
        <ul class="collapsible">
            <li>
                <div class="collapsible-header hoverable">
                    <i class="material-icons">import_contacts</i>Miembros Imagenes (Actualizar proximamente...)
                </div>
            </li>
        </ul>
    </div>

    <!-- Iconos miembros y Resumen -->
    <div class="container">
        <div class="section">
            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-green-text"><img src="../img/presidenta.jpg" class="circle hoverable"
                                height="250" width="250"></h2>
                        <h5 class="center">Presidenta</h5>

                        <p class="light center-align">Informacion sobre este miembro de la junta y su rol.</p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-green-text"><img src="../img/secretaria.jpg" class="circle hoverable"
                                height="250" width="250"></h2>
                        <h5 class="center">Secretario</h5>

                        <p class="light center-align">Informacion sobre este miembro de la junta y su rol.</p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-green-text"><img src="../img/tesorero.png" class="circle hoverables"
                                height="250" width="250"></h2>
                        <h5 class="center">Tesorero</h5>

                        <p class="light center-align">Informacion sobre este miembro de la junta y su rol.</p>
                    </div>
                </div>
            </div>

        </div>
        <br><br>
    </div>

    <!-- Footer de la pagina -->
    <footer class="page-footer teal darken-4">
        <div class="footer-copyright">
            <div class="container">
                © 2022 Kuro & MT
            </div>
        </div>
    </footer>

    <!--  Scripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
    </script>

</body>

</html>