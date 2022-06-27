<!DOCTYPE html>
<html lang="en">

<?php


    require '../../../modelo/Hogar.php';
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
    <title>Agregar Hogar</title>
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
            <div class="col s3">
                <a href="../inicio_Admin.php" class="waves-effect waves-light btn cyan darken-4"><i
                        class="material-icons left">arrow_back</i>Volver</a>
            </div>
        </div>
    </div>

    <!-- Formulario Agregar Hogar -->
    <div class="container" style="margin-top:2%; margin-bottom:5%; width: 80%;">
        <form action="../../../controles_hogar/control_agregarAdmin.php" method="post">
            <!-- Formulario de Hogares -->
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><b>Paso 1: Agregar un Hogar</b></span>
                        <div class="divider" style="margin-bottom:3%;"></div>
                        <div class="row">
                            <!-- Calle del Hogar -->
                            <div class="col s5">
                                <label>Calle</label>
                                <select class="browser-default" name="cmbCalle" id="cmbSector">
                                    <option value="Tal-Tal">Tal-Tal</option>
                                    <option value="Los Fresnos">Los Fresnos</option>
                                    <option value="San Pedro">San Pedro</option>
                                </select>
                            </div>
                            <!-- Numero del Hogar -->
                            <div class="col s3">
                                <label>Numero:</label>
                                <select class="browser-default" name="cmbNumero" id="cmbSector">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <!-- Input sobre el Sector del Hogar -->
                            <div class="col s4">
                                <label>Sector</label>
                                <select class="browser-default" name="cmbSector" id="cmbSector">
                                    <option value="" disabled selected>Seleccione su sector</option>
                                    <option value="Oriente">Oriente</option>
                                    <option value="Poniente">Poniente</option>
                                    <option value="Sur">Sur</option>
                                    <option value="Norte">Norte</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Input Fecha de Creacion del Hogar (Matias aqui se debe establecer la actual y bloquear el input date <3 ) -->
                            <div class="col s4">
                                <label for="txtFechaCreacion">Fecha Creacion</label>
                                <input id="txtFechaCreacion" type="date" name="txtFechaCreacion" class="validate"
                                    required disabled>
                            </div>
                            <!-- Input sobre el Estado del Hogar -->
                            <div class="col s4">
                                <label>Estado del Hogar</label>
                                <select class="browser-default" name="cmbEstado" id="cmbSector">
                                    <option value="" selected>Seleccione su estado</option>
                                    <option value="Habilitado">Habilitado</option>
                                    <option value="Deshabilitado">Deshabilitado</option>
                                    <option value="Pendiente" selected>Pendiente</option>
                                </select>
                            </div>
                        </div>
                        <!-- Input para agregar un integrante a ese hogar -->
                        <div class="col s3">
                            <label for="txtID">Rut integrante Principal</label>
                            <input placeholder="Ingrese rut" id="txtNumeracion" name="txtRut"
                                type="text" class="validate" required >
                        </div>
                    </div>


                    <!-- Boton agregar un hogar -->
                    <div class="card-action center-align teal darken-4">
                        <input type="submit" value="Agregar Hogar"
                            class="waves-effect waves-light btn-small  teal darken-1">
                    </div>
                </div>
            </div>

            <!-- Tabla para visualizar a los integrantes actuales -->
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align"><b>Hogares registrados</b></span>
                        <div class="divider" style="margin-bottom:3%;"></div>
                        <table class="highlight striped">
                            <thead>
                                <tr>
                                    <th>Id Hogar</th>
                                    <th>Calle</th>
                                    <th>Numero</th>
                                    <th>Sector</th>
                                    <th>Fecha creacion</th>
                                    <th>Estado Hogar</th>
                                    <th>Rut integrante</th>
                                </tr>
                            </thead>

                            <?php 
                                    foreach ($_SESSION['arreglo_hogares'] as $key){
                                    
                                        echo "<tbody>";
                                        echo     "<tr>";
                                        echo    "      <td>", $key->getId_hogar(),"</td>";        
                                        echo    "      <td>", $key->getCalle_hogar(),"</td>";   
                                        echo    "      <td>", $key->getNumero_hogar(),"</td>";       
                                        echo    "      <td>",$key->getSector(),"</td>";          
                                        echo    "      <td>",$key->getFecha_creacion(),"</td>";    
                                        echo    "      <td>",$key-> getEstado_hogar(),"</td>";   
                                        echo    "      <td>",$key-> getRut_integrante(),"</td>";        
                                        echo    "</tr>";
                                        echo "</tbody>";        
                                    }

                                        
                                ?>
                        </table>
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