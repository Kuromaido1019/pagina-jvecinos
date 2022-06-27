<?php
    // Incluimos el archivo de CRUD
    session_start();
    include ("CRUD_Documentos.php");
    $crud = new CRUD_Documentos();    
    
    //Obtencion de Variables
    $flag = $_GET['flag'];
    $id = $_GET['id'];
    $idDocumento = $_GET['idDocumento'];
    $estadoDoc = $_GET['estadoDoc'];
    if($flag == 3){
        $idDoc = $_REQUEST['txtId'];        
    }
    //Tomar datos en caso de que se necesiten
    $run = $_REQUEST['txtRut'];
    $tipoDoc = $_REQUEST['cmbDocumento'];
    $fechaSol = $_REQUEST['txtFechaSolicitud'];
    $horaSol = $_REQUEST['txtHoraSolicitud'];
    $fechaEnt = $_REQUEST['txtFechaEntrega'];
    $horaEnt = $_REQUEST['txtHoraEntrega'];
    $comentario = $_REQUEST['txtComentario'];
    $estado = $_REQUEST['cmbEstadoSolicitud'];
    $folio = $_REQUEST['txtFolio'];
    $nombre = $_REQUEST['txtNombre'];  

    //Eliminar un Tipo Documento
    if(isset($id)){
        $crud -> eliminarTipoDocumento($id);
        header ("Location: ../../vistas/formularios/gDocumentos/crearDocumento.php");
    }

    //Aprobar o Rechazar una Solicitud de Documento
    if(isset($idDocumento)){
        if($estadoDoc == 1){
            $estadoDoc = "Aprobado";
        }else{
            $estadoDoc = "Rechazado";
        }
        $crud -> cambiarEstadoDoc($idDocumento,$estadoDoc);
        header ("Location: ../../vistas/formularios/gDocumentos/aprobarSolicitudes.php");
    }
          
    //Ejecucion de Metodos
    switch($flag){
        case 1:
            $crud -> registrarSolicitud($run,$tipoDoc,$fechaSol,$horaSol,$fechaEnt,$horaEnt,$comentario,$estado,$folio,$nombre);
            if($_SESSION['TipoUsuario'] == "Vecino"){
                header("Location: ../../vistas/formularios/inicio_vecino.php");
            }else if($_SESSION['TipoUsuario'] == "Administrador"){
                header("Location: ../../vistas/formularios/inicio_admin.php");
            }
            break;
        case 2:
            $crud -> registrarTipoDocumento($nombre);
            header("Location: ../../vistas/formularios/gDocumentos/crearDocumento.php");           
            break;
        case 3:
            $crud -> actualizarTipoDocumento($idDoc,$nombre);
            header("Location: ../../vistas/formularios/gDocumentos/actualizarDocumento.php");
            break;        
    }

?>