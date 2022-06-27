<?php
    session_start();
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
    <link rel="stylesheet" href="../../css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio Vecino</title>
</head>

<body>

    <!-- Barra de Navegacion-->
    <nav>
        <div class="nav-wrapper teal darken-4" style="padding-left: 5%;">
            <i class="material-icons left">admin_panel_settings</i>
            <a href="#!" class="brand-logo left">Acceso Vecino</a>
            <ul class="right hide-on-med-and-down">  
                <li><a href="../../index.html"><i class="material-icons left">account_circle</i>Cerrar Sesion</a></li>
            </ul>
        </div>
    </nav>

    <!-- Imagen con info de la pagina -->
    <div class="row">
        <div class="col s12" style="background-image: url(../../img/bg_house.jpg);" style="height: 400px;">
            <h1 class="center-align" style="padding: 1.7%; color: transparent;">Informacion proximamente</h1>
        </div>
    </div>

    <!-- Presentacion de la pagina -->
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <h1 class="header center green-text">Junta de Vecinos</h1>
            <div class="divider"></div>
            <div class="row center">
                <h5 class="header col s12 light">Gestion del Sistema</h5>
            </div>
        </div>
    </div>

    <!-- Temporal Gestion de Modulos Usuario y hogares -->

    <!-- Collapsible de Menus -->
    <div class="container" style="margin-top:3%; margin-bottom:3%;">
        <ul class="collapsible">
            <!-- Gestion de Hogares -->
            <li>
                <div class="collapsible-header"><i class="material-icons">home</i>Gestion de Hogares</div>
                <div class="collapsible-body">
                    <div class="row">
                        <!-- Card para agregar un hogar -->
                        <div class="col s3">
                            <div class="card cyan accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">add_home</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gHogares/agregarHogar2.php" class="waves-effect waves-light btn cyan accent-4">Crear Hogar</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para editar un hogar -->
                        <div class="col s3">
                            <div class="card teal accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">edit</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gHogares/editarHogar2.php" class="waves-effect waves-light btn teal accent-4">Editar Hogar</a>
                                </div>
                            </div>
                        </div>            
                        <!-- Card para listar a los  hogares -->
                        <div class="col s3">
                            <div class="card  deep-orange accent-3 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">list</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gHogares/listarHogares2.php" class="waves-effect waves-light btn deep-orange accent-3">Ver mis Datos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- Gestion de Usuarios -->
            <li>
                <div class="collapsible-header"><i class="material-icons">manage_accounts</i>Gestion de Usuarios</div>
                <div class="collapsible-body">
                    <div class="row">                        
                        <!-- Card para editar un Usuario -->
                        <div class="col s3">
                            <div class="card teal accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">edit</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gUsuarios/editarUsuario2.php" class="waves-effect waves-light btn teal accent-4">Editar mis Datos</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para ver mis Datos -->
                        <div class="col s3">
                            <div class="card indigo hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">contact_page</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gUsuarios/verDatos.php" class="waves-effect waves-light btn indigo">Ver mis Datos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>                        
            <!-- Gestion de Documentos -->
            <li>
                <div class="collapsible-header"><i class="material-icons">description</i>Gestion de Documentos</div>
                <div class="collapsible-body">
                    <div class="row">
                        <!-- Solicitud de Documentos-->
                        <div class="col s3">
                            <div class="card cyan accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">description</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gDocumentos/solicitarDocumento.php" class="waves-effect waves-light btn cyan accent-4">Solicitar Documento</a>
                                </div>
                            </div>
                        </div>
                        <!-- Ver Solicitudes de Documentos-->
                        <div class="col s3">
                            <div class="card teal accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">find_in_page</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gDocumentos/verSolicitud.php" class="waves-effect waves-light btn teal accent-4">Ver mis Solicitudes</a>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </li>
            <!-- Gestion de Noticias -->
            <li>
                <div class="collapsible-header"><i class="material-icons">newspaper</i>Gestion de Noticias</div>
                <div class="collapsible-body">
                    <div class="row">
                        <!-- Card para agregar una Noticia -->
                        <div class="col s3">
                            <div class="card cyan accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">post_add</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gNoticias/agregarNoticia2.php" class="waves-effect waves-light btn cyan accent-4">Crear una Noticia</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para editar una Noticia -->
                        <div class="col s3">
                            <div class="card teal accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">edit</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gNoticias/editarNoticias2.php" class="waves-effect waves-light btn teal accent-4">Editar una Noticia</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para remover una Noticia -->
                        <div class="col s3">
                            <div class="card light-blue accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">delete_outline</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gNoticias/agregarNoticia2.php" class="waves-effect waves-light btn light-blue accent-4">Remover
                                        una Noticia</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para listar a las Noticias -->
                        <div class="col s3">
                            <div class="card  deep-orange accent-3 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">list</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gNoticias/editarNoticias2.php" class="waves-effect waves-light btn deep-orange accent-3">Listar
                                        Noticias</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- Gestion de Observaciones -->
            <li>
                <div class="collapsible-header"><i class="material-icons">visibility</i>Gestion de Obvservaciones</div>
                <div class="collapsible-body">
                    <div class="row">
                        <div class="col s3">
                            <div class="card cyan accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">add_home</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="" class="waves-effect waves-light btn cyan accent-4">Crear Hogar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="card teal accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">edit</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="" class="waves-effect waves-light btn teal accent-4">Editar Hogar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="card light-blue accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">delete_outline</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="" class="waves-effect waves-light btn light-blue accent-4">Remover
                                        Hogar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="card  deep-orange accent-3 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">list</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="" class="waves-effect waves-light btn deep-orange accent-3">Listar
                                        Hogares</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- Gestion de Actas Tickets -->
            <li>
                <div class="collapsible-header"><i class="material-icons">confirmation_number</i>Gestion de Tickets
                </div>
                <div class="collapsible-body">
                    <div class="row">
                        <div class="col s3">
                            <div class="card cyan accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">add_home</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="" class="waves-effect waves-light btn cyan accent-4">Crear Hogar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="card teal accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">edit</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="" class="waves-effect waves-light btn teal accent-4">Editar Hogar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="card light-blue accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">delete_outline</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="" class="waves-effect waves-light btn light-blue accent-4">Remover
                                        Hogar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="card  deep-orange accent-3 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">list</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="" class="waves-effect waves-light btn deep-orange accent-3">Listar
                                        Hogares</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

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
    <script src="../../js/materialize.min.js">
        $(document).ready(function() {
            $('.collapsible').collapsible();
        });
    </script>
    <script src="../../js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
    <script>
        //definir variables de rut        
        Swal.fire({
        title:"Bienvenido Vecino!",
        text: "Aqui podras gestionar todo lo que necesitasss",       
        icon: 'info',        
        confirmButtonText: 'Lo entiendo!',
        width: '30%',            
        padding: '1rem',
        background: '#F5F5F5',      
        backdrop: true,      
        timer: 5000,         
        timerProgressBar: true,           
        })
    </script>
</body>

</html>