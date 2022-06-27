<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
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
    <title>Editar Usuario</title>
</head>

<body>

    <!-- Barra de Navegacion-->
    <nav>
        <div class="nav-wrapper teal darken-4" style="padding-left: 5%;">
            <i class="material-icons left">admin_panel_settings</i>
            <a href="#!" class="brand-logo left">Acceso Vecino</a>
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
            <div class="col s3">
                <a href="../inicio_vecino.php" class="waves-effect waves-light btn cyan darken-4"><i
                        class="material-icons left">arrow_back</i>Volver</a>
            </div>
        </div>
    </div>

    <!-- Formulario Editar Usuario -->
    <div class="container" style="margin-top:2%; margin-bottom:5%; width: 80%;">
        <form action="../../../controles/Usuarios/Control_Usuarios.php?flag=2" method="post">
            <!-- Datos del Integrante -->
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align"><b>Editar mis Datos</b></span>
                        <div class="divider" style="margin-bottom:3%;"></div>
                        <div class="row">
                            <!-- Input del RUN Integrante -->
                            <div class="col s3">
                                <label for="txtRun">RUN Integrante</label>
                                <input placeholder="Ingrese rut del integrante" id="txtRun" name="txtRun" type="text"
                                    class="validate" size="11" maxlength="11" value = "<?php echo $row['Run_Integrante'] ?>" disabled>
                            </div>
                            <!-- Input del Nombre Integrante -->
                            <div class="col s3">
                                <label for="txtNombre">Nombre</label>
                                <input placeholder="Ingrese su nombre" id="txtNombre" name="txtNombre" type="text"
                                    class="validate" value="<?php echo $row['Nombre'] ?>" required>
                            </div>
                            <!-- Input del Apellido Integrante -->
                            <div class="col s3">
                                <label for="txtApellido">Apellido</label>
                                <input placeholder="Ingrese su apellido" id="txtApellido" name="txtApellido" type="text"
                                    class="validate"  value="<?php echo $row['Apellido'] ?>" required>
                            </div>
                            <!-- Input del Fecha Nacimiento Integrante -->
                            <div class="col s3">
                                <label for="txtFechaNac">Fecha Nacimiento</label>
                                <input id="txtApellido" type="date" name="txtFechaNac" class="validate"  value="<?php echo $row['Fecha_Nac'] ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Input del Estado (Casdo - Viudo - Soltero) Integrante -->
                            <div class="col s3">
                                <label>Estado</label>
                                <select class="browser-default" name="cmbEstado" id="cmbEstado">
                                    <option value="" disabled selected>Seleccione su estado</option>                                                                       
                                    <option value="Casado">Casado</option>
                                    <option value="Soltero">Soltero</option>
                                    <option value="Viudo">Viudo</option>
                                </select>
                            </div>
                            <!-- Input del Telefono Integrante -->
                            <div class="col s4">
                                <label for="txtTelefono">Telefono</label>
                                <input placeholder="Ingrese su telefono" id="txtTelefono" name="txtTelefono" type="text"
                                    class="validate" value="<?php echo $row['Telefono'] ?>" required>
                            </div>
                            <!-- Input del Correo Integrante -->
                            <div class="col s5">
                                <label for="txtCorreo">Correo</label>
                                <input placeholder="Ingrese su correo" id="txtCorreo" name="txtCorreo" type="text"
                                    class="validate" value="<?php echo $row['Correo'] ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Input del Genero (Femenino - Masculino - Otro) Integrante -->
                            <div class="col s3">
                                <label>Genero</label>
                                <select class="browser-default" name="cmbSexo" id="cmbSexo">
                                    <option value="" disabled selected>Seleccione su genero</option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <!-- Input de la Etnia (Aymaras, Que- chuas, Atacameños, Collas, Diaguitas y Mapuche) Integrante -->
                            <div class="col s3">
                                <label>Etnia</label>
                                <select class="browser-default" name="cmbEtnia" id="cmbEtnia">
                                    <option value="" disabled selected>Seleccione su etnia</option>
                                    <option value="Aymaras">Aymaras</option>
                                    <option value="Que-chuas">Que-chuas</option>
                                    <option value="Atacameños">Atacameños</option>
                                    <option value="Collas">Collas</option>
                                    <option value="Diaguitas">Diaguitas</option>
                                    <option value="Mapuche">Mapuche</option>
                                    <option value="Ninguna">Ninguna</option>
                                </select>
                            </div>
                            <!-- Input de la Ocupacion (Trabajador, Estudiante, Desempleado, Trabajador-Estudiante) Integrante -->
                            <div class="col s3">
                                <label>Ocupacion Actual</label>
                                <select class="browser-default" name="cmbOcupacion" id="cmbOcupacion">
                                    <option value="" disabled selected>Seleccione su ocupacion</option>
                                    <option value="Trabajador">Trabajador</option>
                                    <option value="Estudiante">Estudiante</option>
                                    <option value="Desempleado">Desempleado</option>
                                    <option value="Trabajador-Estudiante">Trabajador y Estudiante</option>
                                </select>
                            </div>
                            <!-- Input de la Discapacidad (Fisica, Sensorial, Intelectual, Psiquica, Visceral, Discapacidad Multiple) Integrante -->
                            <div class="col s3">
                                <label>Discapacidad</label>
                                <select class="browser-default" name="cmbDiscapacidad" id="cmbDiscapacidad">
                                    <option value="" disabled selected>Seleccione su discapacidad</option>
                                    <option value="Fisica">Fisica</option>
                                    <option value="Sensorial">Sensorial</option>
                                    <option value="Intelectual">Intelectual</option>
                                    <option value="Psiquica">Psiquica</option>
                                    <option value="Visceral">Visceral</option>
                                    <option value="Discapacidad Multiple">Discapacidad Multiple</option>
                                    <option value="Ninguna">Ninguna</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Input del Tipo Socio (Presidente, Secretario, Tesorero, Vecino) Integrante -->
                            <div class="col s3">
                                <label>Tipo Socio</label>
                                <select class="browser-default" name="cmbTipoSocio" id="cmbTipoSocio" disabled>
                                    <option value="">Seleccione su tipo</option>
                                    <option value="Presidente">Presidente</option>
                                    <option value="Secretario">Secretario</option>
                                    <option value="Tesorero">Tesorero</option>
                                    <option value="Vecino" selected>Vecino</option>
                                </select>
                            </div>
                            <!-- Input del Estado (Habilitado - Deshabilitado) Integrante -->
                            <div class="col s4">
                                <label>Estado Usuario</label>
                                <div style="padding:3%;">
                                    <label>
                                        <input name="rdbEstado" id="rdbEstado" type="radio" value="Habilitado"
                                            disabled />
                                        <span>Habilitado</span>
                                    </label>
                                    <label>
                                        <input name="rdbEstado" id="rdbEstado" type="radio" value="Deshabilitado"
                                            checked />
                                        <span>Deshabilitado</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action center-align teal darken-4">
                        <input type="submit" value="Editar mis datos"
                            class="waves-effect waves-light btn-small  teal darken-1" name="btnEditar" id="btnEditar">
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
    <script src="../../../materialize.min.js">
        M.AutoInit();
    </script>

</body>

</html>