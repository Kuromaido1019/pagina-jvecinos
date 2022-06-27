<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include '../../../controles/conexion.php';
    $con = conectar();
    $_SESSION['TipoUsuario'] = "Administrador1";
    $sql = "SELECT * FROM Acceso"; 
    $query = mysqli_query($con,$sql);   
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
    <title>Creacion de Credenciales</title>
</head>

<body>

    <!-- Barra de Navegacion-->
    <nav>
        <div class="nav-wrapper teal darken-4" style="padding-left: 5%;">
            <i class="material-icons left">admin_panel_settings</i>
            <a href="#!" class="brand-logo left">Acceso Administrador</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="../../../vistas/login.php"><i class="material-icons left">account_circle</i>Cerrar
                        Sesion</a>
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
                <a href="../inicio_admin.php" class="waves-effect waves-light btn cyan darken-4"><i
                        class="material-icons left">arrow_back</i>Volver</a>
            </div>
        </div>
    </div>

    <!-- Formulario Creacion de Credenciales -->
    <div class="container" style="margin-top:2%; margin-bottom:11.5%;">
        <form action="../../../controles/Accesos/Control_Acceso.php?flag=1" method="post">
            <div class="row">
                <!-- Datos del Formulario -->
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title center-align"><b>Entregar Credenciales</b></span>
                            <div class="divider" style="margin-bottom:3%;"></div>
                            <div class="row">
                                <div class="col s3">
                                    <!-- Input del Rut Usuario -->
                                    <label for="txtRut">Rut del Usuario</label>
                                    <input placeholder="Ingrese rut del Usuario" id="txtRut" name="txtRut" type="text">
                                </div>
                                <div class="col s3">
                                    <!-- Input del Nombre Usuario -->
                                    <label for="txtUserName">Nombre del Usuario</label>
                                    <input placeholder="Ingrese nombre del Usuario" id="txtUserName" name="txtUserName"
                                        type="text">
                                </div>
                                <div class="col s3">
                                    <!-- Input del Pass Usuario -->
                                    <label for="txtUserPass">Contraseña del Usuario</label>
                                    <input placeholder="Ingrese contraseña del Usuario" id="txtUserPass"
                                        name="txtUserPass" type="text">
                                </div>
                                <!-- Input del Estado (Habilitado - Deshabilitado) Integrante -->
                                <div class="col s3">
                                    <label>Estado Usuario</label>
                                    <div style="padding:3%;">
                                        <label>
                                            <input name="rdbEstado" id="rdbEstado" type="radio" value="Habilitado"
                                                checked />
                                            <span>Habilitado</span>
                                        </label>
                                        <label>
                                            <input name="rdbEstado" id="rdbEstado" type="radio" value="Deshabilitado" />
                                            <span>Deshabilitado</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action center-align teal darken-4">
                            <input type="submit" value="Registrar"
                                class="waves-effect waves-light btn-small  teal darken-1" name="btnEditar"
                                id="bntCrear">
                        </div>
                    </div>
                </div>
                <!-- Tabla con los Datos -->
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title center-align"><b>Listado de Accesos Registrados</b></span>
                            <div class="divider" style="margin-bottom:3%;"></div>
                            <table class="highlight striped">
                                <thead>
                                    <tr>
                                        <th>Id Usuario</th>
                                        <th>Rut Usuario</th>
                                        <th>Nombre Usuario</th>
                                        <th>Contraseña Usuario</th>
                                        <th>Estado</th>
                                        <th>Habilitar</th>
                                        <th>Deshabilitar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        while($row = mysqli_fetch_array($query)){                                 
                                    ?>
                                    <tr>
                                        <td><?php echo $row['Id_Acceso']; ?></td>
                                        <td><?php echo $row['Run_Integrante']; ?></td>
                                        <td><?php echo $row['UserName']; ?></td>
                                        <td><?php echo $row['UserPass']; ?></td>
                                        <td><?php echo $row['Estado']; ?></td>
                                        <td><a href="../../../controles/Accesos/Control_Acceso.php?estado=1&flag=4&id=<?php echo $row['Id_Acceso'] ?>"
                                                class="waves-effect waves-light btn blue darken-4">
                                                <i class="material-icons center">done</i></a></td>
                                        <td><a href="../../../controles/Accesos/Control_Acceso.php?estado=2&flag=4&id=<?php echo $row['Id_Acceso'] ?>"
                                                class="waves-effect waves-light btn red darken-4">
                                                <i class="material-icons center">not_interested</i></a></td>
                                        <td><a href="../../../controles/Accesos/Control_Acceso.php?flag=3&id=<?php echo $row['Id_Acceso'] ?>"
                                                class="waves-effect waves-light btn red darken-4">
                                                <i class="material-icons center">delete</i></a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../../../js/materialize.min.js">
    $(document).ready(function() {
        $('.timepicker').timepicker();
    });
    </script>
    <script src="../../../js/main.js"></script>

</body>

</html>