<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include '../../../controles/conexion.php';
    $con = conectar();
    $_SESSION['TipoUsuario'] = "Administrador1";
    $sql = "SELECT * FROM Avisos"; 
    $query = mysqli_query($con,$sql);   
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
    <title>Creacion de Noticia</title>
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

    <!-- Formulario Creacion de Noticias-->
    <div class="container" style="margin-top:2%; margin-bottom:8%;">
        <form action="../../../controles/Noticias/Controles_Noticias.php?flag=1" method="post" enctype="multipart/form-data">
            <div class="row">
                <!-- Datos del Formulario -->
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title center-align"><b>Crear una Noticia</b></span>
                            <div class="divider" style="margin-bottom:3%;"></div>
                            <div class="row">
                                <!-- Input del Run Integrantes -->
                                <div class="col s3">                                    
                                    <label for="txtRun">Run Creador</label>
                                    <input placeholder="Ingrese run del creador" id="txtRun" name="txtRun" type="text">
                                </div>
                                <!-- Input del Titulo Aviso -->
                                <div class="col s3">                                    
                                    <label for="txtTitulo">Titulo del Aviso</label>
                                    <input placeholder="Ingrese titulo del aviso" id="txtTitulo" name="txtTitulo"
                                        type="text">
                                </div>
                                <!-- Input del Contenido Aviso -->
                                <div class="col s6">                                    
                                    <label for="txtContenido">Contenido del Aviso</label>
                                    <input placeholder="Ingrese contenido del aviso" id="txtContenido" name="txtContenido"
                                        type="text">
                                </div>
                                                               
                            </div>
                            <div class="row">
                                <!-- Input del Categoria Aviso -->
                                <div class="col s3">
                                    <label>Tipo de Acta</label>
                                    <select class="browser-default" name="cmbTipo" id="cmbTipo">
                                        <option value="" disabled selected>Seleccione el Tipo</option>
                                        <option value="Social">Social</option>
                                        <option value="Directiva">Directiva</option>
                                        <option value="Comunidad">Comunidad</option>
                                        <option value="Venta">Venta</option>
                                        <option value="General">General</option>
                                        <option value="Deporte">Deporte</option>
                                        <option value="Otro">Otro</option>                                    
                                    </select>
                                </div> 
                                <!-- Input del Imagen del Aviso -->
                                <div class="col s9">                                    
                                    <label for="txtImagen">Imagen del Aviso</label>
                                    <input  id="txtImagen" name="txtImagen" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="card-action center-align teal darken-4">
                            <input type="submit" value="Crear" class="waves-effect waves-light btn-small  teal darken-1"
                                name="btnEditar" id="bntCrear">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Tabla con los Datos -->
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title center-align"><b>Listado de Noticias Registradas</b></span>
                            <div class="divider" style="margin-bottom:3%;"></div>
                            <table class="highlight striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Run Creador</th>
                                        <th>Titulo</th>
                                        <th>Contenido</th>
                                        <th>Categoria</th>
                                        <th>Imagen</th>
                                        <th>Borrar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        while($row = mysqli_fetch_array($query)){                                 
                                    ?>
                                    <tr>
                                        <td><?php echo $row['Id_Aviso']; ?></td>
                                        <td><?php echo $row['Run_Integrante']; ?></td>
                                        <td><?php echo $row['Titulo']; ?></td>
                                        <td><?php echo $row['Contenido']; ?></td>
                                        <td><?php echo $row['Categoria']; ?></td>
                                        <td><img src="<?php echo "../".$row['Imagen'] ?>" class="materialboxed" width="60" height="60"></td>
                                        <td><a href="../../../controles/Noticias/Controles_Noticias.php?flag=3&id=<?php echo $row['Id_Aviso'] ?>"
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