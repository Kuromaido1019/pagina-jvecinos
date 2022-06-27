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
    <title>Inicio Administrador</title>
</head>

<body>

    <!-- Barra de Navegacion-->
    <nav>
        <div class="nav-wrapper teal darken-4" style="padding-left: 5%;">
            <i class="material-icons left">admin_panel_settings</i>
            <a href="#!" class="brand-logo left">Acceso Administrador</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="../../vistas/formularios/gEstadisticas/verEstadisticas.php"><i class="material-icons left">bar_chart</i>Estadisticas</a></li>              
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
                            <div class="card teal accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">add_home</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gHogares/agregarHogar.php"
                                        class="waves-effect waves-light btn teal accent-4">Crear
                                        Hogar</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para editar un hogar -->
                        <div class="col s3">
                            <div class="card green accent-2 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">edit</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gHogares/editarHogar.php"
                                        class="waves-effect waves-light btn green accent-2">Editar
                                        hogares</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para remover un hogar -->
                        <div class="col s3">
                            <div class="card cyan accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">delete_outline</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gHogares/removerHogar.php"
                                        class="waves-effect waves-light btn cyan accent-4">Remover Hogar</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para listar a los  hogares -->
                        <div class="col s3">
                            <div class="card  orange accent-3 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">list</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gHogares/listarHogares.php"
                                        class="waves-effect waves-light btn orange accent-3">Listar Hogares</a>
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
                        <!-- Card para agregar un Usuario -->
                        <div class="col s3">
                            <div class="card cyan accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">person_add</i>
                                </div>
                                <div class="card-action center-align">
                                <a href="gUsuarios/agregarUsuario.php"
                                        class="waves-effect waves-light btn cyan accent-4">Crear
                                        Hogar</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para editar un Usuario -->
                        <div class="col s3">
                            <div class="card teal accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">edit</i>
                                </div>
                                <div class="card-action center-align">
                                <a href="gUsuarios/editarUsuario.php"
                                        class="waves-effect waves-light btn teal accent-4">Editar hogares</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para remover un Usuario -->
                        <div class="col s3">
                            <div class="card light-blue accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">delete_outline</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gUsuarios/removerUsuario.php"
                                        class="waves-effect waves-light btn light-blue accent-4">Remover Usuarios</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para listar a los  Usuarios -->
                        <div class="col s3">
                            <div class="card  deep-orange accent-3 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">list</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gUsuarios/listarUsuarios.php"
                                        class="waves-effect waves-light btn deep-orange accent-3">Listar
                                        usuario</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para asignar credenciales a los  Usuarios -->
                        <div class="col s3">
                            <div class="card indigo hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">password</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gUsuarios/agregarAcceso.php"
                                        class="waves-effect waves-light btn indigo">Asignar Credenciales</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para editar credenciales a los  Usuarios -->
                        <div class="col s3">
                            <div class="card amber darken-3 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">key</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gUsuarios/editarAcceso.php"
                                        class="waves-effect waves-light btn amber darken-3">Editar Credenciales</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- Gestion de Cargos -->
            <li>
                <div class="collapsible-header"><i class="material-icons">supervisor_account</i>Gestion de Cargos</div>
                <div class="collapsible-body">
                    <div class="row">
                        <!-- Card para agregar un Cargo -->
                        <div class="col s3">
                            <div class="card yellow accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">group_add</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gCargos/agregarCargo.php" class="waves-effect waves-light btn yellow accent-4">Crear un Cargo</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para editar un Cargo -->
                        <div class="col s3">
                            <div class="card amber accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">edit</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gCargos/editarCargo.php" class="waves-effect waves-light btn amber accent-4">Editar un Cargo</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para remover un Cargo -->
                        <div class="col s3">
                            <div class="card deep-orange darken-3 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">highlight_off</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gCargos/agregarCargo.php" class="waves-effect waves-light btn deep-orange darken-3">Remover un Cargo</a>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </li>
            <!-- Gestion de Actas Reunion -->
            <li>
                <div class="collapsible-header"><i class="material-icons">diversity_3</i>Gestion de Actas Reunion</div>
                <div class="collapsible-body">
                    <div class="row">
                        <!-- Card para agregar un Acta -->
                        <div class="col s3">
                            <div class="card teal lighten-3 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">description</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gActas/agregarActa.php" class="waves-effect waves-light btn teal lighten-3">Crear un Acta</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para editar un Acta -->
                        <div class="col s3">
                            <div class="card teal accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">edit</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gActas/editarActa.php" class="waves-effect waves-light btn teal accent-4">Editar un Acta</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para remover un Acta -->
                        <div class="col s3">
                            <div class="card light-blue accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">delete_outline</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gActas/agregarActa.php" class="waves-effect waves-light btn light-blue accent-4">Remover
                                        un Acta</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para listar a los Actas -->
                        <div class="col s3">
                            <div class="card  deep-orange accent-3 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">source</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gActas/editarActa.php" class="waves-effect waves-light btn deep-orange accent-3">Listar
                                        Actas Registradas</a>
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
                        <!-- Creacion de Documentos-->
                        <div class="col s3">
                            <div class="card cyan accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">description</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gDocumentos/crearDocumento.php" class="waves-effect waves-light btn cyan accent-4">Crear Documento</a>
                                </div>
                            </div>
                        </div>
                        <!-- Actualizar de Documentos-->
                        <div class="col s3">
                            <div class="card deep-orange lighten-1 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">save</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gDocumentos/actualizarDocumento.php" class="waves-effect waves-light btn deep-orange lighten-1">Actualizar Documento</a>
                                </div>
                            </div>
                        </div>                        
                        <!-- Ver Aprobar Solicitudes de Documentos-->
                        <div class="col s3">
                            <div class="card amber lighten-2 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">verified</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="gDocumentos/aprobarSolicitudes.php" class="waves-effect waves-light btn amber lighten-2">Liberacion de Solicitudes</a>
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
                                    <a href="gNoticias/agregarNoticia.php" class="waves-effect waves-light btn cyan accent-4">Crear una Noticia</a>
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
                                    <a href="gNoticias/editarNoticias.php" class="waves-effect waves-light btn teal accent-4">Editar una Noticia</a>
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
                                    <a href="gNoticias/agregarNoticia.php" class="waves-effect waves-light btn light-blue accent-4">Remover
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
                                    <a href="gNoticias/editarNoticias.php" class="waves-effect waves-light btn deep-orange accent-3">Listar
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
                        <!-- Card para agregar una Observacion -->
                        <div class="col s3">
                            <div class="card  lime accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">hearing</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="" class="waves-effect waves-light btn  lime accent-4">Crear una Observacion</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para editar una Observacion -->
                        <div class="col s3">
                            <div class="card green accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">edit</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="" class="waves-effect waves-light btn green accent-4">Editar una Observacion</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para remover una Observacion -->
                        <div class="col s3">
                            <div class="card yellow accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">delete_outline</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="" class="waves-effect waves-light btn yellow accent-4">Remover
                                        una Observacion</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para listar a las Observaciones -->
                        <div class="col s3">
                            <div class="card  deep-purple hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">list</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="" class="waves-effect waves-light btn deep-purple">Listar
                                        Observaciones</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- Gestion de Tickets -->
            <li>
                <div class="collapsible-header"><i class="material-icons">confirmation_number</i>Gestion de Tickets
                </div>
                <div class="collapsible-body">
                    <div class="row">
                        <!-- Card para agregar un Ticket -->
                        <div class="col s3">
                            <div class="card indigo darken-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">confirmation_number</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="" class="waves-effect waves-light btn indigo darken-4">Crear un Ticket</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para editar un Ticket -->
                        <div class="col s3">
                            <div class="card  teal darken-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">edit</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="" class="waves-effect waves-light btn  teal darken-4">Editar un Ticket</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para remover un Ticket -->
                        <div class="col s3">
                            <div class="card light-blue accent-4 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">delete_outline</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="" class="waves-effect waves-light btn light-blue accent-4">Remover
                                        un Ticket</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card para listar a los Tickets -->
                        <div class="col s3">
                            <div class="card  deep-orange accent-3 hoverable">
                                <div class="card-content white-text center-align">
                                    <i class="large material-icons">list</i>
                                </div>
                                <div class="card-action center-align">
                                    <a href="" class="waves-effect waves-light btn deep-orange accent-3">Listar
                                        Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
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
    <script src="../../js/materialize.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../js/main.js">
        $(document).ready(function() {
            $('.collapsible').collapsible();
            $('select').formSelect();
        });
    </script>
    <script>
        Swal.fire({
            title: "Bienvenida Directiva!",
            text: "Aqui podras gestionar todo lo que necesitas",
            icon: 'info',
            confirmButtonText: 'Lo entiendo!',
            width: '30%',
            padding: '1rem',
            background: '#F5F5F5',
            backdrop: true,
            timer: 5000,
            timerProgressBar: true,
        });
    </script>

</body>

</html>