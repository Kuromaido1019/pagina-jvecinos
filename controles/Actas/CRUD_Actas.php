<?php

    // Incluimos el archivo de conexión a la base de datos
    include ("../conexion.php");
    $con = conectar();

    class CRUD_Actas{
        
        public function conectarBD(){
            $con = conectar();
        }

        //Metodo para registrar una Acta
        function registrarActa($idDirectiva,$tipoReunion,$fechaActa,$horaActa,$tituloActa,$obvservaciones){
            $con = conectar();
            $sql = "INSERT INTO Acta_Reunion (Id_Directiva,Tipo_Reunion,Fecha_Acta,Hora_Acta,Titulo_Acta,Observaciones) 
            VALUES ('$idDirectiva','$tipoReunion','$fechaActa','$horaActa','$tituloActa','$obvservaciones')";
            $result = mysqli_query($con,$sql);
            $con -> close();
        }

        //Metodo para actualizar una Acta
        function actualizarActa($idActa,$idDirectiva,$tipoReunion,$fechaActa,$horaActa,$tituloActa,$obvservaciones){
            $con = conectar();
            $sql = "UPDATE Acta_Reunion SET Id_Directiva='$idDirectiva',Tipo_Reunion='$tipoReunion',Fecha_Acta='$fechaActa',Hora_Acta='$horaActa',Titulo_Acta='$tituloActa',Observaciones='$obvservaciones' WHERE Id_Acta='$idActa'";
            $result = mysqli_query($con,$sql);
            $con -> close();
        }

        //Metodo para eliminar una Acta
        function eliminarActa($idActa){
            $con = conectar();
            $sql = "DELETE FROM Acta_Reunion WHERE Id_Acta='$idActa'";
            $result = mysqli_query($con,$sql);
            $con -> close();
        }

    }

?>