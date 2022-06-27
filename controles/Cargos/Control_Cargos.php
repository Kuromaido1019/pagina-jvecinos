<?php

    // Incluimos el archivo de conexión a la base de datos
    session_start();
    include ("CRUD_Cargos.php");
    $crud = new CRUD_Cargos();
    $con = conectar();

    //Obtener variables
    $flag = $_GET['flag'];
    $id = $_GET['id'];    
    $idCargo = $_REQUEST['txtId'];
    $descripcion = $_REQUEST['txtNombre'];
    

    //Switch para ejecutar los metodos
    switch ($flag){
        case 1:
            $crud -> agregarCargo($descripcion);
            header ("Location: ../../vistas/formularios/gCargos/agregarCargo.php");
            break;
        case 2:
            $crud -> eliminarCargo($id);
            if($_SESSION['TipoUsuario'] == "Administrador1"){
                header ("Location: ../../vistas/formularios/gCargos/agregarCargo.php");
            }else{
                header ("Location: ../../vistas/formularios/gCargos/editarCargo.php");
            }            
            break;
        case 3:
            $crud -> actualizarCargo($idCargo,$descripcion);
            header ("Location: ../../vistas/formularios/gCargos/editarCargo.php");
            break;
        
    }

?>