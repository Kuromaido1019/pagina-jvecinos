<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include '../../../controles/conexion.php';
    $con = conectar();
    $_SESSION['TipoUsuario'] = "Administrador2";
    $sql = "SELECT * FROM Acta_Reunion"; 
    $query = mysqli_query($con,$sql);
    //Consulta para la Directiva
    $sql2 = "SELECT D.Id_Directiva,D.Run_Integrante,C.Descripcion  FROM Directiva D INNER JOIN Cargo C ON C.Id_Cargo = D.Id_Cargo;";   
    $query2 = mysqli_query($con,$sql2);
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
    <title>Editar Acta de Reunion</title>
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
        <form action="../../../controles/Actas/Controles_Actas.php?flag=2" method="post">
            <div class="row">
                <!-- Datos del Formulario -->
                <div class="col s8">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title center-align"><b>Crear una Acta de Reunion</b></span>
                            <div class="divider" style="margin-bottom:3%;"></div>
                            <div class="row">
                                <!-- Input del Id Acta -->
                                <div class="col s2">                                    
                                    <label for="txtId">Id Acta Reunion</label>
                                    <input placeholder="Id Acta" id="txtId"
                                        name="txtId" type="text">
                                </div>
                                <!-- Input del Id Directiva -->
                                <div class="col s2">
                                    
                                    <label for="txtIdDirectiva">Id Directiva</label>
                                    <input placeholder="Id directiva" id="txtIdDirectiva"
                                        name="txtIdDirectiva" type="text">
                                </div>
                                <!-- Input del Tipo Acta -->
                                <div class="col s3">
                                    <label>Tipo de Acta</label>
                                    <select class="browser-default" name="cmbTipoReunion" id="cmbTipoReunion">
                                        <option value="" disabled selected>Seleccione el Tipo</option>
                                        <option value="Social">Social</option>
                                        <option value="Directiva">Directiva</option>
                                        <option value="Comunidad">Comunidad</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                                <!-- Input del Fecha -->
                                <div class="col s2">
                                    <label for="txtFecha">Fecha Acta</label>
                                    <input id="txtFecha" name="txtFecha" type="date">
                                </div>
                                <!-- Input del Hora -->
                                <div class="col s2">
                                    <label for="txtHora">Hora Acta</label>
                                    <input id="txtHora" name="txtHora" type="time">
                                </div>
                                <!-- Input del Titulo Acta -->
                                <div class="col s4">
                                    
                                    <label for="txtTitulo">Titulo del Acta</label>
                                    <input placeholder="Ingrese titulo de la Acta" id="txtTitulo" name="txtTitulo"
                                        type="text">
                                </div>
                                <!-- Input del Observacion -->
                                <div class="col s8">
                                    
                                    <label for="txtObservacion">Observacion del Acta</label>
                                    <input placeholder="Ingrese alguna observacion sobre el acta" id="txtObservacion"
                                        name="txtObservacion" type="text">
                                </div>
                            </div>

                        </div>
                        <div class="card-action center-align teal darken-4">
                            <input type="submit" value="Crear Acta"
                                class="waves-effect waves-light btn-small  teal darken-1" name="btnEditar"
                                id="bntCrear">
                        </div>
                    </div>
                </div>
                <!-- Tabla con los Datos Directiva -->
                <div class="col s4">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title center-align"><b>Directiva Actual</b></span>
                            <div class="divider" style="margin-bottom:3%;"></div>
                            <table class="highlight striped">
                                <thead>
                                    <tr>
                                        <th>Id Directiva</th>
                                        <th>Run Directiva</th>
                                        <th>Cargo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        while($row2 = mysqli_fetch_array($query2)){                                 
                                    ?>
                                    <tr>
                                        <td><?php echo $row2['Id_Directiva']; ?></td>
                                        <td><?php echo $row2['Run_Integrante']; ?></td>
                                        <td><?php echo $row2['Descripcion']; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Tabla con los Datos Acta de Reunion-->
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title center-align"><b>Listado de Actas Registradas</b></span>
                            <div class="divider" style="margin-bottom:3%;"></div>
                            <table class="highlight striped">
                                <thead>
                                    <tr>
                                        <th>Id Acta</th>
                                        <th>Id Directiva</th>
                                        <th>Tipo Reunion</th>
                                        <th>Fecha Acta</th>
                                        <th>Hora Acta</th>
                                        <th>Titulo Acta</th>
                                        <th>Observaciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        while($row = mysqli_fetch_array($query)){                                 
                                    ?>
                                    <tr>
                                        <td><?php echo $row['Id_Acta']; ?></td>
                                        <td><?php echo $row['Id_Directiva']; ?></td>
                                        <td><?php echo $row['Tipo_Reunion']; ?></td>
                                        <td><?php echo $row['Fecha_Acta']; ?></td>
                                        <td><?php echo $row['Hora_Acta']; ?></td>
                                        <td><?php echo $row['Titulo_Acta']; ?></td>
                                        <td><?php echo $row['Observaciones']; ?></td>
                                        <td><a href="../../../controles/Actas/Controles_Actas.php?flag=3&id=<?php echo $row['Id_Acta'] ?>"
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