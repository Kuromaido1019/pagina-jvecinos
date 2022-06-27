<?php

    // Incluimos el archivo de conexión a la base de datos
    include ("../conexion.php");
    $con = conectar();

    class CRUD_Documentos{

        public function conectarBD(){
            $con = conectar();
        }

        //Metodo para registrar una solicitud de documento
        function registrarSolicitud($run,$tipoDoc,$fechaSol,$horaSol,$fechaEnt,$horaEnt,$comentario,$estado,$folio,$nombre){
            $con = conectar();
            $sql = "INSERT INTO Documento (Run_Integrante,Id_Tipo_Documento,Fecha_Solicitud,Hora_Solicitud,Fecha_Entrega,Hora_Entrega,Comentario,Estado_Solicitud,Folio,Documento_Nombre_Retira) 
                    VALUES ('$run','$tipoDoc','$fechaSol','$horaSol','$fechaEnt','$horaEnt','$comentario','$estado','$folio','$nombre')";
            $query = mysqli_query($con,$sql);
            $con -> close();
        }

        function registrarTipoDocumento($descripcion){
            $con = conectar();
            $sql = "INSERT INTO Tipo_Documento (Descripcion) VALUES ('$descripcion')";
            $query = mysqli_query($con,$sql);
            $con -> close();
        }

        function eliminarTipoDocumento($id){
            $con = conectar();
            $sql = "DELETE FROM Tipo_Documento WHERE Id_Tipo_Documento = '$id'";
            $query = mysqli_query($con,$sql);
            $con -> close();
        }
        
        function actualizarTipoDocumento($id,$descripcion){
            $con = conectar();
            $sql = "UPDATE Tipo_Documento SET Descripcion = '$descripcion' WHERE Id_Tipo_Documento = '$id'";
            $query = mysqli_query($con,$sql);
            $con -> close();
        }

        function cambiarEstadoDoc($id,$estado){
            $con = conectar();
            $sql = "UPDATE Documento SET Estado_Solicitud = '$estado' WHERE Id_Documento = '$id'";
            $query = mysqli_query($con,$sql);
            $con -> close();
        }        
    
    }

?>