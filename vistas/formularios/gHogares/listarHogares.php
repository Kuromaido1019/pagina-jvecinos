<!DOCTYPE html>
<html lang="en">

<?php
    require '../../../modelo/Hogar.php';
    require '../../../modelo/Integrante_hogar.php';
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
    <title>Listar Hogar</title>
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
                <!-- Tabla para visualizar a los integrantes actuales -->
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title center-align"><b>Hogares registrados actualmente</b></span>
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
                                        <th>Rut Integrantes</th>
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
                                        echo    "      <td>",$key->getEstado_hogar(),"</td>";  
                                        foreach($_SESSION['arreglo_IntegrantesHogar'] as $i){
                                            if($key->getId_hogar() == $i->getId_hogar()){
                                                echo     "<tr>";
                                                echo "<td></td>";
                                                echo "<td></td>";
                                                echo "<td></td>";
                                                echo "<td></td>";
                                                echo "<td></td>";
                                                echo "<td></td>";
                                                echo    "      <td>",$i->getRut_integrante(),"</td>";   
                                                echo    "</tr>";
                                            }
                                        }
                                                
                                                echo    "</tr>";
                                                
                                                echo "</tbody>"; 
                                                
                                         
                                    }

                                        
                                ?>
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