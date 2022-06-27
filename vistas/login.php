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
    <title>Login</title>
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

    <!-- Formulario Login -->
    <div class="container" style="margin-top:5%; margin-bottom:10%; width: 30%;">
        <form action="../controles/Acceso_Login.php" method="post">
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title center-align"><b>Acceso Usuarios</b></span>
                            <label for="txtUsuario"><i class="tiny material-icons"
                                    style="margin-right:2%;">person</i>Nombre Usuario</label>
                            <input placeholder="Ingrese nombre de usuario" id="txtUsuario" type="text" class="validate"
                                name="txtUsuario">
                            <label for="txtPassword"><i class="tiny material-icons"
                                    style="margin-right:2%;">lock</i>Contraseña Usuario</label>
                            <input placeholder="Ingrese su contraseña" id="txtPassword" type="password" class="validate"
                                name="txtPassword">
                            <div class="center-align">
                                <a href="formularios/gUsuarios/agregarUsuario3.php"
                                    class="waves-effect waves-light grey-text">Registrarse</a>
                            </div>
                            <div class="center-align">
                                <a href="RecuperarPass.php"
                                    class="waves-effect waves-light grey-text">Olvide mi contraseña</a>
                            </div>
                        </div>
                        <div class="card-action center-align teal darken-4">
                            <input type="submit" value="Ingresar"
                                class="waves-effect waves-light btn-small  teal darken-1" name="btn_login">
                        </div>
                    </div>
                </div>
            </div>
        </form>
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