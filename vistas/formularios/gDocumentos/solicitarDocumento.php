<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    $_SESSION['TipoUsuario'] = "Vecino";
    include ("../../../controles/conexion.php");
    $con = conectar();
    $run = $_SESSION["Run_Integrante"];
    $sql = "SELECT * FROM Usuario WHERE Run_Integrante = '$run'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
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
    <title>Registro de Usuario</title>
</head>

<body>

    <!-- Barra de Navegacion-->
    <nav>
        <div class="nav-wrapper teal darken-4" style="padding-left: 5%;">
            <i class="material-icons left">admin_panel_settings</i>
            <a href="#!" class="brand-logo left">Acceso Vecino</a>
            <ul class="right hide-on-med-and-down">                
                <li><a href="../../../vistas/login.php"><i class="material-icons left">account_circle</i>Cerrar Sesion</a>
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
                <a href="../inicio_vecino.php" class="waves-effect waves-light btn cyan darken-4"><i
                        class="material-icons left">arrow_back</i>Volver</a>
            </div>
        </div>
    </div>

    <!-- Formulario Solicitud de Documentos-->
    <div class="container" style="margin-top:2%; margin-bottom:5%; width: 80%;">
        <form action="../../../controles/Documentos/Control_Documentos.php?flag=1" method="post">
            <!-- Datos del Integrante -->
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align"><b>Editar mis Datos</b></span>
                        <div class="divider" style="margin-bottom:3%;"></div>
                        <div class="row">
                            <!-- Input del RUN Integrante -->
                            <div class="col s3">
                                <label for="txtRut">RUN Integrante</label>
                                <input placeholder="Ingrese rut del integrante" id="txtRut" name="txtRut" type="text">
                            </div>
                            <!-- Input del Tipo Documento -->
                            <div class="col s3">
                                <label>Tipo de Documento</label>
                                <select class="browser-default" name="cmbDocumento" id="cmbDocumento">
                                    <option value="" disabled selected>Seleccione tipo Documento</option>
                                    <option value="1">Certificado Residencia</option>
                                    <option value="2">General</option>
                                    <option value="3">Otro</option>
                                </select>
                            </div>
                            <!-- Input del Estado Solicitud -->
                            <div class="col s3">
                                <label>Estado Solicitud</label>
                                <select class="browser-default" name="cmbEstadoSolicitud" id="cmbEstadoSolicitud">                                    
                                    <option value="" disabled selected>Seleccione Estado</option>
                                    <option value="En Transcurso" >En Transcurso</option>
                                </select>
                            </div>
                            <!-- Input del Folio -->
                            <div class="col s3">
                                <label for="txtFolio">Folio Documento</label>
                                <input id="txtFolio" name="txtFolio" type="text" class="validate" size="11" maxlength="11" value="135101">
                            </div>                                                        
                        </div>
                        <div class="row">
                            <!-- Input de Fecha Solicitud -->
                            <div class="col s3">
                                <label for="txtFechaSolicitud" >Fecha Solicitud</label>
                                <input id="txtFechaSolicitud" type="text" name="txtFechaSolicitud" class="datepicker" required>
                            </div>
                            <!-- Input de Hora Solicitud -->
                            <div class="col s3">
                                <label for="txtHoraSolicitud" >Hora Solicitud</label>
                                <input id="txtHoraSolicitud" type="text" name="txtHoraSolicitud" class="timepicker" required>
                            </div>
                            <!-- Input de Fecha Entrega -->
                            <div class="col s3">
                                <label for="txtFechaEntrega" >Fecha Entraga</label>
                                <input id="txtFechaEntrega" type="text" name="txtFechaEntrega" class="datepicker" required>
                            </div>
                            <!-- Input de Hora Entrega -->
                            <div class="col s3">
                                <label for="txtHoraEntrega" >Hora Entrega</label>
                                <input id="txtHoraEntrega" type="text" name="txtHoraEntrega" class="timepicker" required>
                            </div>                            
                        </div>
                        <div class="row">
                            <!-- Input del Comentario -->
                            <div class="col s6">
                                <label for="txtComentario">Comentario</label>
                                <input placeholder="Ingrese algun comentario" id="txtComentario" name="txtComentario" type="text"
                                    class="validate" required>
                            </div>
                            <!-- Input del Nombre quien Retira -->
                            <div class="col s6">
                                <label for="txtNombre">Nombre</label>
                                <input placeholder="Ingrese nombre de quien retira" id="txtNombre" name="txtNombre" type="text"
                                    class="validate" required>
                            </div>
                        </div>                        
                    </div>
                    <div class="card-action center-align teal darken-4">
                        <input type="submit" value="Crear Solicitud"
                            class="waves-effect waves-light btn-small  teal darken-1" name="btnEditar" id="bntCrear">
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
        $(document).ready(function(){
            $('.timepicker').timepicker();
        });
    </script>
    <script src="../../../js/main.js"></script>

</body>

</html>