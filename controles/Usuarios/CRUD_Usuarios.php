<?php
    include ("../conexion.php");
    $con = conectar();

    class CRUD_Usuarios{

        public function conectarBD(){
            $con = conectar();
        }

        //Function Insertar - Modificar Segun datos de la Tabla Usuarios BD
        public function insertarUsuarios($run,$nombre,$apellido,$fecha_nac,$id_civil,$telefono,$correo,$sexo,$id_etnia,$id_ocupacion,$id_discapacidad,$id_cargo,$estado_socio){
            $con = conectar();
            $sql = "INSERT INTO Usuario (Run_Integrante,Nombre,Apellido,Fecha_Nac,ID_Civil,Telefono,Correo,Sexo,Id_Etnia,Id_Ocupacion,Id_Discapacidad,Id_Cargo,Estado_Socio) 
            VALUES ('$run','$nombre','$apellido','$fecha_nac','$id_civil','$telefono','$correo','$sexo','$id_etnia','$id_ocupacion','$id_discapacidad','$id_cargo','$estado_socio')";
            $query = mysqli_query($con,$sql);
            $con -> close();
        } 
        
        //Agregar Usuarios a la Tabla Acceso
        public function agregarAcceso($run,$user,$pass){
            $con = conectar();
            $sql = "INSERT INTO Acceso (Run_Integrante,UserName,UserPass) VALUES ('$run','$user','$pass')";
            $query = mysqli_query($con,$sql);
            echo $sql;
            $con -> close();
        }

        //Function Actualizar - Modificar Segun datos de la Tabla Usuarios BD
        public function actualizarUsuarios($run,$nombre,$apellido,$fecha_nac,$id_civil,$telefono,$correo,$sexo,$id_etnia,$id_ocupacion,$id_discapacidad,$id_cargo,$estado_socio){
            $con = conectar();
            $sql = "UPDATE Usuario SET Nombre = '$nombre' , Apellido = '$apellido' , Fecha_Nac = '$fecha_nac' , ID_Civil = '$id_civil' , Telefono = '$telefono' , Correo = '$correo' , Sexo = '$sexo' , Id_Etnia = '$id_etnia' , Id_Ocupacion = '$id_ocupacion' , Id_Discapacidad = '$id_discapacidad' , Id_Cargo = '$id_cargo' , Estado_Socio = '$estado_socio' WHERE Run_Integrante = '$run'";
            $query = mysqli_query($con, $sql);
            $con->close();
        }

        //Function Eliminar - Modificar Segun datos de la Tabla Usuarios BD
        public function eliminarUsuarios($rut){
            $con = conectar();
            $sql = "DELETE FROM Usuario WHERE Run_Integrante = '$rut'";
            $sql2 = "UPDATE Usuario SET Estado_Socio = 'Deshabilitado' WHERE Run_Integrante = '$rut'";
            $query = mysqli_query($con, $sql);  
            $query2 = mysqli_query($con, $sql2);  
            $con->close();        
        }        
    }

?>