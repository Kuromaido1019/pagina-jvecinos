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
    <link rel="stylesheet" href="../css/estilos.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galeria</title>
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
            <h1 class="center-align" style="padding: 1.8%; color: transparent;">Informacion proximamente</h1>
        </div>
    </div>   

    <!-- Seccion de Avisos-->
    <div class="container">
        <div class="row">
            <div class="col s12">
                <ul class="collapsible ">
                    <li>
                        <div class="collapsible-header hoverable">
                            <i class="material-icons">import_contacts</i>Ultimas avisos
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Avisos -->
            <div class="col s12">
                <div class="row">
                    <div class="col s4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="../img/Avisos/BarberShop.gif" style="width:100%" height="620">
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="../img/Avisos/Basquetball.gif" style="width:100%" height="620">
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="../img/Avisos/Vacunacion.gif" style="width:100%" height="620">
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="../img/Avisos/Alimentos.gif" style="width:100%" height="620">
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="../img/Avisos/Feria.gif" style="width:100%" height="620">
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="../img/Avisos/Mascotas.gif" style="width:100%" height="620">
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="../img/Avisos/Movie.gif" style="width:100%" height="620">
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="../img/Avisos/School.gif" style="width:100%" height="620">
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="../img/Avisos/Odontologia.gif" style="width:100%" height="620">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/materialize.min.js">
        $(document).ready(function() {
            $('.carousel').carousel({
                dist: 0,
                padding: 0,
                fullWidth: true,
                indicators: true,
                duration: 100,
            });
        });

        autoplay()

        function autoplay() {
            $('.carousel').carousel('next');
            setTimeout(autoplay, 2500);
        }
    </script>
    <script src="../js/main.js"></script>
    </script>

</body>

</html>