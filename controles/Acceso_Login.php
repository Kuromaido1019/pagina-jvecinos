<?php
    //Import de la Conexion
    session_start();
    require ("conexion.php");
    $con = conectar();

    //Obtencion de los Datos del Usuario
    $userName = $_POST['txtUsuario'];
    $userPass = $_POST['txtPassword'];

    //Consulta de la Base de Datos
    $con = conectar();
    //Busqueda de Usuario en la Base de Datos
    $sql = "SELECT * FROM Acceso WHERE UserName = '$userName' AND UserPass = '$userPass'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $runUsuario = $row['Run_Integrante'];
    
    //Validacion de Existencia de Usuario
    if($row["UserName"] == $userName && $row["UserPass"] == $userPass){

        //Validacion Tipo de Usuario (Administrador o Usuario)
        $sql2 = "SELECT Id_Cargo FROM Usuario WHERE Run_Integrante = '$runUsuario'";
        $_SESSION["Run_Integrante"] = $runUsuario;
        $result2 = mysqli_query($con, $sql2);
        $row2 = mysqli_fetch_array($result2);

        //Discriminacion del Usuario
        if($row2["Id_Cargo"] == 1){
            //Redireccion a la Pagina de Vecino
            header("Location: ../vistas/formularios/inicio_vecino.php");
        }else{
            //Redireccion a la Pagina de Directiva
            header("Location: ../vistas/formularios/inicio_admin.php");
        }
    }else{
        //Redireccion a la Pagina de Login
        header("Location: ../vistas/login.php");        
    }
            
?>