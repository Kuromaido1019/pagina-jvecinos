<?php
    //Conexion a la base de datos
    include ('../../../controles/conexion.php');
    $con = conectar();
    $sql = "SELECT COUNT(Estado_Socio) AS uvSi FROM Usuario WHERE Estado_Socio = 'Habilitado';";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
    $uvSi = $row['uvSi'];
    $sql2 = "SELECT COUNT(Estado_Socio) AS uvNo FROM Usuario WHERE Estado_Socio = 'Deshabilitado';";
    $query2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_array($query2);
    $uvNo = $row2['uvNo'];
    $sql3 = "SELECT COUNT(Fecha_Nac) as uMayor FROM Usuario WHERE Fecha_Nac <= '1960-01-01';";
    $query3 = mysqli_query($con, $sql3);
    $row3 = mysqli_fetch_array($query3);
    $uMayor = $row3['uMayor'];
    $sql4 = "SELECT COUNT(Id_Discapacidad) as uDisc FROM Usuario WHERE Id_Discapacidad < 5;";
    $query4 = mysqli_query($con, $sql4);
    $row4 = mysqli_fetch_array($query4);
    $uDisc = $row4['uDisc'];
    $sql5 = "SELECT COUNT(Id_Discapacidad) as uAmbas FROM Usuario WHERE Id_Discapacidad < 5 AND Fecha_Nac <= '1960-01-01';";
    $query5 = mysqli_query($con, $sql5);
    $row5 = mysqli_fetch_array($query5);
    $uAmbas = $row5['uAmbas'];

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
    <link rel="stylesheet" href="../../../css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ver Estadisticas</title>
    <style>
        h6 {
            font-size: 22px;
            font-family: 'Roboto', sans-serif;
            padding: 2px;
            color: #212121;
        }

        b {
            color: #004d40;
        }
    </style>
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
            <h1 class="center-align" style="padding: 1.7%; color: transparent;">Informacion proximamente</h1>
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

    <!-- Estadisticas de la pagina -->
    <div class="container left-align" style="width:90%">
        <div class="row">
            <div class="col s12">
                <h2 class="header center green-text">Estadisticas</h2>
            </div>
        </div>
    </div>

    <!-- Estadisticas de la pagina -->
    <div class="container">
        <div class="row">
            <!-- Grafico -->
            <div class="col s12 m8">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center">Cantidad de Registros por Tabla</span>
                        <canvas id="estadisticaBD"></canvas>
                    </div>
                </div>
            </div>
            <!-- Tabla -->
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center"><b>Estadisticas Generales</b></span>
                        <div class="divider"></div>
                        <div class="row">
                            <div class="col s10">                                
                                <h6>Usuarios Votantes:</h6>
                                <h6>Usuarios No Votantes:</h6>
                                <div class="divider"></div>
                                <h6>Adultos Mayores:</h6>
                                <h6>Personas con Discapacidad:</h6>
                                <h6>Posee Ambas: </h6>
                                <div class="divider"></div>
                                <h6>Hogares Arrendatarios:</h6>
                                <h6>Hogares Propietarios:</h6>
                                <div class="divider"></div>
                            </div>                            
                            <div class="col s2 center">                                
                                <h6><?php echo $row['uvSi'] ?></h6>
                                <h6><?php echo $row2['uvNo'] ?></h6>
                                <div class="divider"></div>
                                <h6><?php echo $row3['uMayor'] ?></h6>
                                <h6><?php echo $row4['uDisc'] ?></h6>
                                <h6><?php echo $row5['uAmbas'] ?></h6>
                                <div class="divider"></div>
                                <h6>2</h6>
                                <h6>6</h6>
                            </div>
                        </div>
                        
                    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
    <script>
        <?php            
            //Consulta para obtener la cantidad de registros de cada tabla
            //Acceso
            $sql = "SELECT COUNT(*) AS cantAcceso FROM Acceso";
            $query = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($query);
            $cantAcceso = $row['cantAcceso'];            
            //Acta_Reunion
            $sql2 = "SELECT COUNT(*) AS cantActa FROM Acta_Reunion";
            $query2 = mysqli_query($con, $sql2);
            $row2 = mysqli_fetch_array($query2);
            $cantActa = $row2['cantActa'];
            //Avisos
            $sql3 = "SELECT COUNT(*) AS cantAviso FROM Avisos";
            $query3 = mysqli_query($con, $sql3);
            $row3 = mysqli_fetch_array($query3);
            $cantAviso = $row3['cantAviso'];
            //Cargo
            $sql4 = "SELECT COUNT(*) AS cantCargo FROM Cargo";
            $query4 = mysqli_query($con, $sql4);
            $row4 = mysqli_fetch_array($query4);
            $cantCargo = $row4['cantCargo'];
            //Civil
            $sql5 = "SELECT COUNT(*) AS cantCivil FROM Civil";
            $query5 = mysqli_query($con, $sql5);
            $row5 = mysqli_fetch_array($query5);
            $cantCivil = $row5['cantCivil'];
            //Directiva
            $sql6 = "SELECT COUNT(*) AS cantDirectiva FROM Directiva";
            $query6 = mysqli_query($con, $sql6);
            $row6 = mysqli_fetch_array($query6);
            $cantDirectiva = $row6['cantDirectiva'];
            //Discapacidad
            $sql7 = "SELECT COUNT(*) AS cantDiscapacidad FROM Discapacidad";
            $query7 = mysqli_query($con, $sql7);
            $row7 = mysqli_fetch_array($query7);
            $cantDiscapacidad = $row7['cantDiscapacidad'];
            //Documento
            $sql8 = "SELECT COUNT(*) AS cantDocumento FROM Documento";
            $query8 = mysqli_query($con, $sql8);
            $row8 = mysqli_fetch_array($query8);
            $cantDocumento = $row8['cantDocumento'];
            //Estado_Civil
            $sql9 = "SELECT COUNT(*) AS cantEstado FROM Estado_Civil";
            $query9 = mysqli_query($con, $sql9);
            $row9 = mysqli_fetch_array($query9);
            $cantEstado = $row9['cantEstado'];
            //Etnias
            $sql10 = "SELECT COUNT(*) AS cantEtnia FROM Etnias";
            $query10 = mysqli_query($con, $sql10);
            $row10 = mysqli_fetch_array($query10);
            $cantEtnia = $row10['cantEtnia'];
            //Hogar
            $sql11 = "SELECT COUNT(*) AS cantHogar FROM Hogar";
            $query11 = mysqli_query($con, $sql11);
            $row11 = mysqli_fetch_array($query11);
            $cantHogar = $row11['cantHogar'];
            //Integrantes_Hogar
            $sql12 = "SELECT COUNT(*) AS cantIntegrante FROM Integrantes_Hogar";
            $query12 = mysqli_query($con, $sql12);
            $row12 = mysqli_fetch_array($query12);
            $cantIntegrante = $row12['cantIntegrante'];
            //Ocupacion
            $sql13 = "SELECT COUNT(*) AS cantOcupacion FROM Ocupacion";
            $query13 = mysqli_query($con, $sql13);
            $row13 = mysqli_fetch_array($query13);
            $cantOcupacion = $row13['cantOcupacion'];
            //Tipo_Documento
            $sql14 = "SELECT COUNT(*) AS cantTipo FROM Tipo_Documento";
            $query14 = mysqli_query($con, $sql14);
            $row14 = mysqli_fetch_array($query14);
            $cantTipo = $row14['cantTipo'];
            //Usuario
            $sql15 = "SELECT COUNT(*) AS cantUsuario FROM Usuario";
            $query15 = mysqli_query($con, $sql15);
            $row15 = mysqli_fetch_array($query15);
            $cantUsuario = $row15['cantUsuario'];            
        ?>

        //Variables para Estadisticas Grafico BD
        var cAcceso = '<?=$cantAcceso?>'
        var cActa = '<?=$cantActa?>'
        var cAviso = '<?=$cantAviso?>'
        var cCargo = '<?=$cantCargo?>'
        var cCivil = '<?=$cantCivil?>'
        var cDirectiva = '<?=$cantDirectiva?>'
        var cDiscapacidad = '<?=$cantDiscapacidad?>'
        var cDocumento = '<?=$cantDocumento?>'
        var cEstado = '<?=$cantEstado?>'
        var cEtnia = '<?=$cantEtnia?>'
        var cHogar = '<?=$cantHogar?>'
        var cIntegrante = '<?=$cantIntegrante?>'
        var cOcupacion = '<?=$cantOcupacion?>'
        var cTipo = '<?=$cantTipo?>'
        var cUsuario = '<?=$cantUsuario?>'

        //Grafico Estadisticas BD
        const ctx = document.getElementById('estadisticaBD');
        const estadisticaBD = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Acceso', 'Actas de Reunion', 'Avisos', 'Cargo', 'Civil', 'Directiva', 'Discapacidad',
                    'Documento', 'Estado Civil', 'Etnias', 'Integrantes Hogar', 'Hogar', 'Ocupacion',
                    'Tipo Documento', 'Usuarios'
                ],
                datasets: [{
                    data: [cAcceso, cActa, cAviso, cCargo, cCivil, cDirectiva, cDiscapacidad, cDocumento,
                        cEstado, cEtnia, cIntegrante, cHogar, cOcupacion, cTipo, cUsuario
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(232, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(222, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(111, 102, 255, 0.2)',
                        'rgba(231, 159, 64, 0.2)',
                        'rgba(142, 99, 132, 0.2)',
                        'rgba(76, 162, 235, 0.2)',
                        'rgba(142, 206, 86, 0.2)'

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(232, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(222, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(111, 102, 255, 1)',
                        'rgba(231, 159, 64, 1)',
                        'rgba(142, 99, 132, 1)',
                        'rgba(76, 162, 235, 1)',
                        'rgba(142, 206, 86, 1)'
                    ],
                    borderWidth: 3
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });        
    </script>    
</body>

</html>