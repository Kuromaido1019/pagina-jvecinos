<?php

    // Incluimos el archivo de conexión a la base de datos
    session_start();
    include ("CRUD_Actas.php");
    $crud = new CRUD_Actas();
    $con = conectar();

    //Obtencion de Variables
    $flag = $_GET['flag']; 
    $id = $_GET['id'];   

    $idDirectiva= $_REQUEST['txtIdDirectiva'];
    $tipoReunion= $_REQUEST['cmbTipoReunion'];
    $fechaActa= $_REQUEST['txtFecha'];
    $horaActa= $_REQUEST['txtHora'];
    $tituloActa= $_REQUEST['txtTitulo'];
    $obvservaciones= $_REQUEST['txtObservacion'];    

    //Switch para realizar las acciones correspondientes
    switch($flag){
        case 1:
            $crud -> registrarActa($idDirectiva,$tipoReunion,$fechaActa,$horaActa,$tituloActa,$obvservaciones);
            header ('Location: ../../vistas/formularios/gActas/agregarActa.php');
            break;
        case 2:
            $crud -> actualizarActa($idActa,$idDirectiva,$tipoReunion,$fechaActa,$horaActa,$tituloActa,$obvservaciones);
            header ('Location: ../../vistas/formularios/gActas/editarActa.php');
            break;
        case 3:
            $crud -> eliminarActa($id);
            if($_SESSION['TipoUsuario'] == 'Administrador1'){
                header ('Location: ../../vistas/formularios/gActas/agregarActa.php');
            }else{
                header ('Location: ../../vistas/formularios/gActas/editarActa.php');
            }
            
            break;
    }

?>