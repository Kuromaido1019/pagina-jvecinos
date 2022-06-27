<?php
    session_start();
    include ("../../../controles/conexion.php");
    $con = conectar();
    $run = $_SESSION["Run_Integrante"];
    //Datos Generales
    $sql = "SELECT * FROM Usuario WHERE Run_Integrante = '$run'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);    
    //Datos Complementarios Civil
    $sql2 = "SELECT * FROM Civil WHERE Id_Civil = '$row[ID_Civil]'";
    $query2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_array($query2);
    //Datos Complementarios Etnia
    $sql3 = "SELECT * FROM Etnias WHERE Id_Etnia = '$row[Id_Etnia]'";
    $query3 = mysqli_query($con, $sql3);
    $row3 = mysqli_fetch_array($query3);
    //Datos Complementarios Ocupacion
    $sql4 = "SELECT * FROM Ocupacion WHERE Id_Ocupacion = '$row[Id_Ocupacion]'";
    $query4 = mysqli_query($con, $sql4);
    $row4 = mysqli_fetch_array($query4);
    //Datos Complementarios Discapacidad
    $sql5 = "SELECT * FROM Discapacidad WHERE Id_Discapacidad = '$row[Id_Discapacidad]'";
    $query5 = mysqli_query($con, $sql5);
    $row5 = mysqli_fetch_array($query5);
    //Datos Complementarios Cargo
    $sql6 = "SELECT * FROM Cargo WHERE Id_Cargo = '$row[Id_Cargo]'";
    $query6 = mysqli_query($con, $sql6);
    $row6 = mysqli_fetch_array($query6);

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
    <title>Vser mis Datos</title>
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

<body style="background-image: url(../../../img/MisDatos.png)">

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

    <!-- Boton Volver atras -->
    <div class="container left-align" style="width:90%; margin-top:2%">
        <div class="row">
            <div class="col s3">
                <a href="../inicio_vecino.php" class="waves-effect waves-light btn cyan darken-4"><i
                        class="material-icons left">arrow_back</i>Volver</a>
            </div>
        </div>
    </div>

    <!-- Card con los datos del Usuario -->
    <div class="container" style="margin-top: 4%; margin-bottom: 7%;">
        <div class="row">
            <!-- Imagen del Ver mis Datos -->
            <div class="col s4 offset-s1">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="../../../img/Modulos/MisDatos.gif" height="620">
                    </div>
                </div>
            </div>
            <!-- Datos del Usuario -->
            <div class="col s6">
                <div class="card hoverable" style="height: 620px">
                    <div class="card-content">
                        <span class="card-title center"><b>Datos Generales</b></span>
                        <div class="divider"></div><br>
                        <div class="row">
                            <!-- Columnas -->
                            <div class="col s5">                                
                                <h6><b>Nombre:</b></h6>
                                <h6><b>Run:</b></h6>
                                <h6><b>Fecha de Nacimiento:</b></h6>
                                <h6><b>Estado Civil:</b></h6>                                                            
                                <h6><b>Telefono:</b></h6>
                                <h6><b>Correo:</b></h6>
                                <h6><b>Sexo:</b></h6>
                                <h6><b>Etnia:</b></h6>
                                <h6><b>Ocupacion:</b></h6>
                                <h6><b>Discapacidad</b>:</h6>
                                <h6><b>Cargo:</b></h6>
                                <h6><b>Estado Usuario:</b></h6>
                            </div>
                            <!-- Datos -->
                            <div class="col s7">
                                <h6><?php echo $row['Nombre']." ".$row['Apellido']; ?></h6>
                                <h6><?php echo $row['Run_Integrante'] ?></h6>
                                <h6><?php echo $row['Fecha_Nac'] ?></h6>
                                <h6><?php echo $row2['Descripcion'] ?></h6>
                                <h6><?php echo $row['Telefono'] ?></h6>
                                <h6><?php echo $row['Correo'] ?></h6>
                                <h6><?php echo $row['Sexo'] ?></h6>
                                <h6><?php echo $row3['Descripcion'] ?></h6>
                                <h6><?php echo $row4['Descripcion'] ?></hh6>
                                <h6><?php echo $row5['Descripcion'] ?></h6>
                                <h6><?php echo $row6['Descripcion'] ?></h6>
                                <h6><?php echo $row['Estado_Socio'] ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer de la pagina -->
    <footer class="page-footer teal darken-4">
        <div class="footer-copyright">
            <div class="container center">
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