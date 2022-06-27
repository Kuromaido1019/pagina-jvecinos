<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    $_SESSION['lastUrl'] = $_SERVER['REQUEST_URI'];
?>
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
    <title>Remover Hogar</title>
</head>

<body>

    <!-- Barra de Navegacion-->
    <nav>
        <div class="nav-wrapper teal darken-4" style="padding-left: 5%;">
            <i class="material-icons left">admin_panel_settings</i>
            <a href="#!" class="brand-logo left">Acceso Administrador</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="../../../index.html"><i class="material-icons left">account_circle</i>Cerrar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Imagen con info de la pagina -->
    <div class="row">
        <div class="col s12" style="background-image: url(../../../img/bg_house.jpg);" style="height: 400px;">
            <h1 class="center-align" style="padding: 1.8%; color: transparent;">Informacion proximamente</h1>
        </div>
    </div>

    <!-- Boton Volver atras -->
    <div class="container left-align" style="width:90%">
        <div class="row">
            <div class="col s12">
                <a href="../inicio_Admin.php" class="waves-effect waves-light btn cyan darken-4"><i
                        class="material-icons left">arrow_back</i>Volver</a>
            </div>
        </div>
    </div>

    <!-- Formulario Agregar Hogar -->
    <div class="container" style="margin-top:2%; margin-bottom:5%; width: 80%;">
        <form action="" method="post">
            <div class="row">
                <!-- Formulario de Hogares -->
                <div class="col s4">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title"><b>Vaciar un Hogar</b></span>
                            <div class="divider" style="margin-bottom:3%;"></div>
                            <div class="row">
                                <!-- ID del Hogar -->
                                <div class="col s12">
                                    <label for="txtID">ID Hogar</label>
                                    <input placeholder="Ingrese ID del hogar" id="txtID" name="txtID" type="text"
                                        class="validate" required>
                                </div>
                            </div>
                        </div>
                        <!-- Boton agregar un hogar -->
                        <div class="card-action center-align teal darken-4">
                            <input type="submit" value="Vaciar el Hogar"
                                class="waves-effect waves-light btn-small  teal darken-1" name="btnVaciar">
                        </div>
                    </div>
                </div>
                <!-- Tabla para visualizar a los integrantes actuales -->
                <div class="col s8">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title center-align"><b>Hogares registrados actualmente</b></span>
                            <div class="divider" style="margin-bottom:3%;"></div>
                            <table class="highlight striped">
                                <thead>
                                    <tr>
                                        <th>ID Hogar</th>
                                        <th>Fecha Registro</th>
                                        <th>Estado del Hogar</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>121</td>
                                        <td>16-05-22</td>
                                        <td>Habilitado</td>
                                    </tr>
                                    <tr>
                                        <td>122</td>
                                        <td>16-05-22</td>
                                        <td>Pendiente</td>
                                    </tr>
                                    <tr>
                                        <td>123</td>
                                        <td>16-05-22</td>
                                        <td>Deshabilitado</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Footer de la pagina -->
    <footer class="page-footer teal darken-4 center-align">
        <div class="footer-copyright">
            <div class="container">
                © 2022 Kuro & MT
            </div>
        </div>
    </footer>

    <!--  Scripts-->
    <script src="../../../materialize.min.js">
    M.AutoInit();
    </script>

</body>

</html>