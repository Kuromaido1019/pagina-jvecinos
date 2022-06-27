<?php

    // Incluimos el archivo de conexión a la base de datos
    include ("../conexion.php");
    $con = conectar();

    class CRUD_Noticias{

        public function conectarBD(){
            $con = conectar();
            return $con;
        }

        //Agregar noticias a la bd
        function agregarNoticias($run,$titulo,$contenido,$categoria,$imagen){
            $con = conectar();
            $sql = "INSERT INTO Avisos (Run_Integrante,Titulo,Contenido,Categoria,Imagen) VALUES ('$run','$titulo','$contenido','$categoria','$imagen')";
            $result = mysqli_query($con,$sql);
            echo $sql;
            $con -> close();
        }

        //Editar una noticia en la bd
        function editarNoticias($id,$run,$titulo,$contenido,$categoria,$imagen){
            $con = conectar();
            $sql = "UPDATE Avisos SET Run_Integrante = '$run', Titulo = '$titulo', Contenido = '$contenido', Categoria = '$categoria', Imagen = '$imagen' WHERE Id_Aviso = '$id'";
            $result = mysqli_query($con,$sql);
            $con -> close();
        }

        //Eliminar una noticia de la bd
        function eliminarNoticias($id){
            $con = conectar();
            $sql = "DELETE FROM Avisos WHERE Id_Aviso = '$id'";
            $result = mysqli_query($con,$sql);
            $con -> close();
        }

    }

?>