<?php
    session_start();
    include ("../../../controles/conexion.php");
    $con = conectar();
    $run = $_SESSION["Run_Integrante"];    
    $sql = "SELECT * FROM Documento";
    $query = mysqli_query($con, $sql);
?>
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
    <title>Aprobar Solicitudes</title>
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
            <h1 class="center-align" style="padding: 1.4%; color: transparent;">Informacion proximamente</h1>
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

    <!-- Formulario Listar Solicitud Documentos -->
    <div class="row">
        <!-- Tabla para visualizar a los integrantes actuales -->
        <div class="col s10 offset-s1" style="margin-bottom:6.8%;">
            <div class="card">
                <div class="card-content">
                    <span class="card-title center-align"><b>Listado de Solicitudes</b></span>
                    <div class="divider" style="margin-bottom:3%;"></div>
                    <table class="highlight striped">
                        <thead>
                            <tr>
                                <th>Id Documento</th>
                                <th>Run Integrante</th>
                                <th>Tipo Documento</th>
                                <th>Fecha Solicitud</th>
                                <th>Hora Solicitud</th>
                                <th>Fecha Entrega</th>
                                <th>Hora Entrega</th>
                                <th>Comentario</th>
                                <th>Estado Solicitud</th>
                                <th>Folio</th>
                                <th>Nombre Retira</th>
                                <th>Aprobar</th>
                                <th>Rechazar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($row = mysqli_fetch_array($query)){                                 
                            ?>
                            <tr>
                                <td><?php echo $row['Id_Documento']; ?></td>
                                <td><?php echo $row['Run_Integrante']; ?></td>
                                <td><?php echo $row['Id_Tipo_Documento']; ?></td>
                                <td><?php echo $row['Fecha_Solicitud']; ?></td>
                                <td><?php echo $row['Hora_Solicitud']; ?></td>
                                <td><?php echo $row['Fecha_Entrega']; ?></td>
                                <td><?php echo $row['Hora_Entrega']; ?></td>
                                <td><?php echo $row['Comentario']; ?></td>
                                <td><?php echo $row['Estado_Solicitud']; ?></td>
                                <td><?php echo $row['Folio']; ?></td>
                                <td><?php echo $row['Documento_Nombre_Retira']; ?></td>
                                <td><a href="../../../controles/Documentos/Control_Documentos.php?estadoDoc=1&idDocumento=<?php echo $row['Id_Documento'] ?>"
                                        class="waves-effect waves-light btn green darken-3">
                                        <i class="material-icons center">check</i></a></td>
                                <td><a href="../../../controles/Documentos/Control_Documentos.php?estadoDoc=2&idDocumento=<?php echo $row['Id_Documento'] ?>"
                                        class="waves-effect waves-light btn red darken-4">
                                        <i class="material-icons center">close</i></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../../../materialize.min.js"></script>

</body>

</html>