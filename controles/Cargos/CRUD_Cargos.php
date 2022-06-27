<?php

    // Incluimos el archivo de conexión a la base de datos
    include ("../conexion.php");
    $con = conectar();

    class CRUD_Cargos{

        public function conectarBD(){
            $con = conectar();
        }

        //Metodo para registrar un Cargo
        function agregarCargo($descripcion){
            $con = conectar();
            $sql = "INSERT INTO Cargo (Descripcion) VALUES ('$descripcion')";
            $query = mysqli_query($con,$sql);
            $con -> close();
        }

        //Metodo para eliminar un Cargo
        function eliminarCargo($id){
            $con = conectar();
            $sql = "DELETE FROM Cargo WHERE Id_Cargo = '$id'";
            $query = mysqli_query($con,$sql);
            $con -> close();
        }

        //Metodo para actualizar un Cargo
        function actualizarCargo($id,$descripcion){
            $con = conectar();
            $sql = "UPDATE Cargo SET Descripcion = '$descripcion' WHERE Id_Cargo = '$id'";
            $query = mysqli_query($con,$sql);
            $con -> close();
        }

    }

?>