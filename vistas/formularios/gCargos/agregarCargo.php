<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include '../../../controles/conexion.php';
    $con = conectar();
    $_SESSION['TipoUsuario'] = "Administrador1";
    $sql = "SELECT * FROM Cargo"; 
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
    <title>Creacion Cargo</title>
</head>

<body>

    <!-- Barra de Navegacion-->
    <nav>
        <div class="nav-wrapper teal darken-4" style="padding-left: 5%;">
            <i class="material-icons left">admin_panel_settings</i>
            <a href="#!" class="brand-logo left">Acceso <?php echo $_SESSION['TipoUsuario'] ?></a>
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

    <!-- Formulario Solicitud de Documentos-->
    <div class="container" style="margin-top:2%; margin-bottom:8%;">
        <form action="../../../controles/Cargos/Control_Cargos.php?flag=1" method="post">
            <div class="row">
                <!-- Datos del Formulario -->
                <div class="col s5">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title center-align"><b>Crear un Cargo</b></span>
                            <div class="divider" style="margin-bottom:3%;"></div>
                            <!-- Input del Tipo de Documento -->
                            <label for="txtNombre">Nombre del Cargo</label>
                            <input placeholder="Ingrese nombre cargo" id="txtNombre" name="txtNombre"
                                type="text">
                        </div>
                        <div class="card-action center-align teal darken-4">
                            <input type="submit" value="Crear"
                                class="waves-effect waves-light btn-small  teal darken-1" name="btnEditar"
                                id="bntCrear">
                        </div>
                    </div>
                </div>
                <!-- Tabla con los Datos -->
                <div class="col s6">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title center-align"><b>Listado de Cargos Registrados</b></span>
                            <div class="divider" style="margin-bottom:3%;"></div>
                            <table class="highlight striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Descripcion</th>
                                        <th>Borrar</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        while($row = mysqli_fetch_array($query)){                                 
                                    ?>
                                    <tr>
                                        <td><?php echo $row['Id_Cargo']; ?></td>
                                        <td><?php echo $row['Descripcion']; ?></td>
                                        <td><a href="../../../controles/Cargos/Control_Cargos.php?flag=2&id=<?php echo $row['Id_Cargo'] ?>"
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