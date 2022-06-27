<?php

    // Incluimos el archivo de conexión a la base de datos
    session_start();
    include ("CRUD_Noticias.php");
    $con = conectar();
    $crud = new CRUD_Noticias();

    //Variables
    $flag = $_GET['flag'];
    if($flag == 1 || $flag == 2){
        $run = $_REQUEST['txtRun'];
        $titulo = $_REQUEST['txtTitulo'];
        $contenido = $_REQUEST['txtContenido'];
        $categoria = $_REQUEST['cmbTipo'];
    }
    
    $imagen = '';  

    if(isset($_FILES['txtImagen'])){        
        $file = $_FILES['txtImagen'];
        $nombre = $file['name'];
        $tipo = $file['type'];
        $ruta_provisional = $file['tmp_name'];
        $size = $file['size'];
        $dimensiones = getimagesize($ruta_provisional);
        $width = $dimensiones[0];
        $height = $dimensiones[1];
        $carpeta = "../../img/Noticias/";
        if($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif'){
            echo "Error, el archivo no es una imagen";
        }else{
            $src = $carpeta.$nombre;
            move_uploaded_file($ruta_provisional, $src);
            $imagen = "../../img/Noticias/".$nombre;            
        }
    }


    //Switch para los metodos
    switch ($flag){
        case 1:                        
            $crud -> agregarNoticias($run,$titulo,$contenido,$categoria,$imagen);  
            if($_SESSION['TipoUsuario'] == "Administrador1" || $_SESSION['TipoUsuario'] == "Administrador2"){
                header ("Location: ../../vistas/formularios/gNoticias/agregarNoticia.php");
            }else{
                header ("Location: ../../vistas/formularios/gNoticias/agregarNoticia2.php");
            }                 
            break;
        case 2:
            $idAviso = $_REQUEST['txtId'];
            $crud -> editarNoticias($idAviso,$run,$titulo,$contenido,$categoria,$imagen);
            if($_SESSION['TipoUsuario'] == "Administrador1" || $_SESSION['TipoUsuario'] == "Administrador2"){
                header ('Location: ../../vistas/formularios/gNoticias/editarNoticias.php');
            }else{
                header ('Location: ../../vistas/formularios/gNoticias/editarNoticias2.php');
            }        
            break;
        case 3:
            $id = $_GET['id'];
            $crud -> eliminarNoticias($id);
            if($_SESSION['TipoUsuario']=="Administrador1"){
                header ('Location: ../../vistas/formularios/gNoticias/agregarNoticia.php');
            }else if($_SESSION['TipoUsuario']=="Administrador2"){
                header ('Location: ../../vistas/formularios/gNoticias/editarNoticias.php');
            }else if($_SESSION['TipoUsuario']=="Vecino1"){
                header ('Location: ../../vistas/formularios/gNoticias/agregarNoticia2.php');
            }else if($_SESSION['TipoUsuario']=="Vecino2"){
                header ('Location: ../../vistas/formularios/gNoticias/editarNoticias2.php');
            }             
            break;        
        }


?>