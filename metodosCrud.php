<?php

    class Metodos{

        public function mostrarDatos($sql){

                $con = new conectar();
                $conexion=$con->conexion();

                $result=mysqli_query($conexion,$sql);

                return mysqli_fetch_all($result,MYSQLI_ASSOC);

        }

        public function insertarDatosNombre($datos){

            $con =new conectar();
            $conexion = $con->conexion();

            $sql="INSERT into t_estudiante (nombre,apellido,nota1,nota2)
							values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]')";

			return $result=mysqli_query($conexion,$sql);


        }
        public function eliminarDatos($datos){

            $con =new conectar();
            $conexion = $con->conexion();
            

            $sql="DELETE from t_estudiante where id = '$datos' ";

			return $result=mysqli_query($conexion,$sql);


        }



    }



?>