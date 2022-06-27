<?php
    session_start();
    $_SESSION['TipoUsuario'] = "Administrador";
    include ("../../../controles/conexion.php");
    $con = conectar();
    $sql = "SELECT * FROM usuario";
    $query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="es">

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
    <title>Remover Usuario</title>
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
    <form action="../../../controles/Usuarios/Control_Usuarios.php?flag=3" method="post">
        <div class="row" style="margin-top:2%; margin-bottom:5%; width: 80%;">
            <!-- Formulario de Hogares -->
            <div class="col s4 offset-s4">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><b>Remover a un Usuario</b></span>
                        <div class="divider" style="margin-bottom:3%;"></div>
                        <div class="row">
                            <!-- Run del Usuario -->
                            <div class="col s12">
                                <label for="txtRut">Rut Usuario</label>
                                <input placeholder="Ingrese RUN del usuario" id="txtRut" name="txtRut" type="text"
                                    class="validate" required>
                            </div>
                        </div>
                    </div>
                    <!-- Boton agregar un hogar -->
                    <div class="card-action center-align teal darken-4">
                        <input type="submit" value="Remover Usuario"
                            class="waves-effect waves-light btn-small  teal darken-1">
                    </div>
                </div>
            </div>            
        </div>
        <div class="row">
            <!-- Tabla para visualizar a los integrantes actuales -->
            <div class="col s10 offset-s1" style="margin-bottom:6.8%;">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align"><b>Usuarios actuales en el sistema</b></span>
                        <div class="divider" style="margin-bottom:3%;"></div>
                        <table class="highlight striped">
                            <thead>
                                <tr>
                                    <th>Run Integrante</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Fecha Nacimiento</th>
                                    <th>Estado Civil</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Sexo</th>
                                    <th>Etnia</th>
                                    <th>Ocupacion</th>
                                    <th>Discapacidad</th>
                                    <th>Cargo</th>
                                    <th>Estado Socio</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    while($row = mysqli_fetch_array($query)){                                 
                                ?>
                                <tr>
                                    <td><?php echo $row['Run_Integrante']; ?></td>
                                    <td><?php echo $row['Nombre']; ?></td>
                                    <td><?php echo $row['Apellido']; ?></td>
                                    <td><?php echo $row['Fecha_Nac']; ?></td>
                                    <td><?php echo $row['ID_Civil']; ?></td>
                                    <td><?php echo $row['Telefono']; ?></td>
                                    <td><?php echo $row['Correo']; ?></td>
                                    <td><?php echo $row['Sexo']; ?></td>
                                    <td><?php echo $row['Id_Etnia']; ?></td>
                                    <td><?php echo $row['Id_Ocupacion']; ?></td>
                                    <td><?php echo $row['Id_Discapacidad']; ?></td>
                                    <td><?php echo $row['Id_Cargo']; ?></td>
                                    <td><?php echo $row['Estado_Socio']; ?></td>
                                    <td><a href="#!" class="waves-effect waves-light btn red darken-4"><i
                                                class="material-icons center">delete</i></a></td>
                                    <td><a href="#!" class="waves-effect waves-light btn blue darken-4"><i
                                                class="material-icons center">edit</i></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>


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