<?php

    // Incluimos el archivo de conexión a la base de datos
    include ("../conexion.php");
    $con = conectar();

    class CRUD_Acceso{

        function conectarBD(){
            $con = conectar();            
        }  
        
        //Metodo para agregar usuarios al Acceso
        function agregarAcceso($run,$username,$userpass,$estado){
            $con = conectar();
            $sql = "INSERT INTO Acceso (Run_Integrante,UserName,UserPass,Estado) VALUES ('$run','$username','$userpass','$estado')";
            $result = mysqli_query($con,$sql);
            $con -> close();
        }

        //Metodo para editar usuarios al Acceso
        function editarAcceso($run,$username,$userpass,$estado){
            $con = conectar();
            $sql = "UPDATE Acceso SET Run_Integrante='$run',UserName='$username',UserPass='$userpass',Estado='$estado' WHERE Run_Integrante='$run'";
            $result = mysqli_query($con,$sql);
            $con -> close();
        }

        //Metodo para eliminar usuarios al Acceso
        function eliminarAcceso($id){
            $con = conectar();
            $sql = "DELETE FROM Acceso WHERE Id_Acceso='$id'";
            $result = mysqli_query($con,$sql);
            $con -> close();
        }

        //Metodo para habilitar o deshabilitar el Acceso
        function habilitarAcceso($id,$estado){
            $con = conectar();
            $sql = "UPDATE Acceso SET Estado='$estado' WHERE Id_Acceso='$id'";
            $result = mysqli_query($con,$sql);
            $con -> close();
        }
    }

?>