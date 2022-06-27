<?php
    //Import de la Conexion
    session_start();
    require ("conexion.php");
    $con = conectar();

    //Obtencion de los Datos del Usuario
    $userName = $_POST['txtUserName'];
    $userPass = $_POST['txtUserPass'];
    $rut = $_POST['txtRut'];

    //Consulta de la Base de Datos
    $sql = "SELECT UserPass FROM Acceso WHERE UserName = '$userName' AND Run_Integrante = '$rut'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
    echo $sql;

    //Reenviar datos devueltos por la consulta
    $_SESSION["Usuario"] = $userName;
    $_SESSION["Contraseña"] = $row['UserPass'];
    echo "User: ".$_SESSION["Usuario"]." Pass: ".$_SESSION["Contraseña"];
    header ("Location: ../vistas/RecuperarPass.php");

?>