<?php

    // Incluimos el archivo de CRUD y las variables
    include ("CRUD_Acceso.php");
    session_start();
    $crud = new CRUD_Acceso();
    $flag = $_GET['flag'];
    
    $run = $_REQUEST['txtRut'];
    $username = $_REQUEST['txtUserName'];
    $userpass = $_REQUEST['txtUserPass'];
    $estado = $_REQUEST['rdbEstado'];    
    

    //Switch para saber que accion se va a realizar
    switch ($flag) {
        case 1:
            $crud -> agregarAcceso($run,$username,$userpass,$estado);
            header ("Location: ../../vistas/formularios/gUsuarios/agregarAcceso.php");
            break;
        case 2:
            $id = $_REQUEST['txtId'];
            $crud -> editarAcceso($run,$username,$userpass,$estado);
            header ("Location: ../../vistas/formularios/gUsuarios/editarAcceso.php");
            break;
        case 3:
            $id = $_GET['id'];
            $crud -> eliminarAcceso($id);
            if($_SESSION['TipoUsuario'] == "Administrador1"){
                header ("Location: ../../vistas/formularios/gUsuarios/agregarAcceso.php");
            }else{
                header ("Location: ../../vistas/formularios/gUsuarios/editarAcceso.php");
            }
            break;
        case 4:
            $id = $_GET['id'];
            $estado = $_GET['estado'];
            if ($estado == 1) {
                $estado = "Habilitado";
            } else {
                $estado = "Deshabilitado";
            }
            $crud -> habilitarAcceso($id,$estado);
            if($_SESSION['TipoUsuario'] == "Administrador1"){
                header ("Location: ../../vistas/formularios/gUsuarios/agregarAcceso.php");
            }else{
                header ("Location: ../../vistas/formularios/gUsuarios/editarAcceso.php");
            }            
            break;
    }

?>