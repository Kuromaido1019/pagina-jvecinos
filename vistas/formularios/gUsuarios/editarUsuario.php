<?php
    session_start();
    $_SESSION["TipoUsuario"] = "Administrador";
    /*
    included ("../../../controles/conexion.php");
    $con = conectar();
    $sql = "SELECT * FROM usuario";
    $query = mysqli_query($con, $sql);
    */   
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
    <title>Editar Usuario</title>
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
            <div class="col s3">
                <a href="../inicio_Admin.php" class="waves-effect waves-light btn cyan darken-4"><i
                        class="material-icons left">arrow_back</i>Volver</a>
            </div>
        </div>
    </div>

    <!-- Formulario Login -->
    <div class="container" style="margin-top:2%; margin-bottom:8.2%; width: 80%;">
        <form action="../../../controles/Usuarios/Control_Usuarios.php?flag=2" method="POST">
            <!-- Datos del Integrante -->
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align"><b>Editar Usuarios</b></span>
                        <div class="divider" style="margin-bottom:3%;"></div>
                        <div class="row">
                            <!-- Input del Rut Integrante -->
                            <div class="col s3">
                                <label for="txtRut">Rut</label>
                                <input placeholder="Ingrese su rut" id="txtRut" name="txtRut" type="text"
                                    class="validate" required>
                            </div>
                            <!-- Input del Nombre Integrante -->
                            <div class="col s3">
                                <label for="txtNombre">Nombre</label>
                                <input placeholder="Ingrese su nombre" id="txtNombre" name="txtNombre" type="text"
                                    class="validate" required>
                            </div>
                            <!-- Input del Apellido Integrante -->
                            <div class="col s3">
                                <label for="txtApellido">Apellido</label>
                                <input placeholder="Ingrese su apellido" id="txtApellido" name="txtApellido" type="text"
                                    class="validate" required>
                            </div>
                            <!-- Input del Fecha Nacimiento Integrante -->
                            <div class="col s3">
                                <label for="txtFechaNac">Fecha Nacimiento</label>
                                <input id="txtFechaNac" type="date" name="txtFechaNac" class="validate" required>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Input del Estado (Casdo - Viudo - Soltero) Integrante -->
                            <div class="col s3">
                                <label>Estado</label>
                                <select class="browser-default" name="cmbCivil" id="cmbCivil">
                                    <option value="" disabled selected>Seleccione su estado</option>
                                    <option value="1">Soltero o soltera.</option>
                                    <option value="2">Casado o casada.</option>
                                    <option value="3">Viudo o viuda.</option>
                                    <option value="4">Divorciado o divorciada.</option>
                                    <option value="5">Conviviente civil.</option>
                                </select>
                            </div>
                            <!-- Input del Telefono Integrante -->
                            <div class="col s4">
                                <label for="txtTelefono">Telefono</label>
                                <input placeholder="Ingrese su telefono" id="txtTelefono" name="txtTelefono" type="text"
                                    class="validate" required>
                            </div>
                            <!-- Input del Correo Integrante -->
                            <div class="col s5">
                                <label for="txtCorreo">Correo</label>
                                <input placeholder="Ingrese su correo" id="txtCorreo" name="txtCorreo" type="text"
                                    class="validate" required>
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
                                    <option value="2">Rapa Nui</option>
                                    <option value="3">Diaguitas</option>
                                    <option value="4">Atacameños</option>
                                    <option value="5">Quechuas</option>
                                    <option value="6">Collas</option>
                                    <option value="7">Changos</option>
                                    <option value="8">Mapuches</option>
                                    <option value="9">Sin Etnia</option>
                                </select>
                            </div>
                            <!-- Input de la Ocupacion (Trabajador, Estudiante, Desempleado, Trabajador-Estudiante) Integrante -->
                            <div class="col s3">
                                <label>Ocupacion Actual</label>
                                <select class="browser-default" name="cmbOcupacion" id="cmbOcupacion">
                                    <option value="" disabled selected>Seleccione su ocupacion</option>
                                    <option value="2">Estudiante</option>
                                    <option value="3">Trabajador</option>
                                    <option value="4">Trabajador y Estudiante</option>
                                    <option value="5">Sin Ocupacion</option>
                                </select>
                            </div>
                            <!-- Input de la Discapacidad (Fisica, Sensorial, Intelectual, Psiquica, Visceral, Discapacidad Multiple) Integrante -->
                            <div class="col s3">
                                <label>Discapacidad</label>
                                <select class="browser-default" name="cmbDiscapacidad" id="cmbDiscapacidad">
                                    <option value="" disabled selected>Seleccione su discapacidad</option>
                                    <option value="1">Sensorial o Comunicacion</option>
                                    <option value="2">Motriz</option>
                                    <option value="3">Mental</option>
                                    <option value="4">Multiple y Otras</option>
                                    <option value="5">Sin Discapacidad </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Input del Tipo Socio (Presidente, Secretario, Tesorero, Vecino) Integrante -->
                            <div class="col s3">
                                <label>Tipo Socio</label>
                                <select class="browser-default" name="cmbCargo" id="cmbCargo">
                                    <option value="" disabled selected>Seleccione su tipo</option>
                                    <option value="1">Vecino</option>
                                    <option value="2">Presidente</option>
                                    <option value="3">Tesorero</option>
                                    <option value="4">Vocero</option>
                                    <option value="5">Secretario</option>
                                </select>
                            </div>
                            <!-- Input del Estado (Habilitado - Deshabilitado) Integrante -->
                            <div class="col s4">
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
                        <input type="submit" value="Editar" class="waves-effect waves-light btn-small  teal darken-1"
                            name="btn_editar">
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