<?php

    //Import del CRUD
    require ("CRUD_Usuarios.php");
    session_start();
    $crud = new CRUD_Usuarios();

    //Obtencion de Variables
    $flag = $_GET['flag'];
    $run = $_REQUEST["txtRut"];

    //Tomar datos en caso de que se necesiten
    if($flag != 3){
        $nombre = $_REQUEST["txtNombre"];
        $apellido = $_REQUEST["txtApellido"];
        $fecha_nac = $_REQUEST["txtFechaNac"];
        $id_civil = $_REQUEST["cmbCivil"];
        $telefono = $_REQUEST["txtTelefono"];
        $correo = $_REQUEST["txtCorreo"];
        $sexo = $_REQUEST["cmbSexo"];
        $id_etnia = $_REQUEST["cmbEtnia"];
        $id_ocupacion = $_REQUEST["cmbOcupacion"];
        $id_discapacidad = $_REQUEST["cmbDiscapacidad"];
        $id_cargo = $_REQUEST["cmbCargo"];
        $estado_socio = $_REQUEST["rdbEstado"];
    }    
        
    //Swtich para ejecutar las funciones correspondientes
    switch ($flag) {
        case 1:
            //Insertar Datos     
            $crud->insertarUsuarios($run,$nombre,$apellido,$fecha_nac,$id_civil,$telefono,$correo,$sexo,$id_etnia,$id_ocupacion,$id_discapacidad,$id_cargo,$estado_socio);
            //Datos necesarios para crear las credenciales del Usuario
            if($_SESSION['TipoUsuario'] == "General"){        
                $userName = $_REQUEST["txtUserName"];
                $userPass = $_REQUEST["txtUserPass"];                
                $crud ->agregarAcceso($run,$userName,$userPass);
            }
            if($_SESSION["TipoUsuario"] == "Administrador"){
                header ("Location: ../../vistas/formularios/inicio_admin.php");
            }else if($_SESSION["TipoUsuario"] == "Vecino"){
                header ("Location: ../../vistas/formularios/inicio_vecino.php");
            }else{                
                header ("Location: ../../vistas/login.php");
            }            
            break;
        case 2:
            //Actualizar Datos            
            $crud->actualizarUsuarios($run,$nombre,$apellido,$fecha_nac,$id_civil,$telefono,$correo,$sexo,$id_etnia,$id_ocupacion,$id_discapacidad,$id_cargo,$estado_socio);
            if($_SESSION["TipoUsuario"] == "Administrador"){
                header ("Location: ../../vistas/formularios/inicio_admin.php");
            }else{
                header ("Location: ../../vistas/formularios/inicio_vecino.php");
            } 
            break;
        case 3:
            //Eliminar Datos            
            $crud->eliminarUsuarios($run);
            if($_SESSION["TipoUsuario"] == "Administrador"){
                header ("Location: ../../vistas/formularios/gUsuarios/removerUsuario.php");
            }else{
                header ("Location: ../../vistas/formularios/inicio_vecino.php");
            } 
            break;        
        default:
            //Opcion por defecto
            die("Error");
            break;
    }
?>